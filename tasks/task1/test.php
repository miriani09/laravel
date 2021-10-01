<?php
    require_once "conn.php";

    $timer = new Timer(0,0,0,0); // ობიექტის შექმნა

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

        $timer->start=$result_start;//Timer კლასის ობიექტს ვანიჭებთ წამოღებულ დაწყების დროს.

        $result_start1 = date('Y-m-d H:i:s',$result_start);//გადაგვყავს თარიღი ჩვენს ფორმატზე
        echo $result_start1." - start test";


        $stop_date = strtotime(date('Y-m-d H:i:s'));//ვქმნით ტესტის შეწყვეტის თარიღს.

        //ტესტის შეწყვეტის დრო, იწერება timer ცხრილის stop სტრიქონში
        $sql_insert = "INSERT INTO timer(stop)
                        VALUES ('$stop_date')";
        $conn->exec($sql_insert);

        echo "<br>";

        $timer->stop=$stop_date;//კლასის ობიექტს ვანიჭებთ დამთავრების თარიღს
        echo date('Y-m-d H:i:s', $stop_date)." - stop test";//გადაგვყავს ჩვენს ფორმატზე.

        echo "<br>";

        //ბაზაში იწერება ტესტის სრული დრო.
        $sql_insert_full_time = "INSERT INTO timer(full_time)
                        VALUES ('$timer->full_time')";
        $conn->exec($sql_insert_full_time);

        echo "<br>";

        $full_time = ($timer->stop - $timer->start) - 60*60;//კლასის ობიექტზე მინიჭებული თვისებებით ხდება გამოანგარიშება თუ რამდენი დრო გავიდა დაწყებიდან დასაასრულამდე.
        $timer->full_time=$full_time;
        echo date('H:i:s', $full_time)." - full time";;
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
        <a href="test.php?start=" class="btn btn-success" type="button">Start Test</a>
    </form>
    <?php
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
     ?>


    <?php
        if (isset($_GET['start'])){
            $words = $conn->prepare("SELECT * FROM words ORDER BY RAND() LIMIT 4 ");
            $words->execute();
            $result = $words->fetchAll((PDO::FETCH_ASSOC));

            foreach ($result as $item){

     ?>
    <form method="post">
        <div class="form-check form-check-inline">
            <h3><?php echo $item["english"]." :"?></h3>
            <?php
                    $words = $conn->prepare("SELECT * FROM words ORDER BY RAND() LIMIT 4");
                    $words->execute();
                    $result = $words->fetchAll((PDO::FETCH_ASSOC));

                    foreach ($result as $item2){
             ?>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="1"><label class="form-check-label" for="inlineRadio1"><?php echo $item2["georgian"] ?></label>
            </div>
                <?php
                    }
                ?>
        </div>
    </form>
    <?php
            }
     ?>

    <form method="get">
        <a href="test.php?submit=" class="btn btn-success" type="button">Submit Test</a>
    </form>
    <?php
        }
     ?>

</body>
</html>