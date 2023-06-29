<?php
    require_once('connection.php');
    if(!empty($connection)){
        $route = $_SERVER["REQUEST_URI"];
        switch ($route){
            case '/Prueba_tecnica/Quiz/':
                require "sistem/Home/quiz.php";
                break;
            case '/Prueba_tecnica/Quiz/createNewQuiz':
                require "sistem/quizName/quizName.php";
                break;

            case '/Prueba_tecnica/Quiz/createNewQuestion':
                require "sistem/createQuiz/createQuiz.php";
                break;

            default:
                http_response_code(404);
                break;
        }
    }
?>