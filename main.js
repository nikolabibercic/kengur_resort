var header = document.getElementById('header');
var btnBars = document.getElementById('btnBars');
var carousel = document.getElementById('carousel');
var btnJelovnik = document.getElementById('btnJelovnik');
var btnKartaPica = document.getElementById('btnKartaPica');
var btnBazen = document.getElementById('btnBazen');
var btnBungalovi = document.getElementById('btnBungalovi');

var headerImgs = [];

//Kupim naziv strane
var page = window.location.href;
var pageArray = page.split('/');
var pageName = pageArray[pageArray.length-1];

//U zavisnosti od strane punim u niz headerImgs razlicite slike
if(pageName === 'index.php'){
    headerImgs = ['img/header1.jpg','img/header2.jpg','img/header3.jpg','img/header4.jpg','img/header5.jpg','img/header6.jpg'];
}else if(pageName === 'contact.php'){
    headerImgs = ['img/header1.jpg','img/header2.jpg','img/header3.jpg','img/header4.jpg','img/header5.jpg','img/header6.jpg'];
}else if(pageName === 'bazen.php'){
    headerImgs = ['img/bazen2.jpg','img/bazen3.jpg','img/bazen4.jpg','img/bazen5.jpg','img/bazen6.jpg','img/bazen7.jpg'];
}else if(pageName === 'decijaIgraonica.php'){
    headerImgs = ['img/decijaIgraonica1.jpg','img/decijaIgraonica2.jpg','img/decijaIgraonica3.jpg','img/decijaIgraonica4.jpg'];
}else if(pageName === 'restoran.php'){
    headerImgs = ['img/restoran1.jpg','img/restoran2.jpg'];
}else if(pageName === 'salaZaProslave.php'){
    headerImgs = ['img/salaZaProslave1.jpg'];
}else if(pageName === 'sobeIApartmani.php'){
    headerImgs = ['img/soba2.jpg','img/soba3.jpg','img/soba4.jpg','img/soba5.jpg','img/soba7.jpg'];
}else {
    headerImgs = ['img/header1.jpg','img/header2.jpg','img/header3.jpg','img/header4.jpg','img/header5.jpg','img/header6.jpg'];
}

//Kreiranje button elemenata za carousel
for(i=0;i<=headerImgs.length-1;i++){
    carousel.innerHTML += '<button class="btn" id="btn' + (i+1) + '"></button>';
};


var btns = document.querySelectorAll('.btn');

//Dodavanje eventa na svaki button
btns.forEach(btnEvent);

function btnEvent(btn,index){
    btn.addEventListener('click',() => {
        header.style.backgroundImage = "url(' " + headerImgs[index] + " ')";
        clearInterval(carouselInterval);
        for(i=0;i<btns.length;i++){
            btns[i].style.backgroundColor = 'transparent';
        }
        btn.style.backgroundColor = '#0075db';
    });
}

//Header background image carousel interval every 3 seconds
var counter = 0;

header.style.backgroundImage = "url(' " + headerImgs[counter] + " ')";
btns[counter].style.backgroundColor = '#0075db';

counter++;

var carouselInterval = setInterval(function(){

    if(counter>headerImgs.length-1){
        counter = 0;
    }

    header.style.backgroundImage = "url(' " + headerImgs[counter] + " ')";

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btns[counter].style.backgroundColor = '#0075db';

    counter++;

},3000);

//Klikom na bars dugme radim hide ili display meni linkova ka stranicama sajta
btnBars.addEventListener('click',() => {

    var meniHeader = document.querySelectorAll('.meniHeader');
    var nav1 = document.getElementById('nav1');
    var aboutUs = document.getElementById('aboutUs');

    for(i=0;i<meniHeader.length;i++){
        if(meniHeader[i].style.display === 'flex'){
            meniHeader[i].style.display = 'none';
            nav1.style.marginBottom = '0px';
            if(aboutUs != null){
                aboutUs.style.display = 'block';
            }


        }else{
            meniHeader[i].style.display = 'flex';
            nav1.style.marginBottom = '20px'; 
            if(aboutUs != null){
                aboutUs.style.display = 'none';
            }
        }
    }

});



btnJelovnik.addEventListener('click',() => {

    var jelovnik = document.getElementById('jelovnik');

    if(jelovnik.style.display === 'flex'){
        jelovnik.style.display = 'none';
        btnJelovnik.innerText = '+ Jelovnik';
    }else{
        jelovnik.style.display = 'flex';    
        btnJelovnik.innerText = '- Jelovnik'; 
    }

});

btnKartaPica.addEventListener('click',() => {

    var kartaPica = document.getElementById('kartaPica');

    if(kartaPica.style.display === 'flex'){
        kartaPica.style.display = 'none';
        btnKartaPica.innerText = '+ Karta pića';
    }else{
        kartaPica.style.display = 'flex';     
        btnKartaPica.innerText = '- Karta pića'; 
    }

});

btnBazen.addEventListener('click',() => {

    var bazen = document.getElementById('bazen');

    if(bazen.style.display === 'flex'){
        bazen.style.display = 'none';
        btnBazen.innerText = '+ Bazen';
    }else{
        bazen.style.display = 'flex';     
        btnBazen.innerText = '- Bazen'; 
    }

});


btnBungalovi.addEventListener('click',() => {

    var bungalovi = document.getElementById('bungalovi');

    if(bungalovi.style.display === 'flex'){
        bungalovi.style.display = 'none';
        btnBungalovi.innerText = '+ Bungalovi';
    }else{
        bungalovi.style.display = 'flex';     
        btnBungalovi.innerText = '- Bungalovi'; 
    }

});