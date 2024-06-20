<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Function PHP</h1>
    <?php
        echo "<h3>Soal No 1 Greetings</h3>";

        /* Soal No 1
        Greetings
        Buatlah sebuah function greetings() yang menerima satu parameter berupa string.
        contoh: greetings("abduh");
        Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!"
        */

        // Code function di sini
        function greetings($name) {
            echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
        }

        // Hapus komentar untuk menjalankan code!
        greetings("Bagas");
        greetings("Wahyu");
        greetings("nama peserta");

        echo "<br>";

        echo "<h3>Soal No 2 Reverse String</h3>";

        /* Soal No 2
        Reverse String
        Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
        Function reverseString menerima satu parameter berupa string.
        NB: DILARANG menggunakan built-in function PHP seperti strrev(), HANYA gunakan LOOPING!
        reverseString("abdul");
        Output: ludba
        */

        // Code function di sini
        function reverseString($string) {
            $reversed = "";
            for ($i = strlen($string) - 1; $i >= 0; $i--) {
                $reversed .= $string[$i];
            }
            return $reversed;
        }

        // Hapus komentar di bawah ini untuk jalankan Code
        echo reverseString("nama peserta") . "<br>";
        echo reverseString("Garuda Cyber Institute") . "<br>";
        echo reverseString("We Are GC-Ins Developer") . "<br>";

        echo "<br>";
        echo "<h3>Soal No 3 Palindrome</h3>";

        /* Soal No 3
        Palindrome
        Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan.
        Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
        Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
        NB:
        Contoh:
        palindrome("katak") => output : "true"
        palindrome("jambu") => output : "false"
        NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!
        */

        // Code function di sini
        function palindrome($string) {
            $reversed = reverseString($string);
            return $string === $reversed ? "true" : "false";
        }

        // Hapus komentar di bawah ini untuk jalankan code
        echo palindrome("civic") . "<br>"; // true
        echo palindrome("nababan") . "<br>"; // true
        echo palindrome("jambaban") . "<br>"; // false
        echo palindrome("racecar") . "<br>"; // true

        echo "<h3>Soal No 4 Tentukan Nilai</h3>";

        /* Soal 4
        Buatlah sebuah function bernama tentukan_nilai.
        Di dalam function tentukan_nilai yang menerima parameter berupa integer.
        Dengan ketentuan jika parameter integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik”
        Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik”
        Selain itu jika parameter number lebih besar sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup”
        Selain itu maka akan mereturn string “Kurang”
        */

        // Code function di sini
        function tentukan_nilai($nilai) {
            if ($nilai >= 85 && $nilai <= 100) {
                return "Sangat Baik";
            } elseif ($nilai >= 70 && $nilai < 85) {
                return "Baik";
            } elseif ($nilai >= 60 && $nilai < 70) {
                return "Cukup";
            } else {
                return "Kurang";
            }
        }

        // Hapus komentar di bawah ini untuk jalankan code
        echo tentukan_nilai(98) . "<br>"; // Sangat Baik
        echo tentukan_nilai(76) . "<br>"; // Baik
        echo tentukan_nilai(67) . "<br>"; // Cukup
        echo tentukan_nilai(43) . "<br>"; // Kurang
    ?>
</body>
</html>