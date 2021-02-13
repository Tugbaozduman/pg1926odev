
    <?php include('partials-front/menu.php'); ?>

    <section class="food-search text-center">
        <div class="container">
            <?php 

                $search = $_POST['search'];
            
            ?>


            <h2>Aradigin yemekler <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Yemek menu</h2>

            <?php 
                $baglan=mysqli_connect("localhost","root","","yemekyemek");
                $sayi = mysqli_num_rows(mysqli_query($baglan, "SELECT * FROM 'yemek' WHERE title LIKE '%$search%' OR description LIKE '%$search%'"));
                $row=mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM 'yemek' WHERE title LIKE '%$search%' OR description LIKE '%$search%'")); 
                if($sayi>0)
                for($sayi=0;$sayi<=10;$sayi++)
                {
                    while($row)
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
                                        echo "<div class='error'>Image not Available.</div>";
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

                                <a href="#" class="btn btn-primary">Sipariş ver</a>
                            </div>
                        </div>

                        <?php
                        break;
                    }
                }
                else
                {
                    echo "<div class='error'>Food not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>

    <?php include('partials-front/footer.php'); ?>