<!DOCTYPE html>
<html lang="en" ng-app="worthApp">
<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

  <title> Worth Finance </title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <%css('site_default.css')%>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.11.0/jquery-ui.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.js"></script>
  <%js('angular/angular-route.js')%>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"></script>
  <!--<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.4/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.3.1/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/select2/3.5.0/select2.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/timelinejs/2.32.0/js/storyjs-embed.js"></script>-->
  <%js('settings.js')%>
  <%js('worthApp.js')%>
  <%js('services/appServices.js')%>
  <%js('controllers/appControllers.js')%>
  <%js('directives/appDirectives.js')%>
  <%js('notification/WorthNotification.js')%>
  
  <base href="/">
</head>
  <body ng-controller="WorthAppController">

    <!-- HEADER -->
    <header id="header" ng-include="'views/includes/header.php'"></header>
    <!-- END HEADER -->

    <!-- Left panel : Navigation area -->
    <aside id="left-panel"><span data-ng-include="'views/includes/left-panel.php'"></span></aside>
    <!-- END NAVIGATION -->

    <div id="main" role="main">
      <div id="flash" class="alert alert-{{ alert }}" ng-show="flash">
        {{ flash }}
      </div>
      <!-- RIBBON -->
      <div id="ribbon" data-ng-include="'views/includes/ribbon.php'" data-ribbon=""></div>
      <!-- END RIBBON -->

      <!-- MAIN CONTENT -->
      <div id="content" ng-view="" class="view-animate"></div>
      <!-- END MAIN CONTENT -->
    </div>
  </body>
</html>