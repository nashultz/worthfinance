<div id="logo-group">
  <!-- PLACE YOUR LOGO HERE -->
  <span id="logo"> Worth Finance Corp </span>
  <!-- END LOGO PLACEHOLDER -->
  
</div>

<!-- pulled right: nav area -->
      <div class="pull-right">
        
        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
          <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->
        
        

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
          <span> <a href="auth/logout" rel="tooltip" title="Sign Out" action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
          <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

        <ul data-lang-menu="" class="header-dropdown-list hidden-xs" data-ng-controller="LangController">
          <li>
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <img alt="" class="flag flag-{{ currentLang.flagCode }}" src="assets/img/blank.gif"> <span> {{ currentLang.translation }} </span> <i class="fa fa-angle-down"></i> 
            </a>
            <ul class="dropdown-menu pull-right">
              <li data-ng-class="{active: lang == currentLang}" data-ng-repeat="lang in languages">
                <a href="" data-ng-click="setLang(lang)" ><img class="flag flag-{{ lang.flagCode }}" src="img/blank.gif" /> {{ lang.language }} ({{ lang.translation }}) </a>
              </li>
            </ul>
          </li>
        </ul>

      </div>
      <!-- end pulled right: nav area -->