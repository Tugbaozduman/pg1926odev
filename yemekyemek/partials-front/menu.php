<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemekyemek Website</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Anasayfa</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>categories.php">Kategoriler</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>foods.php">Yemekler</a>
                    </li>
                    <li>
                        <a href="#">İletisim</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>