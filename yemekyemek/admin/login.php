<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>Giris - Yemek siparis sistemi</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Giris</h1>
            <br><br>

            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <form action="" method="POST" class="text-center">
            Kullanıcı adı: <br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            Parola: <br>
            <input type="password" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            </form>
            
        </div>

    </body>
</html>

<?php 

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        
        $baglan=mysqli_connect("localhost","root","","yemekyemek");
        $sayi = mysqli_num_rows(mysqli_query($baglan, "SELECT * FROM 'admin' WHERE username='$username' AND password='$password'"));
                
                

        if($sayi==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['user'] = $username;
            header('location:'.SITEURL.'admin/');
        }
        else
        {
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        header('location:'.SITEURL.'admin/login.php');
        }


    }

?>