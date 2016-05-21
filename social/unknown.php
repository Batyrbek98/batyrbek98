<html data-ng-app="">
  <head>
    <script src="../script/angular.min.js"></script>
  </head>
  <body >
    <div class="Controller" data-ng-controller="SimpleController">
    <ul>
        <li data-ng-repeat="cust in customers">{{ cust.name }}-{{ cust.city }}</li>
    </ul>
    </div>
        <script>
            function SimpleController($scope){
                $scope.customers = [
                { name: 'Max', city: 'Aktobe' },
                { name: 'Psyx', city: 'Astana' },
                { name: 'Delta', city: 'Almaty' },
                { name: 'Alpha', city: 'Shymkent' }
                ];
            }
        </script>
  </body>
</html>