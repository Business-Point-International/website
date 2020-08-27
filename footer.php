
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <img src="img/footer-logo.png" class="mb-4" alt="" title="">
                    <ul class="links">
                        <li>
                            <a href="#">What does BPI do?</a>
                        </li>
                        <li>
                            <a href="#">Why choose BPI?</a>
                        </li>
                        <li>
                            <a href="#">Product categories</a>
                        </li>
                        <li>
                            <a href="#">Team</a>
                        </li>
                    </ul>
                </div>
                <div class="links col-sm-6 col-md-6 col-lg-4">
                    <div class="title mb-4">
                        Company
                    </div>
                    <address class="mb-4">
                        <span class="d-block mb-3">Business Point International</span>
                        1/13 East Punjabi Bagh,<br>
                        New Delhi 110026, India.
                    </address>
                    <a href="#" class="directionLink">
                        <img src="img/directionArrow.png" alt="" title="">
                        <em>Directions</em>
                    </a>
                </div>
                <div class="lastCol col-sm-12 col-md-6 col-lg-4">
                    <!-- <a href="#" class="btn btn-o d-flex    ">
                    <img src="img/shake-hand-icon.png" width="43" alt="" title="">
                    <span>Become an Exclusive Importer</span>
                    </a> -->
                    <div class="btns">
                        <a href="#" class="btn btn-o d-flex">
                        <!-- <img src="img/shake-hand-icon.png" width="40"> -->
                            Become an Exclusive Importer
                        </a>
                        <!-- <a href="#" class="btn btn-o d-flex"> -->
                        <!-- <i class="icon-calendar"></i> -->
                        <!-- Book a meeting -->
                        </a>
                        <a href="https://wa.me/919355223191" class="btn btn-o d-flex" target="_blank">
                            <i class="icon-whatsapp"></i>
                            +919355223191
                        </a>
                        <a href="mailto:bpisadho@gmail.com" target="_blank" rel="noopener noreferrer" class="btn btn-o d-flex"> <i class="icon-mail"></i>
                            bpisadho@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyFooter">
            <div class="container" style="text-align: center;">
                <div class="footlinkL"><a href="#">Terms of Use</a> &nbsp; | &nbsp;  <a href="#">Privacy Policy</a></div>
                <div class="footcopy">All rights reserved. Copyright 2020 @ Business Point International</div>
            </div>
        </div>
    </footer>
    <!-- Product Popup -->
    <!-- <?html include 'includes/popupform.html';?> -->
    <div class="productPopup" id="productPopup">
        <div class="container">
            <a href="javascript:void(0)" class="btn btn-o backBtn" id="backLink" onclick="return false;">
                <i class="icon-backArrow"></i>
                <span class="ml-3">Back</span>
            </a>
            <br>
            <div style="margin-left: auto; margin-right: auto;" class="popformcont">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfh-tbkd92XSbilCQZOvV-XxGzKPGYt3RB9AjauusOQHQB9Cw/viewform?embedded=true" class="formiframe" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript">
              $(document).ready(function () {
                  // Hide Header on on scroll down
                  var didScroll;
                  var lastScrollTop = 0;
                  var delta = 5;
                  var navbarHeight = $('header').outerHeight();

                  $(window).scroll(function (event) {
                      didScroll = true;
                  });

                  setInterval(function () {
                      if (didScroll) {
                          hasScrolled();
                          didScroll = false;
                      }
                  }, 250);

                  function hasScrolled() {
                      var st = $(this).scrollTop();

                      // Make sure they scroll more than delta
                      if (Math.abs(lastScrollTop - st) <= delta)
                          return;

                      // If they scrolled down and are past the navbar, add class .nav-up.
                      // This is necessary so you never see what is "behind" the navbar.
                      if (st > lastScrollTop && st > navbarHeight) {
                          // Scroll Down
                          $('header').removeClass('nav-down').addClass('nav-up');
                      } else {
                          // Scroll Up
                          if (st + $(window).height() < $(document).height()) {
                              $('header').removeClass('nav-up').addClass('nav-down');
                          }
                      }

                      lastScrollTop = st;
                  }
                  $(".popupLink").click(function () {
                      $("#productPopup").addClass('open');
                      $("body").addClass('overflow-h');
                      return false;
                  });
                  $("#backLink, #mobBackLink").click(function () {
                      $("#productPopup").removeClass('open');
                      $("body").removeClass('overflow-h');
                      return false;
                  });
                  $("#stepOneBtn").click(function () {
                      $(".form .step2").removeClass('d-none');
                      $(".form .step1").addClass('d-none');
                      return false;
                  });
                  $("#stepOneBtn").click(function () {
                      $('html,body').animate({
                          scrollTop: $(".formBox").offset().top - 30
                      }, 'slow');
                  });
                  $(".hamburger-box").click(function () {
                      $(".mobMenuDrawer").toggleClass('show');
                      //$("body").toggleClass('overflow-h');
                  });

                  $("#mobMenuOverlay, .mobMenuClseBtn").click(function () {
                      $(".hamburger-box").toggleClass('is-active');
                      $(".mobMenuDrawer").toggleClass('show');
                      //$("body").toggleClass('overflow-h');
                  });

                  $('.bannerSlider').slick({
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      dots: true,
                      arrows: false,
                      autoplay: true,
                      autoplaySpeed: 2500,
                  });
                  $('.testimonialsSlider').slick({
                      slidesToShow: 1,
                      arrows: false,
                      infinite: true,
                      dots: true,
                      variableWidth: true,
                      responsive: [
                          {
                              breakpoint: 480,
                              settings: {
                                  variableWidth: false,
                              }
                          }
                      ]
                  });
                  $('.factorySlider').slick({
                      slidesToShow: 1,
                      arrows: false,
                      infinite: true,
                      dots: true,
                      variableWidth: true,
                      autoplay: true,
                      responsive: [
                          {
                              breakpoint: 480,
                              settings: {
                                  variableWidth: false,
                              }
                          }
                      ]
                  });
              });
    </script>
    <script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('header .menu a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                        menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('header .menu a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('header .menu a').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }
    </script>
    <script>
        $(document).ready(function () {
            $(document).on("scroll", onScroll);
            //smoothscrollMobile
            $('header .links a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');

                var target = this.hash,
                        links = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top + 2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        //Mobile end
        function onScroll(event) {
            var scrollPos = $(document).scrollTop();
            $('header .links a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('header .links a').removeClass("active");
                    currLink.addClass("active");
                } else {
                    currLink.removeClass("active");
                }
            });
        }
    </script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v7.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution=install_email
         page_id="114368743626925">
    </div>
</body>
</html>