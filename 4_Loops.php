<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $age = array("18", "name", "qwerty", "1234");
        foreach($age as $name) {
        echo $name."<br>";
    }// for each loop in php
    ?>

    <?php
        $students = array
        ("1, 'Pawan Shekhawat', '18', '952394046'",
        "2, 'Mohit Verma', '19', '923452608'",
        "3, 'Amaan Pathan', '21', '8324235211'",
        "4, 'Sayar Pathan', '19', '9123418262'");
        foreach($students as $student) { 
            echo $student."<br>";
    }// for each loop + array in php
    ?>

    <?php
        $power = 999;
        $i = 1;
        while ($i <= 10) {
            echo $power*$i."<br>";
            $i++;
        }// while loop in php
    ?>

    <?php
        $table = 9;
        $i = 1;
        do {
            echo $table*$i."<br>";
            $i++;
        } while ($i <= 10);//do while loop in php
    ?>
</body>
</html>