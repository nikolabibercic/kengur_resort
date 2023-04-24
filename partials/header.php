<?php
// Start the session
session_start();
?>

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
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='index.php') {
            echo '<title>Kengur Resort</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='bazen.php') {
            echo '<title>Bazen</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='contact.php') {
            echo '<title>Kontakt</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='decijaIgraonica.php') {
            echo '<title>Dečija igraonica</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='restoran.php') {
            echo '<title>Restoran</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='salaZaProslave.php') {
            echo '<title>Sala za proslave</title>';
        }; 
        if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='sobeIApartmani.php') {
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

            <?php if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng"): ?>
                <a class="meniHeader" href="sobeIApartmani.php">Rooms/Suites</a>
                <a class="meniHeader" href="salaZaProslave.php">Venues for celebration</a>
                <a class="meniHeader" href="bazen.php">Swiming pools</a>
                <a class="meniHeader" href="restoran.php">Restaurant</a>
                <a class="meniHeader" href="decijaIgraonica.php">Child playground</a>
            <?php else: ?>
                <a class="meniHeader" href="sobeIApartmani.php">Sobe i apartmani</a>
                <a class="meniHeader" href="salaZaProslave.php">Sala za proslave</a>
                <a class="meniHeader" href="bazen.php">Bazen</a>
                <a class="meniHeader" href="restoran.php">Restoran</a>
                <a class="meniHeader" href="decijaIgraonica.php">Dečija igraonica</a>
            <?php endif; ?>
            
        </nav>

        <div class="languages">
            <a href="controler/language.php?languageType=srb">SRB</a>
            <a href="controler/language.php?languageType=eng">ENG</a>
        </div>

        <?php
            if(substr($_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'], '/') + 1)==='index.php') {
                if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng") {
                    echo '<div class="aboutUs" id="aboutUs">';
                        echo '<h1>Kengur resort</h1>';
                        echo '<p>Combining stunning surroundings and friendly staff, Kengur Resort offers swimming pools, hotel accommodation, multiple venues for celebrations, a restaurant and a children\'s playroom for rest, relaxation and entertainment. Our complex is located in a quiet part of Zemun, only 7 km from the center of Belgrade, with excellent connections to the most important tourist attractions. We offer you various possibilities for relaxation and socializing, along with an unforgettable experience.</p>';
                    echo '</div> ';
                }else {
                    echo '<div class="aboutUs" id="aboutUs">';
                        echo '<h1>Kengur resort</h1>';
                        echo '<p>Kombinujući zadivljujuće okruženje i ljubazno osoblje „Kengur resort“ nudi bazene, smeštaj, sale za proslavu, restoran i dečiju igraonicu za odmor, opuštanje i predah. Naš kompleks se nalazi u mirnom delu Zemuna, samo 7km od centra Beograda, sa odličnom povezanošću ka najznačajnim turističkim aktrakcijama. Nudimo vam različite mogućnosti za relaksaciju i druženje, uz nezaboravan provod.</p>';
                    echo '</div> ';
                }
            }; 
        ?>

        <div class="carousel" id="carousel">
        
        </div>
    </header>
