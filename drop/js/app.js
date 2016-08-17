angular.module("dropDemo", ["ui.drop"])

.controller("DemoCtrl", function($scope) {

})
.controller("DropCtrl", function($scope, $element) {
  $scope.days = ['1','2','3','4','5','6','7']
  
  $scope.hasElement = function() {
    return $element.children('div').length > 0;
  }
});
