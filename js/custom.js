/*Magnific Popup*/
$(function() {
  $('div.gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
          enabled: true
      },
      removalDelay: 300,
      mainClass: 'mfp-fade'
  });
});

/*Animated Headline*/
$(function() {
  $('.selector').animatedHeadline({
      animationType: 'type'
  });
});

/*Swiper*/
var mySwiper = new Swiper('.swiper-container', {
  autoplay: {
      delay: 4000,
  },
});

/*Preloader*/
$(".preloader-wrap").delay(1500).fadeOut('slow');

/*Kontakt Button Modal*/
$(document).ready(function() {
  // Get modal elements
  const kontaktBtn = $('#kontaktBtn');
  const contactModal = $('#contactModal');
  const closeModal = $('#closeModal');

  // Show modal when button is clicked
  kontaktBtn.on('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      contactModal.css('display', 'block');
  });

  // Hide modal when the "close" x is clicked
  closeModal.on('click', function() {
      contactModal.css('display', 'none');
  });

  // Hide modal when anywhere outside the form is clicked
  $(window).on('click', function(event) {
      if ($(event.target).is(contactModal)) {
          contactModal.css('display', 'none');
      }
  });
});
