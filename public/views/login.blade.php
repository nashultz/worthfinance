<div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form name="loginForm" ng-submit="loginForm.$valid && login()" novalidate>
        <fieldset class="form">
          <div>
            <h3 class="text-center">Login</h3>
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username" ng-model="credentials.username" required />
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" ng-model="credentials.password" ng-minlength="5" required />
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info" ng-disabled="loginForm.$invalid">Log In</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <div class='col-lg-6 col-lg-offset-3 text-center'>
      &nbsp;
    </div>
    <div class='col-lg-6 col-lg-offset-3 text-center'>
      Copyright &copy; <?php echo date('Y'); ?> - Worth Finance Corporation - All Rights Reserved.
    </div>
    <div class="clearfix"></div>
  </div>
</div>