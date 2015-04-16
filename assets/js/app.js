
angular.module('userArea', ['ngRoute', 'mm.foundation', 'ngAnimate'])

.controller('userAreaCtrl', function ($scope, $http) {
    $scope.modal = [];
    $http.get('json/doUsuario.json').success(function (response) {
        $scope.doUsuario = response.doUsuario;
    });
    $http.get('json/aguardandoPagamento.json').success(function (response) {
        $scope.aguardandoPagamento = response.aguardandoPagamento;
    });
    $http.get('json/daEscola.json').success(function (response) {
        $scope.daEscola = response.daEscola;
    });
    
    $scope.cursoToModal = function(curso) {
        $scope.modal.push(curso);
        console.log(curso);
    }
});
