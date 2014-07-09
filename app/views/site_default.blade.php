@extends('core')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1 class="text-center">WorthFinance Corporation</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <div id="flash" class="alert alert-{{ alert }}" ng-show="flash">
          {{ flash }}
        </div>
      </div>
    </div>
  </div>
  <div ng-view></div>
@stop