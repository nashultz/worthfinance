<div class="container">
  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
      <form ng-submit="login()">
        <fieldset>
          <div>
            <div>
              <input type="text" name="username" placeholder="Username" ng-model="credentials.username" required />
            </div>
            <div>
              <input type="password" name="password" placeholder="Password" ng-model="credentials.password" required />
            </div>
            <div>
              <button type="submit">Log In</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>