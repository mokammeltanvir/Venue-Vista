<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('assets/frontend')}}/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('assets/frontend')}}/js/bootstrap.min.js"></script>
<!-- Flex Nav Script -->
<script src="{{ asset('assets/frontend')}}/js/jquery.flexnav.js" type="text/javascript"></script>
<script src="{{ asset('assets/frontend')}}/js/navigation.js"></script>
<script type="text/javascript" src="{{ asset('assets/frontend')}}/js/bootstrap-select.js"></script>
<script src="{{ asset('assets/frontend')}}/js/jquery.flexnav.js" type="text/javascript"></script>

<!-- slider -->
<script src="{{ asset('assets/frontend')}}/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/frontend')}}/js/slider.js"></script>
<!-- testimonial -->
<script type="text/javascript" src="{{ asset('assets/frontend')}}/js/testimonial.js"></script>

<!-- sticky header -->
<script src="{{ asset('assets/frontend')}}/js/jquery.sticky.js"></script>
<script src="{{ asset('assets/frontend')}}/js/header-sticky.js"></script>

<!-- Toastr link start -->
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}

@stack('scripts')





