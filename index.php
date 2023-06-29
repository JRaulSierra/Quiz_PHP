<?php
    require_once('connection.php');
    if(!empty($connection)){
        $route = $_SERVER["REQUEST_URI"];
        $query = $_SERVER["QUERY_STRING"];
        switch ($route){
            case '/Prueba_tecnica/Quiz/':
                require "sistem/Home/quiz.php";
                break;
            case '/Prueba_tecnica/Quiz/createNewQuiz':
                require "sistem/quizName/quizName.php";
                break;
                
            case (strpos($route, '/Prueba_tecnica/Quiz/createNewQuestion') === 0 && strpos($query, 'quiz=') !== false):
                require "sistem/createQuiz/createQuiz.php";
                break;

            case '/Prueba_tecnica/Quiz/CopyQuiz':
                require "sistem/quizName/quizName.php";
                break;
            default:
                http_response_code(404);
                break;
        }
    }
?>