<!DOCTYPE html>
<html lang="en" ng-app="loginApp">
<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

  <title> Worth Finance </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <%css('site_login.css')%>

  <%js('angular/angular-beta.js')%>
  <%js('angular/angular-route.js')%>
  <!--<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
  <!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.4/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/timelinejs/2.32.0/js/storyjs-embed.js"></script>-->
  <%js('loginApp.js')%>
  
  <base href="/">
</head>
  <body ng-controller="LoginController">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 class="text-center">Worth Finance Corporation</h1>
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
  </body>
</html>