<?php
    session_start(); //sesi tangkap login
    if(!$_SESSION['user']){
        header('location: latihan7-session.php');
    }
?>
<h1> Selamat Datang di Web NF</h1>
<h2> Anda Login Sebagai <mark><?php echo $_SESSION['user']; ?></mark> </h2>
<br>
<form method="POST">
    <input type="submit" name="logout" value="logout">
</form>
<?php
if(isset($_POST['logout'])){
    session_destroy(); //lepas sesi login
    header('location: latihan7-session.php');
}    
?>