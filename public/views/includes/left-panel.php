<span>
    <!-- User info -->
    <div class="login-info">
      <span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
        
        <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
          <img src="#" alt="me" class="online"> 
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
      <nav:item data-view="admin/dashboard" data-icon="fa fa-lg fa-fw fa-home" title="Dashboard" />
      <nav:group data-icon="fa fa-lg fa-fw fa-sitemap" title="Offices" >
        <nav:item data-view="admin/offices/all" title="View Offices" />
        <nav:item data-view="admin/offices/new" title="Add New Office" />
        <nav:item data-view="admin/offices/something" title="Something Else Here" />
      </nav:group>
    </navigation>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>
  </span>