<footer>
        <div class="logo">
            <a href="index.php"><img src="img/logo.png" alt="Kengur resort" id="logo"></a>
            <h2>Kengur Resort</h2>
        </div>

        <?php if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng"): ?>

        <div class="meni">
            <a href="sobeIApartmani.php">Rooms/Suites</a>
            <a href="salaZaProslave.php">Venues for celebration</a>
            <a href="bazen.php">Swiming pools</a>
            <a href="restoran.php">Restaurant</a>
            <a href="decijaIgraonica.php">Child playground</a>      
        </div>
        <hr>
        <div class="meni2">
            <a href="contact.php"><i class="fa-solid fa-messages"></i></i>Contact</a>
            <div class="socialNetworks">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-sharp fa-solid fa-b"></i></a>
            </div>
        </div>

        <?php else: ?>

            <div class="meni">
            <a href="sobeIApartmani.php">Sobe i apartmani</a>
            <a href="salaZaProslave.php">Sala za proslave</a>
            <a href="bazen.php">Bazen</a>
            <a href="restoran.php">Restoran</a>
            <a href="decijaIgraonica.php">Dečija igraonica</a>      
        </div>
        <hr>
        <div class="meni2">
            <a href="contact.php"><i class="fa-solid fa-messages"></i></i>Kontakt</a>
            <div class="socialNetworks">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-sharp fa-solid fa-b"></i></a>
            </div>
        </div>

        <?php endif; ?>

    </footer>

    <script src="main.js"></script>
</body>
</html>