<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<?php

			include 'header.php';


		?>

    </head>
    <body ng-app="userArea" ng-controller="userAreaCtrl">
        <div class="wrapper">
            <div class="header">
                <div class="content">
                    <h1>
                        Escola do
                        <span>Sucesso</span>
                    </h1>
                    <p class="welcome">
                        Seja bem vindo à escola online
                    </p>
                    <hr>
                </div>
            </div>
            <div class="content">
                <div ng-hide="doUsuario.length < 1">
                    <h2>Seus cursos</h2>
                    <ul class="clearfix" id="myOwn">
                        <li ng-repeat="curso in doUsuario">
                            <a href="{{curso.link}}">
                                <img src="{{curso.image}}" alt="">
                                <h3>{{curso.title}}</h3>
                            </a>
                        </li>
                    </ul>
                    <hr/>
                </div>
                <div ng-hide="aguardandoPagamento.length < 1">
                    <h2>
                        Aguardando confirmação do pagamento
                    </h2>

                    <ul class="clearfix" id="awaitingPayment">
                        <li ng-repeat="curso in aguardandoPagamento">
                            <a href="javascript:void(0);" ng-click="cursoToModal(curso)">
                                <img src="{{curso.image}}" alt="">
                                <h3>{{curso.title}}</h3>
                            </a>
                        </li>
                    </ul>
                    <hr/>
                </div>
                <div ng-hide="daEscola.length < 1">
                    <h2>
                        Outros cursos que você poderia gostar
                    </h2>
                    <ul id="theOthers">
                        <li ng-repeat="curso in daEscola">
                            <a href="javascript:void(0);" ng-click="cursoToModal(curso)">
                                <img src="{{curso.image}}" alt="">
                                <h3>{{curso.title}}</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer">
                <p class="copyrights">
                    2015 © |
                    <a href="http://escoladosucesso.com/" target="_blank">Escola do Sucesso</a> -
                    Todos os direitos reservados | Desenvolvido por
                    <a href="http://rion.hol.es/" target="_blank">RION</a>
                </p>
            </div>
            <div class="remodal-overlay" ng-hide="modal.length < 1"></div>
            <div class="remodal-wrapper" ng-hide="modal < 1">
                <div class="remodal" data-remodal-id="modal" style="visibility: visible;" ng-repeat="modal in modal">
                    <div class="modalHolder">
                        <div class="imageHolder">
                            <img src="{{modal.image}}" alt="">
                        </div>
                        <div class="textHolder">
                            <div>
                                <h1>{{modal.title}}</h1>
                                <p class="clearfix">
                                    {{modal.description}}
                                </p>
                                <a class="remodal-confirm" href="{{modal.linkcheckout}}">Comprar curso - {{modal.price | currency: 'R$ '}}</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="javascript:void(0);" class="remodal-close" ng-click="closeModal()"></a>
                </div>
            </div>
        </div>


    </body>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"></script>
    <script src="http://pineconellc.github.io/angular-foundation/mm-foundation-tpls-0.3.1.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="assets/js/vendor/cheet.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/app.js"></script>
<!--    <script src="assets/js/vendor/remodal.js"></script>-->

</html>
