<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi</title>
</head>
<style>
body {
    padding-top: 100px;
    background: #FEEDB5;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
 
.container {
    width: 350px;
    min-height: 200px;
    background: #FFF;
    border-radius: 20px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=number], select{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

input[type=submit]{
    background-color: #45a049;
    width: 280px;
    }

input[type=button] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

input[type=button]{
    background-color: #45a049;
    width: 280px;
    }
</style>    
<body>
        <?php
           function cipher($char, $key)
           { //fungsi cipher
               if (ctype_alpha($char)) { //cek alphabet atau tidak
                   $nilai = ord(ctype_upper($char) ? 'A' : 'a');
                   $ch = ord($char); //konversi char yang diinput ke ASCII
                   $mod = fmod($ch + $key - $nilai, 26); //perhitangan modulus dengan jumlah alphabet=26
                   $hasil = chr($mod + $nilai); //hasil modulus ditambah dengan nilai dan konversi ke bentuk alphabet, dan tampung dalam variabel
                   return $hasil; //mengembalikan nilai hasil
               } else { //jika yang diinput bukan alphabet maka kembalikan nilai char
                   return $char;
               }
           }
           //fungsi enkripsi
           function enkripsi($input, $key)
           {
               $output = ""; //variabel yang menampung string
               $chars = str_split($input); //variabel untuk menampung data
               //berisi dengan data input yang dikonversi ke dalam bentuk array
               foreach ($chars as $char) { //perulangan untuk menampilkan data array
                   $output .= cipher($char, $key); //berisi hasil function cipher
               }
               return $output; //mengembalikan nilai
           }
           //fungsi dekripsi
           function dekripsi($input, $key)
           {
               return enkripsi($input, 26 - $key); //mengembalikan nilai fungsi enkripsi
           }
        ?>
        <div class="container">
            <center><div>
                <form action="enkripsi.php" method="post">
                    <h1>ENKRIPSI</h1>
                    <div>
                        <input type="text" name="plain" placeholder="Input Text">
                    </div>
                    <div>
                        <input type="number" name="key" placeholder="Input Key">
                    </div>
                    <div>
                        <input type="submit" name="enkripsi" value="Enkripsi">
                    </div>
                </form>
            </div></center>
            <div style="margin-left: 40px;">
                <h4>HASIL ENKRIPSI :
                   <?php if (isset($_POST['enkripsi'])) { 
                    echo enkripsi($_POST['plain'], $_POST['key']); //menampilkan hasil
                    }?></h4>
                <h4>INPUT TEXT :
                   <?php if (isset($_POST['enkripsi'])) { 
                    echo dekripsi(enkripsi($_POST['plain'], $_POST['key']), $_POST['key']); //menampilkan input text
                    }?></h4>
                <h4>INPUT KEY :
                   <?php if (isset($_POST['enkripsi'])) { //menampilkan input key
                    echo $_POST['key']; 
                    }?></h4>
            </div>
            <center><div>
                <input onclick="location.href='index.php'" type="button" value="Kembali">
            </div></center>
        </div>
</body>
</html>