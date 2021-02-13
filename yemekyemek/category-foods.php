    
    <?php include('partials-front/menu.php'); ?>

    <?php 
        if(isset($_GET['category_id']))
        {
            $category_id = $_GET['category_id'];
            $row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT title FROM tbl_category WHERE id=$category_id" ));
            $category_title = $row['title'];
        }
        else
        {
            header('location:'.SITEURL);
        }
    ?>


    <section class="food-search text-center">
        <div class="container">
            
            <h2>Yemekler <a href="#" class="text-white">"<?php echo $category_title; ?>"</a></h2>

        </div>
    </section>


    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Yemek menu</h2>

            <?php 
            
                $sql2 = "SELECT * FROM 'yemek' WHERE category_id=$category_id";

                $res2 = mysqli_query($conn, $sql2);

                $count2 = mysqli_num_rows($res2);

                if($count2>0)
                {
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
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

                                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Siparis ver</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>

    <?php include('partials-front/footer.php'); ?>