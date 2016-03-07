var MessageApp = angular.module("MessageApp", [
    "ngRoute"
    //,"AllControllers"
]);

MessageApp.config([
    "$routeProvider", "$locationProvider", function($routeProvider, $locationProvider){
        $routeProvider.when(
            "/reg",
            {
                templateUrl:"view/register.html"
            }
        ).when(
            "/profile",
            {
                templateUrl:"view/user_profile.html"
            }
        ).when(
            "/chat",
            {
                templateUrl:"view/allmsg.html"
                //,controller:"chatCtrl"
            }
        ).when(
            "/items",
            {
                templateUrl:"view/user_item.html"
                //,controller:"chatCtrl"
            }
        )
    }
]);