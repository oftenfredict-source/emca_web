        <!--<< Favicon >>-->
        @php
            if (! function_exists('site_image_url')) {
                $helpers = app_path('helpers.php');
                if (is_file($helpers)) {
                    require_once $helpers;
                }
            }

            $favicon = function_exists('site_image_url')
                ? site_image_url('logo')
                : asset('images/logo_header.png');
        @endphp
        <link rel="icon" type="image/png" href="{{ $favicon }}">
        <link rel="shortcut icon" type="image/png" href="{{ $favicon }}">
        <link rel="apple-touch-icon" href="{{ $favicon }}">
