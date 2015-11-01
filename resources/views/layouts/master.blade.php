<html>
    <head>
        <title>Nakama Flaming - @yield('title')</title>
        <link href="{{ URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('assets/bower/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
        <script src="{{ URL::asset('assets/bower/platform/platform.js')}}"></script>
        <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/img/favicon.png') }}" />

    </head>
    <body ng-app="main">
        <div class="container">
            @yield('content')

            <div class="row s-footer" ng-controller="login">
                <script type="text/ng-template" id="login-modal.html">
                   
                        <div class="modal-header">
                            <h3>Login to Nakama-Flaming</h3> <img class="s-responsive-img"?>
                        </div>
                        <div class="modal-body clearfix">
                             <form role="form" class="form-horizontal" name="login" action="/auth/login" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email:</label>
                                    <div class="col-sm-10">
                                      <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                                    <div class="col-sm-10"> 
                                      <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                      </div>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="pull-right">
                                    <button class="btn btn-success" type="submit">Login</button>
                                    <button class="btn btn-danger" type="button" ng-click="cancel()">Cancel</button>
                                </div>
                            </form>   
                        </div>
                  
                </script>
                @if(Auth::check())
                    <a href="/auth/logout" class="pull-right btn btn-primary" ><i class="fa fa-user"></i> Logout</a>
                @else
                    <button class="pull-right btn btn-primary" ng-click="open()" ><i class="fa fa-user"></i> Login</button>
                @endif
                
            </div>
        </div>

        <script src="{{ URL::asset('assets/bower/jquery/dist/jquery.js')}}"></script>
        <script src="{{ URL::asset('assets/bower/angular/angular.js')}}"></script>
        <script src="{{ URL::asset('assets/bower/angular-animate/angular-animate.js')}}"></script>
        <script src="{{ URL::asset('assets/bower/angular-touch/angular-touch.js')}}"></script>
        <script src="{{ URL::asset('assets/bower/angular-bootstrap/ui-bootstrap-tpls.js')}}"></script>
        <script src="{{ URL::asset('assets/bower/ng-flow/dist/ng-flow-standalone.min.js')}}"></script>
        <script src="{{ URL::asset('assets/js/application.js')}}"></script>
        <script src="{{ URL::asset('assets/js/carousel.js')}}"></script>
    </body>
</html>