
   //text typing animation
   const text= "Explore The Beautiful World";
    const text2= "As Easy One Click";
    let index = 0;
    let index2 = 0;
    let letter ="";
    let letter2 ="";
    let angka = 0;
    (function type(){
        letter = text.slice(0,++index);
        document.querySelector(".typing").textContent = letter;
            setTimeout(type,150);
            if(letter.length === 27){
                (function type2(){
                    letter2 = text2.slice(0,++index2);
                    document.querySelector(".typing2").textContent = letter2;
                        setTimeout(type2,1200);
                })();
            }     
    })();

    //swiper
    let swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 0,
        slidesPerGroup: 1,
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: true,
        },
        loopFillGroupWithBlank: false,
        navigation: {
          nextEl: '.swiper-button-next ',
          prevEl: '.swiper-button-prev',
        },
      });

//animation on scroll
      AOS.init({
        offset:500,
        duration:1200,
        once: true,
      });
