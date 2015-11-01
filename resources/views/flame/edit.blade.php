@extends('layouts.master')

@section('title', 'Add a new flame')

<div class="container" ng-controller="flame-management" ng-init="init({{$flame}})">

	
	<div class="col-lg-12 s-header clearfix">
		<img class="s-responsive-img pull-right" src="{{ URL::asset('assets/img/logo.png') }}" />
		<h1>Managing da flames mon</h1>
		<h3>Welkom {{ explode(" ", Auth::user()->name)[0] }}</h3> 
	</div>

	<div class="col-lg-12" >

	<div class="alert alert-info" role="alert">
		<p>
			Hey {{explode(" ", Auth::user()->name)[0]}}! Leuk dat je aan de slag wilt gaan... goed bezig! <br />
			Voordat je begint wil ik je wel graag even wijzen op de volgende punten &amp; tips:
		</p>
		<ul>
			<li><strong>Title:</strong> Wees creatief, maar hou het kort!</li>
			<li><strong>Types:</strong> Kies minimaal 1 type... waar valt dit fragment onder?</li>
			<li><strong>Champions:</strong> Wie horen we hier? Selecteer de champs die op <strong>DAT</strong> moment gespeeld werden door <strong>DIE</strong> personen.</li>
			<li><strong>Sound:</strong> Waar moest jij nu om lachen en is het ook buiten de context leuk. Let op. Max filesize = 15mb. Maar niemand gaat naar een fragment van langer dan 30 seconden luisteren. Hou het kort en krachtig!</li>
			<li><strong>Common Sense:</strong> Denk even na. Je plaatst nu iets online. Mag ik dit van de betrokken personen? Kwets ik hier niemand mee?</li>
		</ul>
		
	</div>

	<div ng-if="errorMessages.length > 0" ng-cloak class="alert alert-danger" role="alert">
		<ul>
			<li ng-repeat="errorMessage in errorMessages"><% errorMessage %></li>
		</ul>
	</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">
	    @if($flame->id == null)
			Voeg een nieuwe Flame toe
		@else
			Bewerk Flame
		@endif  
		</h3>
	  </div>
	  <div class="panel-body">
	   

	  	{!! Form::model($flame, array('url' => '/flame/edit/'.$flame->id, 'class' => 'form-horizontal ', 'files' => 'true' )) !!}
	   		

		  <div class="form-group">
		    <label class="control-label col-sm-2" for="title">Title:</label>
		    <div class="col-sm-10">
		      <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" ng-model="title" value="{{$flame->title}}">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2" for="types">Types:</label>
		    <div class="col-sm-10">
				<div class="row s-flame-type-management">
				    <ul>
				        <li style="border:3px solid <% type.color %>" ng-style="getStyle(type)" class="col-lg-3 col-md-4 col-sm-6 col-xs-12" ng-click="onTypeSelection(type)" ng-repeat="type in types">
				            <p class="s-type-title"><span class="fa fa-fw <% type.icon %>"></span><% type.description %></p>
				        </li>
				    </ul>
			    </div>
		     	<input type="hidden" name="flame_types" class="form-control" value="<%type_ids%>">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="control-label col-sm-2">Champions:</label>
		    <div class="col-sm-10">
		    	<div class="panel panel-default">
	    			<div class="panel-body" id="s-selected-champions">
	    				<div class="col-lg-12">
	    					<img  ng-repeat="champion in selected_champions" title="<%champion.name%>" ng-click="onRemoveSelectedChampion(champion)" class="s-responsive-img s-selectable-champion" src="{{URL::asset('assets/img/icons')}}/<%champion.filename%>" />
	    				</div>
	    			</div>
	    		</div>

	    		<div class="panel panel-default">
	    		 	<div class="panel-heading">
	    		 		 <input type="text" class="form-control" ng-model="champion_text" placeholder="Champion Name">
	    		 	</div>
	    			<div class="panel-body" id="s-champion-list">
	    				<div class="col-lg-12">
	    					<img  ng-repeat="champion in champions | filter:filterByText", ng-click="onSelectChampion(champion)" title="<%champion.name%>" class="s-responsive-img s-selectable-champion" src="{{URL::asset('assets/img/icons')}}/<%champion.filename%>" />
	    				</div>
	    			</div>
	    		</div>
		      	<input type="hidden" name="champion_ids" class="form-control" id="champion_ids" value="<%champion_ids%>">
		       	@if($flame->id != null)
			 		<input type="hidden" name="flame_id" class="form-control" value="{{$flame->id}}">
				@endif  
		    </div>
		  </div>
		   <div class="form-group"> 
		   <label class="control-label col-sm-2">Sound:</label>
		    <div class="col-sm-10">
		    	
		    	<div class="s-current-sound" ng-cloak ng-if="flame.filepath">
		    		<label ng-click="onPlay('{{URL::asset('assets/sfx')}}/<%flame.filepath%>')" class="btn btn-success"><i class="fa fa-play"></i> Play Current Sound</button>
		    	</div>

		    	<div class="input-group">


		    		<!-- {!! Form::file('audio') !!} -->

				  <label class="btn btn-primary input-group-addon" for="my-file-selector">

				  	
				    <input ng-model="sound" name="file" onchange="angular.element(this).scope().file_changed(this)" id="my-file-selector" type="file" style="display:none;">
				    <i class="fa fa-upload"></i>  Select New Sound
				 </label>
				 <input type="text" class="form-control" readonly placeholder="Select a file..." aria-describedby="basic-addon1" ng-model="placeholder">
				</div>
		      
		    </div>
		  </div>
		  <div class="form-group"> 
		   	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    <div class="col-sm-offset-2 col-sm-10 clearfix">
		    	<div class="pull-right">
			      <button ng-click="validate($event)" type="submit" class="btn btn-success">Submit</button>
			      <a href="/" class="btn btn-danger">Cancel</a>
			    </div>
		    </div>
		  </div>
		{!! Form::close() !!}
	  </div>
	</div>

	</div>

</div>

@section('content')

@endsection
