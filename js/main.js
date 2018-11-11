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