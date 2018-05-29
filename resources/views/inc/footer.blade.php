@section('footer')
<!-- Back to top -->
<div id="back-to-top"></div>
<!-- /Back to top -->

<!-- Preloader -->
<div id="preloader">
  <div class="preloader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
<!-- /Preloader -->

<!-- jQuery Plugins -->
<script src="tools/jquery/jquery-3.2.1.min.js"></script>
<script src="tools/bootstrap/js/popper.js"></script>
<script src="tools/select2/select2.min.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="tools/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);

    $(window).on('resize', function(){
      ps.update();
    })
  });


</script>

<!-- Footer -->
<footer id="footer" class="sm-padding bg-dark">

  <!-- Container -->
  <div class="container">

    <!-- Row -->
    <div class="row">

      <div class="col-md-12">

        <!-- footer logo -->
        <div class="footer-logo">
          <a href="index.html"><img src="img/CSC_Logo.png" alt="logo"></a>
        </div>
        <!-- /footer logo -->

        <!-- footer follow -->
        <ul class="footer-follow">
          <li><a target="_blank" href="https://www.facebook.com/ensat.csc/"><i class="fa fa-facebook"></i></a></li>
          <li><a  href="https://www.facebook.com/groups/272963643213192/"><i class="fa fa-group"></i></a></li>
          <li><a href="https://www.instagram.com/csc.ensat/"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <!-- /footer follow -->

        <!-- footer copyright -->
        <div class="footer-copyright">
          <p>Copyright © 2017. All Rights Reserved. Designed by GINF1</p>


        </div>
        <!-- /footer copyright -->

      </div>

    </div>
    <!-- /Row -->

  </div>
  <!-- /Container -->

</footer>
<!-- /Footer -->
