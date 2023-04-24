<?php if(isset($_SESSION["language"]) and $_SESSION["language"]=="eng"): ?>

    <section class="pageSection">
        <article>
            <h2>Child playground</h2>
            <p>For the youngest visitors, we designed a children's playroom with quality and attractive content, while meeting the highest safety standards. A day spent in our playground will provide children with
            an unforgettable experience, and parents an opportunity for moments of relaxation. It's a playroom
            designed so that happy and joyful colors contribute to a pleasant stay for children. The playroom is a great place for children to develop their physical, emotional, social and
            imaginative skills. The space is intended for all children in the mood for various activities and
            adventures in the magical world of the game. Enjoy the playful and lively atmosphere of a safe and clean
            Children’s playground.</p>
            <div class="services">      
                <i class="fa-sharp fa-solid fa-cake-candles"></i>
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-square-parking"></i>  
            </div>    
        </article>
        <div class="gallery">
            <h3>Photo gallery</h3>
            <div class="images">
                <img src="img/decijaIgraonica1.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica2.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica3.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica4.jpg" alt="Dečija igraonica">
            </div>
        </div>
        <article class="pricelist">
            <h3>Pricelist</h3>
            <div>
                <table>
                    <tr>
                        <th></th>
                        <th>Cena</th>
                    </tr>
                    <tr>
                        <td>Sat vremena</td>
                        <td>1000 rsd</td>
                    </tr>
                    <tr>
                        <td>Dva sata</td>
                        <td>2000 rsd</td>
                    </tr>
                    <tr>
                        <td>Tri sada</td>
                        <td>3000 rsd</td>
                    </tr>
                </table>
            </div>
        </article>
    </section>

<?php else: ?>

    <section class="pageSection">
        <article>
            <h2>Dečija igraonica</h2>
            <p>Za najmlađe posetioce osmislili smo dečiju igraonicu sa kvalitetnim i atraktivnim sadržajem, uz ispunjenje najviših bezbednosnih standarda. Dan proveden u našoj igraoici pružiće deci nezaboravan doživljaj, a roditeljima mogućnost za trenuttke opuštanja. Igraonica je dizajnirana tako da veselim i radosnim bojama doprinese prijatnom boravku dece. Dečije igraonica je odlično mesto za decu da razviju svoje fizičke, emocionalne, društvene i maštovite veštine. Prostor je predviđen za svu decu raspoloženu za različite aktivnosti i avanture u čarobnom svetu igre. Uživajte u razigranoj i živahnoj atsmosferi sigurnog i čistog objekta.</p>
            <div class="services">      
                <i class="fa-sharp fa-solid fa-cake-candles"></i>
                <i class="fa-solid fa-wifi"></i>
                <i class="fa-solid fa-square-parking"></i>  
            </div>    
        </article>
        <div class="gallery">
            <h3>Galerija slika</h3>
            <div class="images">
                <img src="img/decijaIgraonica1.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica2.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica3.jpg" alt="Dečija igraonica">
                <img src="img/decijaIgraonica4.jpg" alt="Dečija igraonica">
            </div>
        </div>
        <article class="pricelist">
            <h3>Cenovnik</h3>
            <div>
                <table>
                    <tr>
                        <th></th>
                        <th>Cena</th>
                    </tr>
                    <tr>
                        <td>Sat vremena</td>
                        <td>1000 rsd</td>
                    </tr>
                    <tr>
                        <td>Dva sata</td>
                        <td>2000 rsd</td>
                    </tr>
                    <tr>
                        <td>Tri sada</td>
                        <td>3000 rsd</td>
                    </tr>
                </table>
            </div>
        </article>
    </section>

<?php endif; ?>