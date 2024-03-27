<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM LOGIN</h1>
    <form action="latihan4.php" methode="POST">
        <div>
            <lable >Nama</lable>
            <input type="text" name="nama">
        </div>
        <div>
            <lable>password</lable>
            <input type= "password" name="pass">
        </div>
        <div>
            <lable>email</lable>
            <input type= "email" name="email">
        </div>
        <div>
            <input type="submit" value="simpan">
        </div>
</form>   
</body>
</html>
<?php
echo 'Nama:' . $_POST ['nama'] . '<br>';
echo 'Password:' . $_POST['pass'] . '<br>';
echo 'Email:' . $_POST['email'] . '<br>';
?>