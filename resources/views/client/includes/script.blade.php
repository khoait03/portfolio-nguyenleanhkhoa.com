<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('asset/client/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('asset/client/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset/client/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset/client/js/plugin.min.js') }}"></script>
<script src="{{ asset('asset/client/js/preloader.js') }}"></script>
<script src="{{ asset('asset/client/js/dark-mode.js') }}"></script>
<!--common script file-->
<script src="{{ asset('asset/client/js/main.js') }}"></script>
<script src="{{ asset('asset/client/js/progress-bar.js') }}"></script>
<script>
    $(window).on('load',function(){
        var delayMs = 4000; // delay in milliseconds
        setTimeout(function(){
            $('#leadModal').modal('show');
        }, delayMs);
    });
</script>
