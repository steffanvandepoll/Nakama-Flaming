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
        <div class="s-slide-info col-lg-6 col-md-6">
            <h2 ng-click="onPlay('{{URL::asset('assets/sfx')}}/<%slide.path%>')" class="section-title"><% slide.title %><span class="fa fa-fw fa-play s-carousel-play" ></span></h2>
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

@if(Auth::check())
    <div class="s-management-panel row">
        <div class="col-lg-12">
            <a href="/flame/add" class="btn btn-success pull-right" ><i class="fa fa-plus"></i> Nieuwe Flame Toevoegen</a>
        </div>
    </div>
@endif    

  <div class="row">
       <ul class="s-flames">
          <li class="col-lg-4 col-md-6 col-sm-6 col-xs-12" ng-repeat="flame in flames | filter:filterByType | orderBy:'-date'">
          <div class="s-flame " ng-click="onPlay('{{URL::asset('assets/sfx')}}/<%flame.filepath%>')">
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
              @if(Auth::check())
              <div class="s-manage-flame btn-group btn-group-justified">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-group"><a href="/flame/edit/<%flame.id%>" class="btn btn-primary" ><i class="fa fa-edit"></i> Bewerken</a></div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-group"><button class="btn btn-danger" ng-click="openRemoveModal(flame)"><i class="fa fa-remove"></i> Verwijderen</button></div>
              </div>
               @endif    
          </li>
        </ul>
  </div>
  <script type="text/ng-template" id="remove-modal.html">
          <div class="modal-header">
              <h3>Flame verwijderen?</h3>
              <p><% flame.title %></p>
          </div>
          <div class="modal-body">
                <div class="btn-group btn-group-justified" role="group">
                  <div class="btn-group" role="group">
                    <a href="/flame/remove/<%flame.id%>" type="button" class="btn btn-danger">Verwijderen</a>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" ng-click="cancel()" class="btn btn-primary">Nee!</button>
                  </div>
              </div>
          </div>

  </script>
</div>
@endsection
