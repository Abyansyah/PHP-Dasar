<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <?php 
        $nilai = 90;
        if ($nilai > 90) {
            $grade ="A+";
        } elseif ($nilai > 80 && $nilai <=90)  {
            $grade = "A";
        } elseif ($nilai > 70 && $nilai <=80) {
            $grade = "B+";
        } elseif ($nilai > 60 && $nilai <=70) {
            $grade = "B";
        } elseif ($nilai > 50 && $nilai <=60) {
            $grade = "C+";
        } elseif ($nilai > 40 && $nilai <=50) {
            $grade = "C";
        } elseif ($nilai > 30 && $nilai <=40) {
            $grade = "D";
        } elseif ($nilai <= 30) {
            $grade = "E";
        }

        echo "Nilai anda =  $nilai <br>";
        echo "Grade anda =  $grade";

    ?>
</body>
</html>