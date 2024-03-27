<?php
    session_start(); //sesi tangkap login
    if(!$_SESSION['user']){
        header('location:latihan6.php');
    }
?>
<h1> Selamat Datang <?php echo $_SESSION['user']; ?> di Web NF </h1>
<br>
<form method="POST">
    <input type="submit" name="logout" value="logout">
</form>
<?php
if(isset($_POST['logout'])){
    session_destroy(); //lepas sesi login
    header('location:latihan6.php');
}    
?>