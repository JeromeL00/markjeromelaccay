<?php wp_footer(); ?>

<section class="footer bg-gray py-4">
        <div class="container">

          <div class="footer__wrapper px-[1.5rem] flex justify-between items-center">
            <div>
              <h2 class=" text-white text-3xl font-bold font-inder">J<span class="text-primary">E.</span></h2>
            <small class="text-white">
              <?php echo get_field('footer_info'); ?>
            </small>
            </div>
            
            <div class="footer__icons justify-center mt-5">
                <ul class=" flex gap-6 text-3xl text-primary md:inline-flex lg:text-4xl ">
                  <li class="hover:text-secondary transition-all"><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                  <li class="hover:text-secondary transition-all"><a href="#"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>  
          </div>
        </div>
      </section>

      <script>
        const toggle__menu = document.querySelector('.toggle__menu');
        const mobileNav = document.querySelector('.mobileNav');


        toggle__menu.addEventListener('click', ()=>{
            mobileNav.classList.toggle('active');
        })
      </script>

      <script>
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
      </script>
      

      <script src="https://unpkg.com/scrollreveal"></script>

      <script>
         ScrollReveal({ 
          reset: false,
          distance: '80px',
          duration: 2000,
          delay: 0,
         });
          ScrollReveal().reveal('.banner__wrapper img, h1, .botton, .icons, .greetings, .title',{ origin: 'bottom' });
          ScrollReveal().reveal('.portfolio__title',{origin: 'bottom'});
          ScrollReveal().reveal('.skills__title, .contact__title, portfolio__title, .about__title',{origin: 'bottom'});

      </script>
      
      <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

      <script>
        const typed = new Typed('.multiple-text', {
      strings: ['Web Developer', 'UI/UX Designer'],
      typeSpeed: 100,
      backSpeed: 0,
      fadeOut: true,
      backDelay: 1000,
      loop: true

    });
      </script>

      <script src="./js/script.js"></script>
</body>
</html>
