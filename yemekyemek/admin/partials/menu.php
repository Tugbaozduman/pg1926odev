<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Yemekyemek website - Ana sayfa</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Ana sayfa</a></li>
                    <li><a href="manage-admin.php">Yönetici</a></li>
                    <li><a href="manage-category.php">Kategori</a></li>
                    <li><a href="manage-food.php">Yemek</a></li>
                    <li><a href="manage-order.php">Siparisler</a></li>
                    <li><a href="logout.php">Cikis yap</a></li>
                </ul>
            </div>
        </div>
        