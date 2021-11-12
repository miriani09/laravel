<?php
require_once "../dbconn/dbconn.php";

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
        require "header.php";
    ?>
        <form method="get">
            <button class="btn btn-success" name="start">Start test</button>
        </form>
    <?php

    $count = 0;
    if (isset($_GET['start'])){
        $words = $conn->prepare("SELECT * FROM quiz ORDER BY RAND() LIMIT 7");
        $words->execute();
        $result = $words->fetchAll((PDO::FETCH_ASSOC));

        foreach ($result as $i => $item){
            ?>
            <form method="get">
            <br>
                <div class="form-check form-check-inline">
                    <h3><?php echo $item["question"]?><input type="hidden" name="question<?php echo $i ?>" value="<?php echo $item["id"]?>"></h3>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer<?php echo $i ?>" value="<?php echo $item["id"]?>" required>
                            <label class="form-check-label" for="inlineRadio1"><?php echo $item["answer1"] ?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer<?php echo $i ?>" value="<?php echo $item["id"]?>" required>
                            <label class="form-check-label" for="inlineRadio1"><?php echo $item["answer2"] ?></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="answer<?php echo $i ?>" value="<?php echo $item["id"]?>" required>
                            <label class="form-check-label" for="inlineRadio1"><?php echo $item["answer3"] ?></label>
                        </div>

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

            $query0 = $conn->prepare("SELECT id FROM quiz WHERE id = '$question'");
            $query0->execute();
            $correct_answer = $query0->fetchColumn();

            if ($correct_answer == $_GET['answer'.$i]){
                $count_answer+=1;
            }

            $sql_insert = "INSERT INTO users(score)
                        VALUES ('$count_answer')";
            $conn->exec($sql_insert);
        }
        header("location:users.php");
        echo "<br>";
        echo "Correct Answers - ". $count_answer;
    }
?>
</body>
</html>