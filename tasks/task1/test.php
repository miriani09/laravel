<?php
require_once "conn.php";

class Timer{
    public string $start;
    public string $stop;
    public string $full_time;
    public string $score;

    function __construct($start,$stop,$full_time,$score){
        $this->start = $start;
        $this->stop = $stop;
        $this->full_time = $full_time;
        $this->score = $score;
    }
}
// ობიექტის შექმნა
$timer = new Timer(0,0,0,0);

//ტესტის დაწყების დრო, იწერება timer ცხრილში "start" სტრიქონში
if (isset($_GET['start'])){
    $start_date = strtotime(date('Y-m-d H:i:s'));
    $sql_insert = "INSERT INTO timer(start)
                        VALUES ('$start_date')";
    $conn->exec($sql_insert);
}

if (isset($_GET['submit'])){


    //მოგვაქ დაწყების დროის სტრიქონი ბაზიდან
    $select_start = $conn->prepare("SELECT start FROM timer ORDER BY start DESC LIMIT 1");
    $select_start->execute();
    $result_start = $select_start->fetchColumn();

    //Timer კლასის ობიექტს ვანიჭებთ წამოღებულ დაწყების დროს.
    $timer->start=$result_start;

    //გადაგვყავს თარიღი ჩვენს ფორმატზე
    $result_start1 = date('Y-m-d H:i:s',$result_start);
    $print_start_test = $result_start1." - test started";

    //ვქმნით ტესტის შეწყვეტის თარიღს.
    $stop_date = strtotime(date('Y-m-d H:i:s'));
    //ტესტის შეწყვეტის დრო, იწერება timer ცხრილის stop სტრიქონში
    $sql_insert = "INSERT INTO timer(stop)
                        VALUES ('$stop_date')";
    $conn->exec($sql_insert);

    //კლასის ობიექტს ვანიჭებთ დამთავრების თარიღს
    $timer->stop=$stop_date;
    $print_stop_test = date('Y-m-d H:i:s', $stop_date)." - test stopped";

    //ბაზაში იწერება ტესტის სრული დრო.
    $sql_insert_full_time = "INSERT INTO timer(full_time)
                        VALUES ('$timer->full_time')";
    $conn->exec($sql_insert_full_time);

    //კლასის ობიექტზე მინიჭებული თვისებებით ხდება გამოანგარიშება თუ რამდენი დრო გავიდა დაწყებიდან დასაასრულამდე.
    $full_time = ($timer->stop - $timer->start) - 60*60;
    $timer->full_time=$full_time;
    //კლასის ობიექტს ვანიჭებთ ტესტის სრულ დროს
    $print_full_time =  date('H:i:s', $full_time)." - full time";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
    ?>
        <form method="get">
            <button class="btn btn-success" name="start">Start test</button>
        </form>
    <?php

    $count = 0;
    if (isset($_GET['start'])){
        $words = $conn->prepare("SELECT * FROM words ORDER BY RAND() LIMIT 4");
        $words->execute();
        $result = $words->fetchAll((PDO::FETCH_ASSOC));

        foreach ($result as $i => $item){
            ?>
            <form method="get">
            <br>
                <div class="form-check form-check-inline">
                    <h3><?php echo $item["english"]?><input type="hidden" name="question<?php echo $i ?>" value="<?php echo $item["id"]?>"></h3>
                    <?php
                    $words = $conn->prepare("SELECT * FROM words WHERE english != '{$item["english"]}' ORDER BY RAND() LIMIT 3");
                    $words->execute();
                    $result = $words->fetchAll((PDO::FETCH_ASSOC));
                    array_push($result, $item);
                    shuffle($result);

                    foreach ($result as $item2){
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer<?php echo $i ?>" value="<?php echo $item2['georgian'] ?>" required>
                            <label class="form-check-label" for="inlineRadio1"><?php echo $item2["georgian"] ?></label>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            <?php
            }
        ?>
                <br>
                <button class="btn btn-success" name="submit">Submit test</button>
            </form>
        <?php
    }
    ?>
<?php
    if (isset($_GET['submit'])) {
        $count_answer = 0;

        for ($i = 0;$i <= 3;$i++){
            $question = $_GET['question'.$i];

            $query0 = $conn->prepare("SELECT georgian FROM words WHERE id = '$question'");
            $query0->execute();
            $correct_answer = $query0->fetchColumn();

            if ($correct_answer == $_GET['answer'.$i]){
                $count_answer+=1;
            }
        }


        echo $print_start_test;
        echo "<br>";
        echo $print_stop_test;
        echo "<br>";
        echo $print_full_time;
        echo "<br>";

        echo "<br>";
        echo "Correct Answers - ". $count_answer;
    }

?>
</body>
</html>