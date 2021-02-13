<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Yonetici ekle</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) 
            {
                echo $_SESSION['add']; 
                unset($_SESSION['add']); 
            }
        ?>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>İsim: </td>
                    <td>
                        <input type="text" name="full_name">
                    </td>
                </tr>

                <tr>
                    <td>Kullanici adi: </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>

                <tr>
                    <td>Parola: </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>

<?php include('partials/footer.php'); ?>


<?php 

    if(isset($_POST['submit']))
    {

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO 'admin' SET 
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
 
        $res = mysqli_query($conn, $sql) or die(mysqli_error($link));

        if($res==TRUE)
        {

            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
        
            header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    
?>