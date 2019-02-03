<!-- JS Global Compulsory -->
<script src="{{URL::asset('vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{URL::asset('vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{URL::asset('vendor/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{URL::asset('vendor/bootstrap/bootstrap.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{URL::asset('vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
  <script src="{{URL::asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{URL::asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{URL::asset('vendor/custombox/dist/custombox.min.js')}}"></script>
  <script src="{{URL::asset('vendor/custombox/dist/custombox.legacy.min.js')}}"></script>
  <script src="{{URL::asset('vendor/slick-carousel/slick/slick.js')}}"></script>

  <!-- JS Space -->
  <script src="{{URL::asset('js/hs.core.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.header.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.unfold.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.validation.js')}}"></script>
  <script src="{{URL::asset('js/helpers/hs.focus-state.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.malihu-scrollbar.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.modal-window.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.show-animation.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.slick-carousel.js')}}"></script>
  <script src="{{URL::asset('js/components/hs.go-to.js')}}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>