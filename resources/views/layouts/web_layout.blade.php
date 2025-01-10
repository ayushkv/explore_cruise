<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="robots" content="Noindex, Nofollow">
    @include('includes.header')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
    @yield('script')
    <?php if(Session::get('contact_success')){ ?>
    <script>
        $("#success_msg").html("{!! Session::get('contact_success') !!}");
        $(".Thanku-alert").addClass('active');
        $('.overlay').addClass('overlay_active');
        $('body').addClass('overflow-hidden');
    </script>
    <?php } ?>
    
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>
    </body>

</html>
