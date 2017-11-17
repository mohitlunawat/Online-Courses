<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body ng-app="myApp">

<div ng-include="'http://htmledit.squarefree.com/'"></div>

<script>
var app = angular.module('myApp', [])

app.config(function($sceDelegateProvider) {
  $sceDelegateProvider.resourceUrlWhitelist([
    '**'
  ]);
});

</script>

</body>
</html>
