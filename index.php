<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi dan Dekripsi</title>
    
</head>
<style>
body {
    width: 95%;
    min-height: 95vh;
    background: #FEEDB5;
    background-position: center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container {
    width: 400px;
    min-height: 200px;
    background: #FFF;
    border-radius: 20px;
    box-shadow: 0 0 5px rgba(0,0,0,.3);
    padding: 40px 30px;
}
    .btn-group .button {
    background-color: #4CAF50;
    border: 1px solid green;
    border-radius: 10px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    width: 250px;
    display: block;
    }

    .btn-group .button:not(:last-child) {
    border-bottom: none;  
    }

    .btn-group .button:hover {
    background-color: #3e8e41;  
    }
</style>
<body>
    <center>
        <div class="container">
            <h1>Enkripsi dan Dekripsi</h1>
            <div class="btn-group">
            <button class="button" onclick="location.href='enkripsi.php'">Enkripsi</button><br>
            <button class="button" onclick="location.href='dekripsi.php'">Dekripsi</button>
            </div>
        </div>
    </center>
</body>
</html>