<?php
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) 
        return true;
    return false;
} ?>

<?php if (is_single('services') || is_post_type('services')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-161').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('results') || is_post_type('results')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-160').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('specials') || is_post_type('specials')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-159').addClass('active');
  });
</script>
<?php } ?>

<?php if (is_single('testimonials') || is_post_type('testimonials')){ ?>
<script>
  jQuery(document).ready(function(){
    $('li#menu-item-158').addClass('active');
  });
</script>
<?php } ?>

<script>
    window.onload = function() {
        var checkboxes = document.querySelectorAll('.wpcf7-list-item-label');
        checkboxes.forEach(function(checkboxLabel) {
            checkboxLabel.addEventListener('click', function() {
                var checkbox = this.previousElementSibling;
                checkbox.checked = !checkbox.checked;
            });
        });
    };
</script>

<script>
    $(document).ready(function() {
        $('.first-dropdown-item').each(function() {
            $(this).next('.dropdown-menu').appendTo($(this));
        });

        $('.first-dropdown-item').click(function(event) {
          event.preventDefault();
          if ($(this).find('.dropdown-menu').length === 0) {
            var url = $(this).attr('href');
            window.location.href = url;
          } else {
            $(this).attr('data-open', true);
            $('.first-dropdown-item').not(this).removeAttr('data-open');
          }
        });

        $('.second-dropdown-item').click(function(event) {
          event.preventDefault();
          var url = $(this).attr('href');
          window.location.href = url;
        });
      });
</script>

<footer class="mainGrid">
  <div class="breakout">
    <div class="fullCol footerContent">
      <span>Copyright © <?php echo date('Y');?> Grace Aesthetics. All rights reserved.</span>
      <ul class="iconGroup">
      <li>
            <span class="iconContainer">
              <a href="<?php the_field('facebook', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/facebook-logo-button.png');?>" alt=""/> -->
                <svg fill="#000000" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M169.5,357.6l-2.9,38.3h-39.3 v133H77.7v-133H51.2v-38.3h26.5v-25.7c0-11.3,0.3-28.8,8.5-39.7c8.7-11.5,20.6-19.3,41.1-19.3c33.4,0,47.4,4.8,47.4,4.8l-6.6,39.2 c0,0-11-3.2-21.3-3.2c-10.3,0-19.5,3.7-19.5,14v29.9H169.5z"></path> </g></svg>
              </a>
            </span>
          </li>
          <li>
            <span class="iconContainer">
              <a href="<?php the_field('instagram', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/instagram-logo.png');?>" alt=""/> -->
                <svg fill="#000000" width="64px" height="64px" viewBox="0 0 19.2 19.2" data-name="Instagram w/circle" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M13.498 6.651a1.656 1.656 0 0 0-.95-.949 2.766 2.766 0 0 0-.928-.172c-.527-.024-.685-.03-2.02-.03s-1.493.006-2.02.03a2.766 2.766 0 0 0-.929.172 1.656 1.656 0 0 0-.949.95 2.766 2.766 0 0 0-.172.928c-.024.527-.03.685-.03 2.02s.006 1.493.03 2.02a2.766 2.766 0 0 0 .172.929 1.656 1.656 0 0 0 .95.949 2.766 2.766 0 0 0 .928.172c.527.024.685.029 2.02.029s1.493-.005 2.02-.03a2.766 2.766 0 0 0 .929-.171 1.656 1.656 0 0 0 .949-.95 2.766 2.766 0 0 0 .172-.928c.024-.527.029-.685.029-2.02s-.005-1.493-.03-2.02a2.766 2.766 0 0 0-.171-.929zM9.6 12.168A2.568 2.568 0 1 1 12.168 9.6 2.568 2.568 0 0 1 9.6 12.168zm2.669-4.637a.6.6 0 1 1 .6-.6.6.6 0 0 1-.6.6zM11.267 9.6A1.667 1.667 0 1 1 9.6 7.933 1.667 1.667 0 0 1 11.267 9.6zM9.6 0a9.6 9.6 0 1 0 9.6 9.6A9.6 9.6 0 0 0 9.6 0zm4.97 11.661a3.67 3.67 0 0 1-.233 1.214 2.556 2.556 0 0 1-1.462 1.462 3.67 3.67 0 0 1-1.213.233c-.534.024-.704.03-2.062.03s-1.528-.006-2.062-.03a3.67 3.67 0 0 1-1.213-.233 2.556 2.556 0 0 1-1.462-1.462 3.67 3.67 0 0 1-.233-1.213c-.024-.534-.03-.704-.03-2.062s.006-1.528.03-2.062a3.67 3.67 0 0 1 .232-1.213 2.556 2.556 0 0 1 1.463-1.463 3.67 3.67 0 0 1 1.213-.232c.534-.024.704-.03 2.062-.03s1.528.006 2.062.03a3.67 3.67 0 0 1 1.213.232 2.556 2.556 0 0 1 1.462 1.463 3.67 3.67 0 0 1 .233 1.213c.024.534.03.704.03 2.062s-.006 1.528-.03 2.062z"></path></g></svg>
              </a>
            </span>
          </li>
          <li>
            <span class="iconContainer">
              <a href="<?php the_field('twitter', 'option');?>" target="_blank">
                <!-- <img src="<?php echo site_url('wp-content/uploads/2024/04/twitter-logo-button.png');?>" alt=""/> -->
              <svg style="width:40px" version="1.0" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 848 594" style="enable-background:new 0 0 848 594;" xml:space="preserve">
<path d="M424,41c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S565.4,41,424,41z M552.4,236.9v34.7
	c-16.3,0-32.2-3.2-47.2-9.5c-9.6-4.1-18.6-9.3-26.8-15.6l0.2,106.7c-0.1,24-9.6,46.6-26.8,63.6c-14,13.8-31.7,22.6-51,25.5
	c-4.5,0.7-9.1,1-13.8,1c-20.6,0-40.1-6.7-56.1-19c-3-2.3-5.9-4.8-8.6-7.5c-18.6-18.4-28.3-43.4-26.6-69.7c1.2-20,9.2-39.1,22.6-54
	c17.7-19.8,42.4-30.8,68.8-30.8c4.6,0,9.2,0.3,13.8,1v12.8v35.7c-4.3-1.4-8.9-2.2-13.6-2.2c-24.1,0-43.7,19.7-43.3,43.8
	c0.2,15.5,8.7,29,21.1,36.4c5.9,3.5,12.6,5.7,19.8,6.1c5.6,0.3,11-0.5,16-2.1c17.2-5.7,29.7-21.9,29.7-41l0.1-71.4V150.8h47.7
	c0,4.7,0.5,9.3,1.4,13.8c3.6,18.1,13.8,33.8,28,44.5c12.4,9.3,27.8,14.9,44.5,14.9c0,0,0.1,0,0.1,0L552.4,236.9L552.4,236.9z"/>
</svg>
               
              </a>
            </span>
          </li>
      </ul>
      <span>Made with <span style="color: #e02b40"> &#x2764; </span> by <a href="http://fifthdesigns.com/" target="_blank"> Fifth Designs</a></span>
    </div>
  </div>
</footer>

<script defer>
  function toggleViewClicked(targetId) {
    document.getElementById(targetId).toggleAttribute('data-moreClicked');
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/3.6.12/js/splide.min.js" defer></script>
<script defer>
  document.addEventListener('DOMContentLoaded', function () {
    const splide = new Splide('#splide', {
      type: 'swipe',
      rewind: true,
      arrows: false,
      pagination: false,
      autoplay: true,
      interval: 5000,
    }).mount();

    var currentPageElement = document.querySelector('.current-page');
    var totalPagesElement = document.querySelector('.total-pages');

    // Update custom pagination
    function updateCustomPagination() {
      var currentPage = splide.index + 1;
      var totalPages = splide.length;

      currentPageElement.textContent = currentPage;
      totalPagesElement.textContent = totalPages;
    }

    // Listen to slide change event and update custom pagination
    splide.on('moved', updateCustomPagination);

    // Initial update
    updateCustomPagination();

    // Custom arrows
    var prevArrow = document.querySelector('.custom-arrow-prev');
    var nextArrow = document.querySelector('.custom-arrow-next');

    prevArrow.addEventListener('click', function () {
      splide.go('-${1}');
    });

    nextArrow.addEventListener('click', function () {
      splide.go('+${1}');
    });
  });
</script>
<script
		src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
		integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script >
  AOS.init();
</script>