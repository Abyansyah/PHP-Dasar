<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $siswa = array(
            ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
            ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
            ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
            ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],
        );
        // for ($i=0; $i <count($siswa) ; $i++) { 
        //     echo $siswa[$i]. "<br>";
        // }

        // foreach($siswa as $post ){
        //     foreach($post as $i){
        //         echo $i;
        //         echo "<hr>";
        //     }
        // }

        foreach($siswa as $post){
            echo "<h2>".$post['nama']."</h2>";
            echo "<p>".$post['kelas']."-".$post['jurusan']."<p>";
            echo "<hr>";
        }
    ?>
</body>
</html>