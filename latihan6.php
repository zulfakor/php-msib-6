<form action="POST" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" placeholder="Masukkan nama anda"><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Masukkan password anda"><br><br>

    <input type="submit" name="masuk" value="Login">
</form>

<?php
if(isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "rahasia") {
        $_SESSION['user'] = $username;
        header('location: beranda.php');
    } else {
        echo "
        <script>
            alert('Username/Password Anda Salah')
        </script>";
    }
}
?>
