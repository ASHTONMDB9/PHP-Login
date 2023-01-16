<?php

session_start();

if(isset($_POST['submit']))  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username ==  'Ashton' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /NewPHPsite/account.php');
    } else {
        echo 'Invalid Credentials';
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password"> 
</div>
<input type="submit" value="Login" name="submit">
<div>
<button><a href="/NewPHPsite/account.php">Login as Guest</a></button>
</div>
</form>