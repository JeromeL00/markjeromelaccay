// Toggle Menu --------------------------------------------------//
        const toggle__menu = document.querySelector('.toggle__menu');
        const mobileNav = document.querySelector('.mobileNav');


        toggle__menu.addEventListener('click', ()=>{
            mobileNav.classList.toggle('active');
        })


// Active Menu -------------------------------------------------//
      const li=document.querySelectorAll(".links");
      const sec=document.querySelectorAll("section");
    
      function activeMenu(){
          let len=sec.length;
          while(--len && window.scrollY + 58 < sec [len].offsetTop + 58){}
          li.forEach(ltx => ltx.classList.remove("active"));
          li[len].classList.add("active");
      }
      activeMenu();
      window.addEventListener("scroll", activeMenu);

// Title Greetings --------------------------------------------//
  
    const typed = new Typed('.multiple-text', {
      strings: ['Web Developer', 'UI/UX Designer'],
      typeSpeed: 100,
      backSpeed: 0,
      fadeOut: true,
      backDelay: 1000,
      loop: true

    });
//  Scroll Reveal ---------------------------------------------//


  ScrollReveal({ 
    reset: false,
    distance: '80px',
    duration: 2000,
    delay: 0,
    });
    ScrollReveal().reveal('.banner__wrapper img, h1, .botton, .icons, .greetings, .title',{ origin: 'bottom' });
    ScrollReveal().reveal('.portfolio__title',{origin: 'bottom'});
    ScrollReveal().reveal('.skills__title, .contact__title, portfolio__title, .about__title',{origin: 'bottom'});
