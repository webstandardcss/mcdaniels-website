<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>
<script>
  var navbar = $(".navbar");
      navbarScrolled = "navbar-scrolled";
      mcHeader = $('.mc-header').height();

  $(window).scroll(function() {
    if( $(this).scrollTop() > mcHeader ) {
      navbar.addClass(navbarScrolled);
    } else {
      navbar.removeClass(navbarScrolled);
    }
  });
</script>
<script src="http://localhost:35729/livereload.js"></script>
