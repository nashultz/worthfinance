<h1>Offices</h1>

<table class="table table-bordered table-striped">
  <tr>
    <td class="form-inline" colspan="4">
      <div class="form-group">
        <input type='text' class="form-control input-sm" name='search' placeholder="Search" ng-model="search" />
      </div>
    </td>
  </tr>
  <tr>
    <th>ID <a href="" ng-click="predicate = 'id'; reverse=!reverse"> <i class="fa fa-sort"></i></a></th>
    <th>Name <a href="" ng-click="predicate = 'name'; reverse=!reverse"> <i class="fa fa-sort"></i></a></th>
    <th>Address <a href="" ng-click="predicate = 'address'; reverse=!reverse"> <i class="fa fa-sort"></i></a></th>
    <th>City <a href="" ng-click="predicate = 'city'; reverse=!reverse"> <i class="fa fa-sort"></i></a></th>
  </tr>
  <tr ng-repeat="office in offices | filter:search | orderBy:predicate:reverse">
    <td data-title="'ID'" sortable="'id'">
        {{office.id}}
    </td>
    <td data-title="'Name'" sortable="'name'">
        {{office.name}}
    </td>
    <td data-title="'Address'" sortable="'address'">
        {{office.address}}
    </td>
    <td data-title="'City'" sortable="'city'">
        {{office.city}}
    </td>
  </tr>
</table>