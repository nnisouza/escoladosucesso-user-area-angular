
angular.module('userArea', ['ngRoute', 'mm.foundation', 'ngAnimate'])

.controller('userAreaCtrl', function ($scope, $http) {
    $scope.cart = [];
    $http.get('info.json').success(function (response) {
        $scope.courses = response;

        console.log(response);
    });
//    $scope.addToCart = function (product) {
//        var found = false;
//        $scope.cart.forEach(function (item) {
//            if (item.id === product.id) {
//                item.quantity++;
//                found = true;
//            }
//        });
//        if (!found) {
//            $scope.cart.push(angular.extend({quantity: 1}, product));
//        }
//    };
//    $scope.getCartPrice = function () {
//        var deliveryPrice = parseInt($('#deliveryPrice').val());
//        var total = deliveryPrice;
//        $scope.cart.forEach(function (product) {
//            total += product.price * product.quantity;
//        });
//        return total;
//    };
//    $scope.removeFromCart = function (product, cart) {
//        $scope.cart.forEach(function (item) {
//            if (item.id === product.id) {
//                if (item.quantity > 1){
//                    item.quantity--;
//                } else {
//                    cart.splice(cart.indexOf(item), 1);
//                }
//            }
//        });
//    };
})
