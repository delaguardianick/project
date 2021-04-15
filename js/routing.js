var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "index.php"
    })
    .when("/index", {
        templateUrl : "index.php"
    })
    .when("/rideToDest", {
        templateUrl : "rideToDest.php"
    })
    .when("/rideAndDeliv", {
        templateUrl : "rideAndDeliv.php"
    })
    .when("/aboutUs", {
        templateUrl : "aboutUs.php"
    })
    .when("/contactUs", {
        templateUrl : "contactUs.php"
    })
    .when("/signUp", {
        templateUrl : "signup.php"
    })
    .when("/login", {
        templateUrl : "login.php"
    })
    .when("/payment", {
        templateUrl : "payment.php"
    })
    .when("/paymentItems", {
        templateUrl : "paymentItems.php"
    })
    .when("/doublePayment", {
        templateUrl : "doublePayment.php"
    })
    .when("/doubleItems", {
        templateUrl : "doubleItems.php"
    })
    .when("/driverSignup", {
        templateUrl : "driverSignup.php"
    })
    .when("/thankyou", {
        templateUrl : "thankyou.php"
    })
    .when("/deleteRecord", {
        templateUrl : "deleteRecord.php"
    })
    .when("/dbGetTable.php", {
        templateUrl : "dbGetTable.php"
    })
    .when("/editRecord.php", {
        templateUrl : "editRecord.php"
    })
    .when("/dbMaintain", {
        templateUrl : "dbMaintain.php"
    })
    .when("/edit", {
        templateUrl : "edit.php"
    })
});