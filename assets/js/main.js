jQuery(document).ready(function($) {

   $('#customers-testimonials').owlCarousel({
       loop: true,
       center: true,
       autoplay: true,
       nav:true,
       navText: '',
       autoplayTimeout: 5000,
       responsive: {
         0: { items: 1 },
         768: { items: 2 },
         1170: { items: 3 }
       }
   });
});
