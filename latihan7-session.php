<?php
 session_start(); 
 //sesi tangkap login
 //di sini tangkap nama username yang di ketik, ex: admin
?>
<form action="" method="POST">
    <label for="">Username</label>:
    <input type="text" name="username" placeholder="masukan nama anda"><br><br>
    <label for="">Password</label>:
    <input type="password" name="password" placeholder="masukan password anda"><br><br>
    <input type="submit" name="masuk" value="login">
</form>
<?php
if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    //jika user dan password cocok makan dapat login
    //selain itu di tolak
    if($username == 'dono' && $password == '123') {
        $_SESSION['user'] = $username;
        header('location: beranda-session.php');
    } else {
        echo "<script>alert('User & Password Anda Salah, Coba lagi!!'); </script>";
    }
}    
?>