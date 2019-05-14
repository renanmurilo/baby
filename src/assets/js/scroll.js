const target = document.querySelectorAll('[data-anime]');
const animationClass = 'anime';

function animeScroll(){
    const windowTop = window.pageYOffset + ((window.innerHeigth * 3) / 4);
    target.forEach(function(element){
        if((windowTop) > element.offsetTop){
            element.classList.add(animationClass);
        }else{
            element.classList.remove(animationClass);
        }
    })
}

if(target.length) {

    window.addEventListener('scroll', function(){
        animeScroll();
        console.log();
    })
}


let below = false
window.onscroll = () => {
    
    const windowTop = window.pageYOffset + ((window.innerHeigth * 3) / 4);

    if((windowTop) > element.offsetTop){
        

        bellow = true;
        $('#Up').addClass('animeted fadeInUp');
        console.log()
    }
}