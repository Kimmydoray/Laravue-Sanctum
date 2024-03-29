
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--begin::Head-->
    <head><base href="../../../../">
    <meta charset="utf-8"/>
    <title>Affiliate Program | Log in</title>
    <meta name="description" content="Singin page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->

<!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('demo13/dist/assets/plugins/global/plugins.bundle.css') }} " rel="stylesheet" type="text/css"/>
    <link href="{{ asset('demo13/dist/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('demo13/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
<!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
            <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{ asset('demo13/dist/assets/media/logos/favicon.ico') }}"/>
    <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed page-loading"  >

    	<!--begin::Main-->
	<div id="app" class="d-flex flex-column flex-root">
    
	</div>
<!--end::Main-->


        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1400
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#3699FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#E4E6EF",
                "dark": "#181C32"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1F0FF",
                "secondary": "#EBEDF3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#3F4254",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#EBEDF3",
            "gray-300": "#E4E6EF",
            "gray-400": "#D1D3E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#7E8299",
            "gray-700": "#5E6278",
            "gray-800": "#3F4254",
            "gray-900": "#181C32"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
        <script src="{{ asset('demo13/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('demo13/dist/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
        <script src="{{ asset('demo13/dist/assets/js/scripts.bundle.js') }}"></script>
        <!--end::Global Theme Bundle-->


        <!--begin::Page Scripts(used by this page)-->
        <script src="{{ asset('assets/js/pages/custom/login/login-4.js') }}"></script>
        <!--end::Page Scripts-->
    <script src="{{ mix('js/app.js') }}"></script>
    </body>
    <!--end::Body-->
</html>