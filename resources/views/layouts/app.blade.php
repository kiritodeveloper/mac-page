<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<body >
<div >
    <div >
    @include('partials._topnav')
        <div>
             @yield('content')
        </div>
    </div>
</div>




@include('partials._footer')
 
<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- Extra plugin css -->
<script src="vendors/counterup/jquery.waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script> 
<script src="vendors/counterup/apear.js"></script>
<script src="vendors/counterup/countto.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>

<script src="js/theme.js"></script>

@stack('scripts')


</body>
</html>