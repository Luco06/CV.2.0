const items = document.querySelectorAll('.slide');
const nbSlide = items.length;
let counter = 0;

function slideNext(){
    items[counter].classList.remove('active');

    if(counter < nbSlide - 1){
        counter++;
    }else{
        counter = 0;
    }
    items[counter].classList.add('active');
}
setInterval(slideNext,2000);