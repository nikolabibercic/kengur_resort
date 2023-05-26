<?php if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng"): ?>

    <section class="pageSection">
        <article>
            <h2>Restaurant</h2>
            <p>In the pleasant atmosphere of the restaurant "Kengur" We offer you dishes of national cuisine and a selected list of domestic and foreign wines as well as other alcoholic beverages. The very interior of the complex represents a combination of traditional and modern tastes in which palettes of warm colors prevail. Our
            restaurant is worth a visit for its excellent menu, fresh ingredients and professionally trained staff
            for preparing different dishes. The pleasant environment, caring employees and quality food
            offer you the opportunity for enjoyment near the stunning views of our pools. Whether you're looking for a cozy atmosphere for lunch,or a natural environment for hanging out with family and friends, a high level of service and good atmosphere is guaranteed. Experience a variety of cuisine in unobtrusive luxury.</p>
            <div class="services">      
                <i class="fa-solid fa-champagne-glasses"></i>
                <i class="fa-solid fa-utensils"></i>
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-square-parking"></i>
            </div>
        </article>
        <div class="gallery">
            <h3>Photo gallery</h3>
            <div class="images">
                <img class="imgItem" src="img/restoran1.jpg" alt="Restoran">
                <img class="imgItem" src="img/restoran2.jpg" alt="Restoran">
            </div>
        </div>
        
    </section>

<?php else: ?>

    <section class="pageSection">
        <article>
            <h2>Restoran</h2>
            <p>U prijatnom ambijentu restorana "Kengur" nudimo vam jela nacionalne kuhinje i bogato odabranu kartu domaćih i stranih vina kao i ostalih alkoholnih pića. Sam enterijer kompleksa predstavlja spoj tradicionalnog i modernog u kome preovlađuju palete toplih boja. Naš restoran vredi posetiti zbog vrhunskog menija, svežih namirnica i profesionalno obučenih kuvara za pripremu različitih jela. Prijatno okruženje, uslužni zaposleni i kvalitetna hrana nude vam mogućnost za uživanje, uz vodeni svet. Bilo da tražite prijatnu atmosferu za ručak, prirodno okruženje za druženje sa porodicom i prijateljima ili posle bazena, obezbedićemo visok nivo usluge i dobar ugođaj. Doživite raznovrsnu kuhinju u nenametljivom luksuzu svedenih linija.</p>
            <div class="services">      
                <i class="fa-solid fa-champagne-glasses"></i>
                <i class="fa-solid fa-utensils"></i>
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-square-parking"></i>
            </div>
        </article>
        <div class="gallery">
            <h3>Galerija slika</h3>
            <div class="images">
                <img class="imgItem" src="img/restoran1.jpg" alt="Restoran">
                <img class="imgItem" src="img/restoran2.jpg" alt="Restoran">
            </div>
        </div>

    </section>

<?php endif; ?>