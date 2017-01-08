<html>
<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Vendor: Angular, followed by our custom Javascripts -->
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>


  <!--  <script src="js/main.js"></script>-->
</head>
<body ng-app="learn_ang">

<div ng-include='"header.php"'></div>

<div ng-view></div>


<div ng-include='"footer.php"'></div>

<script>
    var scotchApp = angular.module('learn_ang', ['ngRoute']);

    // configure our routes
    scotchApp.config(function($routeProvider) {
        $routeProvider

        // route for the home page
           /* .when('/', {
                templateUrl : 'pages/home.html',
                controller  : 'mainController'
            })
*/
            // route for the about page
            .when('/about', {
                templateUrl : 'about.html',
                controller  : 'contactController'
            })

            // route for the contact page
            .when('/myapp', {
                templateUrl : 'myapp.php',
                controller  : 'myappController'
            });
    });
    scotchApp.controller('contactController', function (/* $scope, $location, $http */) {
        console.log("Page Controller reporting for duty.");
    });
    scotchApp.controller('myappController', function (/* $scope, $location, $http */) {
        console.log("Page Controller reporting for duty.");
    });

    var countryApp = angular.module('learn_ang', []);
    countryApp.controller('CountryCtrl', function ($scope, $http){
        $http.get('getdata.php').success(function(data) {
            alert(data);
            $scope.countries = data;
        });
    });

    //var countryApp = angular.module('countryApp', []);
   /* scotchApp.controller('CountryCtrl', function ($scope, $http){
        $http.get('getdata.php').success(function(data) {
            alert(data);
            $scope.countries = data;
        });
    });*/

</script>
</body>


</html>