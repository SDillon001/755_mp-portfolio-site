// Dropdown Nav - referenced this codepen: https://codepen.io/bsngr/pen/frDqh?editors=1010
$(function() {
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
});

// Link Portfolio in main nav
$(function() {
  $('.dropdown-toggle').click(function(){
    window.location = 'portfolio.php';
  });
});

// Project Modal
$(function() {
 $('.image-group').on('click', function(event) {
    //Gets the Item that was clicked
    var $this = $(event.currentTarget);
   $('#myModal').modal('show');
    //Use the data slide number of the clicked image to open the corresponding slide in the modal, e.g. image 1 = modal 1
    $('#MyCarousel').carousel($this.data('slide')); 
 });
});


// Link Portfolio in main nav
$(function() {
  $('.image-group.stars-link').click(function(){
    window.location = 'http://stevedillon.net/surf_stars/index.html';
  });
});

