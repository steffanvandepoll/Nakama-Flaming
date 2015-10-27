<html>
    <head>
        <title>Nakama - @yield('title')</title>
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="assets/bower/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <script src="assets/bower/platform/platform.js"></script>

    </head>
    <body ng-app="main">
        <div class="container">
            @yield('content')
        </div>
        <script src="assets/bower/jquery/dist/jquery.js"></script>
        <script src="assets/bower/angular/angular.js"></script>
        <script src="assets/bower/angular-animate/angular-animate.js"></script>
        <script src="assets/bower/angular-touch/angular-touch.js"></script>
        <script src="assets/bower/angular-bootstrap/ui-bootstrap-tpls.js"></script>
        <script src="assets/js/application.js"></script>
        <script src="assets/js/carousel.js"></script>
    </body>
</html>