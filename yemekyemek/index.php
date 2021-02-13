    <?php include('partials-front/menu.php'); ?>

    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>

    <?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <section class="categories">
        <div class="container">
            <h2 class="text-center">One cıkanlar</h2>

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
                                        echo "<div class='error'>Image not Available</div>";
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
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Yemek menu</menu></h2>

        <?php 

            $baglan2=mysqli_connect("localhost","root","","yemekyemek");
            $sayi2 = mysqli_num_rows(mysqli_query($baglan2, "SELECT * FROM 'yemek' WHERE active='Yes' AND featured='Yes' LIMIT 6"));
 
            if($sayi2>0)
            for($sayi2=0;$sayi2<=10;$sayi2++)
            {
                while($row=mysqli_fetch_assoc(mysqli_query($baglan2, "SELECT * FROM 'yemek' WHERE active='Yes' AND featured='Yes' LIMIT 6")))
                {
            
                
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                if($image_name=="")
                                {
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h4><?php echo $title; ?></h4>
                            <p class="food-price">TL<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Siparis ver</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                echo "<div class='error'>Food not available.</div>";
            }
            
        ?>

            

 

            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">Tum yemekleri gor</a>
        </p>
    </section>

 
    <?php include('partials-front/footer.php'); ?>