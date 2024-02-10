<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{app()->getLocale()=='ar'?'rtl':'ltr'}} >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @if(app()->getLocale()=='ar')
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap.rtl.min.css">
        @else
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        @endif
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/assets/css/blog.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="/assets/css/blogDetails.css">
        <!-- Boxicons CSS --> 
        <link rel="stylesheet" href="/assets/css/contact.css">
        <!-- Flaticon CSS -->
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/assets/css/footer.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/assets/css/globals.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/assets/css/header.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/assets/css/languageToggle.css">
        <link rel="stylesheet" href="/assets/css/media_queries.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/assets/css/projects.css">
        
        <link rel="stylesheet" href="/assets/css/team.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="/assets/css/themeToggle.css">
        <!-- Title -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
        <link rel="stylesheet" href="/assets/css/dark.css">

        <title>Bonsa - SEO & Marketing Company HTML Template</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/assets/img/favicon.png">
        @if(app()->getLocale()=='ar')
        <link rel="stylesheet" href="/assets/css/rtl.css">
        @endif
    
    
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="{{app()->getLocale()=='ar'?'rtl':'ltr'}}">
        <div class="app">
        @inertia

 
        </div>
               <!-- Jquery Min JS -->
               <script src="/assets/js/jquery.min.js"></script>
               <!-- Bootstrap Bundle Min JS -->
               <script src="/assets/js/bootstrap.bundle.min.js"></script>
               <!-- Meanmenu JS -->
               <script src="/assets/js/meanmenu.min.js"></script>
               <!-- Magnific Popup JS -->
               <script src="/assets/js/jquery.magnific-popup.min.js"></script>
               <!-- Wow JS -->
               <script src="/assets/js/wow.min.js"></script>
               <!-- Ajaxchimp Min JS -->
               <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
               <!-- Form Validator Min JS -->
               <script src="/assets/js/form-validator.min.js"></script>
               <!-- Contact Form JS -->
               <script src="/assets/js/contact-form-script.js"></script>
               <!-- Custom JS -->
               <script src="/assets/js/custom.js"></script>
           
    </body>
</html>
