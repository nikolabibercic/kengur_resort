var header = document.getElementById('header');
var btns = document.querySelectorAll('.btn');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');
var btn5 = document.getElementById('btn5');
var btn6 = document.getElementById('btn6');

var headerImgs = ['img/header1.jpg','img/header2.jpg','img/header3.jpg','img/header4.jpg','img/header5.jpg','img/header6.jpg'];

//Change header background image on click
btn1.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[0] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn1.style.backgroundColor = '#0075db';
});
btn2.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[1] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn2.style.backgroundColor = '#0075db';
});
btn3.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[2] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn3.style.backgroundColor = '#0075db';
});
btn4.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[3] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn4.style.backgroundColor = '#0075db';
});
btn5.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[4] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn5.style.backgroundColor = '#0075db';
});
btn6.addEventListener('click',() => {
    header.style.backgroundImage = "url(' " + headerImgs[5] + " ')";
    clearInterval(carouselInterval);

    for(i=0;i<btns.length;i++){
        btns[i].style.backgroundColor = 'transparent';
    }

    btn6.style.backgroundColor = '#0075db';
});


//Header background image carousel interval every 3 seconds
var counter = 0;

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