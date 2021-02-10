<head>
    <meta charset="utf-8">
    <title>Medi-tech - HTML Template | Home Page 03</title>
    <!-- Stylesheets -->
    <link href="front_files/css/bootstrap.css" rel="stylesheet">
{{--    <link href="front_files/css/style.css" rel="stylesheet">--}}
    @if (App::getLocale() == 'en')
        <link href="{{ URL::asset('front_files/css/style.css') }}" rel="stylesheet">
    @else
        <link href="{{ URL::asset('front_files/css/style_rtl.css') }}" rel="stylesheet">
    @endif
    <link href="front_files/css/responsive.css" rel="stylesheet">

    <!--Color Switcher Mockup-->
    <link href="front_files/css/color-switcher-design.css" rel="stylesheet">
    <!--Color Themes-->
    <link id="theme-color-file" href="front_files/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="shortcut icon" href="front_files/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="front_files/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="front_files/js/respond.js"></script><![endif]-->

</head>

