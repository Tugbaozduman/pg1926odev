
<?php include('partials-front/menu.php'); ?>


    <section class="categories">
        <div class="container">
            <h2 class="text-center">Yemekleri kesfet</h2>

            <?php 
                $baglan=mysqli_connect("localhost","root","","yemekyemek");
                $sayi = mysqli_num_rows(mysqli_query($baglan, "SELECT * FROM `kategori`"));
                
                if($sayi>0)
                for($sayi=0;$sayi<=10;$sayi++)
                {
                    while($row=mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM `kategori`ORDER BY RAND() LIMIT 1")))
                    {
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                    
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                     break;
                    }
                }
                else
                {
                    echo "<div class='error'>Category not found.</div>";
                }
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>


    <?php include('partials-front/footer.php'); ?>