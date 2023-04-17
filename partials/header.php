<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <?php 
        //Dynamic title
        if($_SERVER['PHP_SELF']==='/kengur_resort/index.php') {
            echo '<title>Kengur Resort</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/bazen.php') {
            echo '<title>Bazen</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/contact.php') {
            echo '<title>Kontakt</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/decijaIgraonica.php') {
            echo '<title>Dečija igraonica</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/restoran.php') {
            echo '<title>Restoran</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/salaZaProslave.php') {
            echo '<title>Sala za proslave</title>';
        }; 
        if($_SERVER['PHP_SELF']==='/kengur_resort/sobeIApartmani.php') {
            echo '<title>Sobe i apartmani</title>';
        }; 
    ?>
</head>
<body>
    
    <header id="header">
        <nav>
            <div id="nav1">
                <a href="index.php"><img src="img/logo.png" alt="Kengur resort" id="logo"></a>
                <i class="fa-solid fa-bars" id="btnBars"></i>
            </div>
            <a class="meniHeader" href="sobeIApartmani.php">Sobe i apartmani</a>
            <a class="meniHeader" href="salaZaProslave.php">Sala za proslave</a>
            <a class="meniHeader" href="bazen.php">Bazen</a>
            <a class="meniHeader" href="restoran.php">Restoran</a>
            <a class="meniHeader" href="decijaIgraonica.php">Dečija igraonica</a>
        </nav>

        <?php
            if($_SERVER['PHP_SELF']==='/kengur_resort/index.php') {
                echo '<div class="aboutUs" id="aboutUs">';
                    echo '<h1>Kengur resort</h1>';
                    echo '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis facilis, fugiat tenetur fugit dolores eum. Nulla exercitationem amet vitae doloribus in doloremque delectus voluptatibus molestiae reiciendis. Saepe fugit nihil magnam debitis quod, repellat ullam? Totam magnam sapiente dolore vel ex.</p>';
                echo '</div> ';
            }; 
        ?>

        <div class="carousel" id="carousel">
        
        </div>
    </header>
