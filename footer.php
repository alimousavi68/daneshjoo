<?php
//footer
?>
<!-- footer -->
<footer id="footer" class="footer-dark">


  <div class="container">
    <?php if (is_active_sidebar('fr-sidebar') || is_active_sidebar('fc-sidebar') || is_active_sidebar('fl-sidebar')): ?>
      <div class="row py-3">
        <div
          class="fr-sidebar align-items-center  col-md-24 col-sm-24 col-xl-5 d-flex flex-column justify-content-center align-content-center ">
          <?php
          dynamic_sidebar('fr-sidebar');
          ?>
        </div>

        <div class="col-24 col-lg-14 col-md-14 col-md-24 col-sm-24 col-xl-14 d-flex flex-row  gap-3">
          <div class="fc-sidebar row w-100 align-content-center row-gap-3">
            <?php
            dynamic_sidebar('fc-sidebar');
            ?>
          </div>
        </div>

        <div
          class="fl-sidebar col-lg-5 col-md-24 col-md-5 col-sm-24 col-xl-5 d-flex justify-content-center justify-content-lg-end align-content-center order-md-2">
          <?php
          dynamic_sidebar('fl-sidebar');
          ?>
        </div>

      </div>
    <?php endif; ?>

  </div>
  <!-- footer menu -->
  <div class="bottom-menu pt-2 pb-5">

    <div class="container p-3 ">
      <div class="row d-flex text-center text-lg-end text-md-end text-sm-center row-gap-3 flex-wrap-reverse">
        <span class="col-24 col-lg-20 col-md-20 col-sm-24 f13">تمامی حقوق مادی و معنوی این وبسایت متعلق به پایگاه خبری
          تحلیلی اندیشه قرن می باشد و هرگونه کپی برداری با ذکر منبع بلامانع است.</span>
        <div class="col-24 col-lg-4 col-sm-24 col-md-4">
          <div
            class="d-xl-flex d-lg-flex d-md-flex justify-content-center gap-2 social-links justify-content-center align-items-center">
            <span class="f13">طراحی و تولید: <a href="https://ihasht.ir/" class="text-white " title="هشت بهشت"
                alt="Website designer: Hasht Behesht professional website design site" target="_blank">هشت بهشت</a>
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End - footer menu -->

</footer>
<?php wp_footer(); ?>
<!-- footer -->


<script type="text/javascript" defer>
  // darkmode
  const darkModeSwitch = document.querySelector(".dark-mode-switch");

  // بررسی وضعیت دارک مود از LocalStorage
  const isDarkMode = localStorage.getItem("darkMode") === "true";

  // تنظیم وضعیت اولیه بر اساس وضعیت ذخیره شده
  document.body.classList.toggle("dark-mode", isDarkMode);
  darkModeSwitch.classList.toggle("active", isDarkMode);

  darkModeSwitch.addEventListener("click", () => {
    const isActive = darkModeSwitch.classList.toggle("active");
    document.body.classList.toggle("dark-mode", isActive);

    // ذخیره وضعیت دارک مود در LocalStorage
    localStorage.setItem("darkMode", isActive);
  });

</script>

<?php if (is_singular()): ?>
  <!-- shared button -->
  <script type="text/javascript" defer>
    document.addEventListener('DOMContentLoaded', function () {
      // cache dom
      var shareBtn = document.querySelector('.share-btn-mini');
      var shareBtn = document.querySelector('.share-btn');
      var shareUrl = document.querySelector('.share-url');
      var shareContainer = document.querySelector('.share-container');
      var notificationButton = document.querySelector('.notification-button');

      // set data
      var url = '<?php echo bloginfo('url'); ?>/?p=<?php the_ID(); ?>';
      var shared = false;

      /**
       * Share link function
       */
      function shareLink(e) {
        e.preventDefault(); // Prevent the default click behavior

        // set active class
        shareBtn.classList.toggle('active');
        shareUrl.classList.toggle('active');
        shareContainer.classList.toggle('active');

        if (shared === false) {

          // trigger notification alert
          notificationButton.classList.add('active');
          shared = true;
          shareBtn.textContent = 'بستن';
          shareUrl.textContent = url;

          // Create a temporary textarea element to copy the URL to clipboard
          var tempTextArea = document.createElement('textarea');
          tempTextArea.value = url;
          document.body.appendChild(tempTextArea);
          tempTextArea.select();

          try {
            // Execute the copy command
            var successful = document.execCommand('copy');
            var msg = successful ? 'موفق' : 'ناموفق';

          } catch (err) {
          } finally {
            // Remove the temporary textarea
            document.body.removeChild(tempTextArea);
          }

        } else {
          shared = false;
          shareBtn.textContent = 'کپی لینک';
        }
      }

      /**
       * Removes the active class after a set period of time
       */
      function fadeOutNotification() {
        notificationButton.classList.remove('active');
      }

      // bind events
      shareBtn.addEventListener('click', shareLink);
      notificationButton.addEventListener('transitionend', fadeOutNotification);
    });


    // print button
    document.getElementById('printButton').addEventListener('click', function () {
      window.print();
    });
  </script>



<?php endif; ?>




<script type="text/javascript" defer>
  document.addEventListener('DOMContentLoaded', function () {
    "use strict";

    // Scroll back to top
    var progressPath = document.querySelector('.progress-wrap path');
    if (progressPath) {
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

      var updateProgress = function () {
        var scroll = window.scrollY || document.documentElement.scrollTop;
        var height = (document.documentElement.scrollHeight || document.body.scrollHeight) - window.innerHeight;
        var progress = pathLength - (scroll * pathLength) / height;
        progressPath.style.strokeDashoffset = progress;
      };

      updateProgress();
      window.addEventListener('scroll', updateProgress);

      var offset = 50;
      var duration = 550;
      window.addEventListener('scroll', function () {
        var progressWrap = document.querySelector('.progress-wrap');
        if (window.scrollY > offset) {
          progressWrap.classList.add('active-progress');
        } else {
          progressWrap.classList.remove('active-progress');
        }
      });

      document.querySelector('.progress-wrap').addEventListener('click', function (event) {
        event.preventDefault();
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      });
    }
  });

</script>


<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>

<script>
  window.onscroll = function () { stickyHeader() };

  var header = document.getElementById("main-header");
  var sticky = header.offsetTop;

  function stickyHeader() {
    if (window.pageYOffset > sticky) {
      header.classList.add("menu-sticky");
    } else {
      header.classList.remove("menu-sticky");
    }
  }
</script>

</body>

</html>