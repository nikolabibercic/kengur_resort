<?php if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng"): ?>

    <section class="pageSection">
        <article>
            <h2>Venues for celebration</h2>
            <p>The capacity of our festivity halls is up to 250 seats and is suitable for numerous types of private and
            corporate celebrations. The ideal combination of various details in the interior follows the modern trends in organizing events. The halls are intended for various gatherings, and our employees will help you adapt the space to your particular desires. Whether you are organizing a birthday party, baptism, wedding, or a company gathering, you will have plenty of space for dining, socializing and
            comfort. They are equipped with an air conditioning and ventilation system, advanced surround sound audio systems, as well as free parking for all of the guests. It is our mission to make your most important moments perfect and unforgettable.</p>
            <div class="services">
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-martini-glass"></i>
                <i class="fa-solid fa-square-parking"></i>
                <i class="fa-solid fa-music"></i>
            </div>
        </article>
        <div class="gallery">
            <h3>Photo gallery</h3>
            <div class="images">
                <img src="img/salaZaProslave1.jpg" alt="Sala za proslave">
            </div>
        </div>
    </section>

<?php else: ?>

    <section class="pageSection">
        <article>
            <h2>Sala za proslave</h2>
            <p>Kapacitet naših sala za zabave je do 250 sedećih mesta i pogodan je za razne vrste privatnih i korporativnih proslava. Idealna kombinacija različitih detalja u enterijeru prati savremene trendove u organizovanju događaja. Sala je predviđena za različita okupljanja, a naši zaposleni pomoći će vam da prostor prilagodite vašoj svetkovini. Bilo da organizujete rođendan, krštenje ili svadbu kod nas ćete imati dovoljno prostora i za ručavanje, igranje i komoditet. Sala za proslavu je pokrivena klimatizacionim i ventilacionim sistemom, a obezbeđen je i besplatan parking. Učinićemo sve da vaše najznačajnije trenutke pamtite i istinski uživate u našem prostoru.</p>
            <div class="services">
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-martini-glass"></i>
                <i class="fa-solid fa-square-parking"></i>
                <i class="fa-solid fa-music"></i>
            </div>
        </article>
        <div class="gallery">
            <h3>Galerija slika</h3>
            <div class="images">
                <img src="img/salaZaProslave1.jpg" alt="Sala za proslave">
            </div>
        </div>
    </section>   

<?php endif; ?>