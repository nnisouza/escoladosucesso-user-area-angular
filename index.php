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
    <body>
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
            <div class="content" ng-app="userArea" ng-controller="userAreaCtrl">
                <h2>Seus cursos</h2>
                <ul class="clearfix" id="myOwn">
                    <li ng-repeat="course in courses">
                        <a href="../escoladosucesso-class-area/">
                            <img src="assets/img/mark/andrei.jpg" alt="">
                            <h3>{{courses.doUsuario.title}}</h3>
                        </a>
                    </li>
                </ul>

                <hr/>

                <h2>
                    Aguardando confirmação do pagamento
                </h2>

                <ul class="clearfix" id="awaitingPayment">
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/andrei.jpg" alt="">
                            <h3>Você não sabia?</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/andrei.jpg" alt="">
                            <h3>Você não sabia?</h3>
                        </a>
                    </li>
                </ul>

                <hr/>

                <h2>
                    Outros cursos que você poderia gostar
                </h2>

                <ul id="theOthers">
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard2.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard2.jpg" alt="">
                            <h3>I'm a Wizard!</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard2.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard2.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                    <li>
                        <a href="#modal">
                            <img src="assets/img/mark/wizard2.jpg" alt="">
                            <h3>Fórmula do milhão</h3>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <p class="copyrights">
                    2015 © |
                    <a href="http://escoladosucesso.com/" target="_blank">Escola do Sucesso</a> -
                    Todos os direitos reservados | Desenvolvido por
                    <a href="http://rion.hol.es/" target="_blank">RION</a>
                </p>
            </div>
        </div>

        <div class="remodal" data-remodal-id="modal">
            <h1>Fórmula do Milhão</h1>
            <p class="clearfix">
              <img src="assets/img/mark/wizard.jpg" alt="">
              Descrição super, mas extremamente, convidativa do curso.
              Descrição super, mas extremamente, convidativa do curso.
              Descrição super, mas extremamente, convidativa do curso.
            </p>
            <br>
                <a class="remodal-confirm" href="#">Comprar</a>
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
    <script src="assets/js/vendor/remodal.js"></script>

</html>
