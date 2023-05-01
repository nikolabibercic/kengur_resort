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
            <!--<a href="contact.php"><i class="fa-solid fa-messages"></i></i>Contact</a>-->
            <div class="socialNetworks">
                <a href="https://www.facebook.com/pages/Kengur-Resort/447738281926745" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/kengurresort/?hl=sr" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.booking.com/hotel/rs/kengur-resort.sr.html?label=metagha-link-LURS-hotel-703242_dev-desktop_los-1_bw-6_dow-Sunday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-_mcid-10_ppa-0_clrid-0_ad-0_gstkid-0_checkin-20230507_&sid=654e309d4749762248097a77520143ef&utm_source=metagha&utm_medium=localuniversal&utm_term=hotel-703242&utm_content=dev-desktop_los-1_bw-6_dow-Sunday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-_mcid-10_ppa-0_clrid-0_ad-0_gstkid-0_checkin-20230507_&utm_campaign=RS&aid=2127705&ucfs=1&arphpl=1&checkin=2023-05-07&checkout=2023-05-08&dest_id=-74897&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=cc938bc59fee05d2&srepoch=1682970764&all_sr_blocks=70324201_270928046_0_1_0&highlighted_blocks=70324201_270928046_0_1_0&matching_block_id=70324201_270928046_0_1_0&sr_pri_blocks=70324201_270928046_0_1_0__2500&from=searchresults#hotelTmpl" target="_blank"><i class="fa-sharp fa-solid fa-b"></i></a>
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
            <!--<a href="contact.php"><i class="fa-solid fa-messages"></i></i>Kontakt</a>-->
            <div class="socialNetworks">
                <a href="https://www.facebook.com/pages/Kengur-Resort/447738281926745" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/kengurresort/?hl=sr" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.booking.com/hotel/rs/kengur-resort.sr.html?label=metagha-link-LURS-hotel-703242_dev-desktop_los-1_bw-6_dow-Sunday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-_mcid-10_ppa-0_clrid-0_ad-0_gstkid-0_checkin-20230507_&sid=654e309d4749762248097a77520143ef&utm_source=metagha&utm_medium=localuniversal&utm_term=hotel-703242&utm_content=dev-desktop_los-1_bw-6_dow-Sunday_defdate-1_room-0_gstadt-2_rateid-public_aud-0_gacid-_mcid-10_ppa-0_clrid-0_ad-0_gstkid-0_checkin-20230507_&utm_campaign=RS&aid=2127705&ucfs=1&arphpl=1&checkin=2023-05-07&checkout=2023-05-08&dest_id=-74897&dest_type=city&group_adults=2&req_adults=2&no_rooms=1&group_children=0&req_children=0&hpos=1&hapos=1&sr_order=popularity&srpvid=cc938bc59fee05d2&srepoch=1682970764&all_sr_blocks=70324201_270928046_0_1_0&highlighted_blocks=70324201_270928046_0_1_0&matching_block_id=70324201_270928046_0_1_0&sr_pri_blocks=70324201_270928046_0_1_0__2500&from=searchresults#hotelTmpl" target="_blank"><i class="fa-sharp fa-solid fa-b"></i></a>
            </div>
        </div>

        <?php endif; ?>

    </footer>

    <script src="main.js"></script>
</body>
</html>