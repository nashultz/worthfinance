<h1>Accounts</h1>

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
    <th>Office <a href="" ng-click="predicate = 'office'; reverse=!reverse"> <i class="fa fa-sort"></i></a></th>
  </tr>
  <tr ng-repeat="account in accounts | filter:search | orderBy:predicate:reverse">
    <td data-title="'ID'" sortable="'id'">
        {{account.id}}
    </td>
    <td data-title="'Office'" sortable="'office'">
        {{account.office_id}}
    </td>
  </tr>
</table>