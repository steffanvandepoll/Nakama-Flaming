@extends('layouts.master')

@section('title', 'Feel the Heat')


@section('content')

<script id="template/carousel/carousel.html" type="text/ng-template">
  <div ng-mouseenter="pause()" ng-mouseleave="play()" class="carousel" ng-swipe-right="prev()" ng-swipe-left="next()">
    <div class="carousel-inner" ng-transclude></div>
      <a ng-style="{'cursor':'pointer'}"  class="left carousel-control" ng-click="prev()" ng-show="slides.length > 1"></a>
      <a ng-style="{'cursor':'pointer'}" class="right carousel-control" ng-click="next()" ng-show="slides.length > 1"></a>
    </div>
</script>

<script id="template/carousel/slide.html" type="text/ng-template">
  <div ng-class="{
                    'active': leaving || (active && !entering),
                    'prev': (next || active) && direction=='prev',
                    'next': (next || active) && direction=='next',
                    'right': direction=='prev',
                    'left': direction=='next',
                }" class="item" ng-transclude>

  </div>
</script>

<div ng-controller="carousel" class="s-carousel">
  <carousel slideInterval="2000" class="s-project-carousel">
      <slide class="s-slide-intro" ng-style="{'background-image': 'url(' + slide.background + ')'};" ng-repeat="slide in slides" active="slide.active">
          <div class="">
              <div class="s-slide-info col-lg-6 col-md-6">
                  <h2 ng-click="onPlay(slide.path)" class="section-title"><% slide.title %><span class="fa fa-fw fa-play s-carousel-play" ></span></h2>
              </div>
          </div>
      </slide>
      
  </carousel>
  <div id="s-logo">
      <img class="s-responsive-img" src="assets/img/logo.png" />
  </div>

</div>

<div ng-controller="flame">

<div class="row s-flame-types">
  <ul>
      <li style="border:3px solid <% type.color %>" ng-style="getStyle(type)" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-click="onTypeSelection(type)" ng-repeat="type in types">
          <p class="s-type-title"><span class="fa fa-fw <% type.icon %>"></span><% type.description %></p>
      </li>
  </ul>
</div>

  <div class="row">
       <ul class="s-flames">
          <li class="col-lg-4 col-md-6 col-sm-6 col-xs-12" ng-repeat="flame in flames | filter:filterByType">

          <div class="s-flame " ng-click="onPlay(flame.filepath)">
              <p><% flame.title %></p>
              <ul class="s-champions">
                <li ng-repeat="champion in flame.champions">
                    <img class="s-responsive-img" src="assets/img/icons/<%champion.filename%>" />
                </li>
              </ul>

              <ul class="s-types clearfix">
                 <li class="pull-left" style="width:<%100/flame.types.length %>%; background-color:<% type.color %>; "; ng-repeat="type in flame.types">

                  <span class="fa fa-fw <% type.icon %>"></span>
                    
                </li>
              </ul>
              <div class="s-fade">
                  <span class="fa fa-fw fa-play"></span>
              </div>
            </div>    
          </li>
        </ul>
  </div>
</div>
@endsection
