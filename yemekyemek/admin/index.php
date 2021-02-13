
<?php include('partials/menu.php'); ?>

        <div class="main-content">
            <div class="wrapper">
                <h1>Kontrol paneli</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                <div class="col-4 text-center">

                    <?php 
                        
                        $sql = "SELECT * FROM 'kategori'";
                        
                        $res = mysqli_query($conn, $sql);
                        
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Kategoriler
                </div>

                <div class="col-4 text-center">

                    <?php 
                         
                        $sql2 = "SELECT * FROM 'yemek'";
                        
                        $res2 = mysqli_query($conn, $sql2);
                        
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Yemekler
                </div>

                <div class="col-4 text-center">
                    
                    <?php 
                         
                        $sql3 = "SELECT * FROM 'siparisler'";
                        
                        $res3 = mysqli_query($conn, $sql3);
                        
                        $count3 = mysqli_num_rows($res3);
                    ?>

                    <h1><?php echo $count3; ?></h1>
                    <br />
                    Toplam siparişler
                </div>

                <div class="col-4 text-center">
                    
                    <?php 
                        
                        $sql4 = "SELECT SUM(total) AS Total FROM 'siparisler' WHERE status='Delivered'";

                        $res4 = mysqli_query($conn, $sql4);

                        $row4 = mysqli_fetch_assoc($res4);
                        
                        $total_revenue = $row4['Total'];

                    ?>

                    <h1>$<?php echo $total_revenue; ?></h1>
                    <br />
                    Gelir uretildi
                </div>

                <div class="clearfix"></div>

            </div>
        </div>

<?php include('partials/footer.php') ?>