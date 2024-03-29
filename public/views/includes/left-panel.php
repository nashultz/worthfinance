<span>
    <!-- User info -->
    <div class="login-info">
      <span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
        
        <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
          <img src="assets/img/avatars/male.png" alt="me" class="online"> 
          <span>
            {{ user.username }} 
          </span>
          <i class="fa fa-angle-down"></i>
        </a> 
        
      </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive -->

    <navigation>
      <nav:item view="dashboard" icon="fa fa-lg fa-fw fa-home" title="Dashboard" />
      <nav:group icon="fa fa-lg fa-fw fa-sitemap" title="Offices" >
        <nav:item view="offices" title="View Offices" target="_self" />
        <nav:item view="admin/offices/new" title="Add New Office" />
        <nav:item view="admin/offices/something" title="Something Else Here" />
      </nav:group>
      <nav:group icon="fa fa-lg fa-fw fa-sitemap" title="Accounts" >
        <nav:item view="accounts" title="View Accounts" target="_self" />
        <nav:item view="admin/accounts/new" title="Add New Account" />
        <nav:item view="admin/accounts/something" title="Something Else Here" />
      </nav:group>      
    </navigation>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>
  </span>