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

$(document).ready(function() {
  // Get modal elements
  const kontaktBtn = $('#kontaktBtn');
  const contactModal = $('#contactModal');
  const closeModal = $('#closeModal');

  // Show modal with animation when button is clicked
  kontaktBtn.on('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      contactModal.css('display', 'flex'); // Ensure the modal acts as a flex container
      setTimeout(function() {
          contactModal.addClass('show');
      }, 10); // Add slight delay to trigger CSS transition
  });

  // Hide modal when the "close" x is clicked
  closeModal.on('click', function() {
      contactModal.removeClass('show');
      setTimeout(function() {
          contactModal.css('display', 'none');
      }, 500); // Wait for the transition to complete before hiding
  });

  // Hide modal when anywhere outside the form is clicked
  $(window).on('click', function(event) {
      if ($(event.target).is(contactModal)) {
          contactModal.removeClass('show');
          setTimeout(function() {
              contactModal.css('display', 'none');
          }, 500); // Wait for the transition to complete before hiding
      }
  });
});

