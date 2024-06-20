<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    // Soal No 1
    // Looping I Love PHP
    // Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. 
    // Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat)
    // dan Looping yang ke dua menurun (Descending).
    echo "LOOPING PERTAMA<br>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i - I Love PHP<br>";
    }
    echo "<br>LOOPING KEDUA<br>";
    for ($i = 20; $i >= 2; $i -= 2) {
        echo "$i - I Love PHP<br>";
    }

    echo "<h3>Soal No 2 Looping Array Modul</h3>";
    // Soal No 2
    // Looping Array Module
    // Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut. 
    // Tampung ke dalam array baru bernama $rest
    $numbers = [18, 45, 29, 61, 47, 34];
    echo "array numbers: ";
    print_r($numbers);

    $rest = [];
    foreach ($numbers as $number) {
        $rest[] = $number % 5;
    }

    echo "<br>Array sisa baginya adalah: ";
    print_r($rest);
    echo "<br>";

    echo "<h3>Soal No 3 Looping Associative Array</h3>";
    // Soal No 3
    // Loop Associative Array
    // Terdapat data items dalam bentuk array dimensi. 
    // Buatlah data tersebut ke dalam bentuk Array Asosiatif. 
    // Setiap item memiliki key yaitu : id, name, price, description, source.
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];

    $associativeItems = [];
    foreach ($items as $item) {
        $associativeItems[] = [
            'id' => $item[0],
            'name' => $item[1],
            'price' => $item[2],
            'description' => $item[3],
            'source' => $item[4]
        ];
    }
    echo "<pre>";
    print_r($associativeItems);
    echo "</pre>";

    echo "<h3>Soal No 4 Asterix</h3>";
    // Soal No 4
    // Asterix 5x5
    // Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut:
    // Output: 
    // *
    // * *
    // * * *
    // * * * *
    // * * * * *
    echo "Asterix:<br>";
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

</body>
</html>