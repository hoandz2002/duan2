<?php

use App\Controllers\AnswerController;
use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\QuestionController;
use App\Controllers\QuizController;
use App\Controllers\SubjectController;
use App\Models\Quiz;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function applyRouting($url)
{
    $router = new RouteCollector;
    $chotrong = new RouteCollector;

    $router->get('/', function () {
        return 'trong oi kiem nguoi yeu di';
    });
    $router->get('test-layout', function () {
        return view('layouts.main');
    });


    $router->group(['prefix' => 'mon-hoc'], function ($router) {
        // $router->get('/', [SubjectController::class, 'index'], ['before' => 'check-login']);
        $router->get('/', [SubjectController::class, 'index']);
        $router->post('luu-tao-moi', [SubjectController::class, 'saveAdd']);
        $router->get('tao-moi', [SubjectController::class, 'addForm']);
        $router->get('cap-nhat/{id}', [SubjectController::class, 'editForm']);
        $router->post('luu-cap-nhat/{id}', [SubjectController::class, 'saveEdit']);
        $router->get('xoa', [SubjectController::class, 'remove']);
        $router->get('chi-tiet', [SubjectController::class, 'detail_subject']);
        //dung cho gd sinh vien


        //
    });
    $router->get('sv/subject', [SubjectController::class, 'index_sv']);
    $router->get('sv/subject-chitiet', [SubjectController::class, 'subject_chitiet']);
    $router->get('sv/list-quiz', [QuizController::class, 'sv_list_quiz']);
    //
    $router->get('quiz', [QuizController::class, 'index']);
    $router->get('quiz/tao-moi/{id}', [QuizController::class, 'addForm']);
    $router->post('quiz/tao-moi/{id}', [QuizController::class, 'saveAdd']);
    $router->get('quiz/cap-nhat/{id}', [QuizController::class, 'editForm']);
    $router->post('quiz/cap-nhat/{id}', [QuizController::class, 'saveEdit']);
    $router->get('quiz/xoa/{id}/{subject}', [QuizController::class, 'remove']);
    $router->get('quiz/danh-sach', [QuizController::class, 'listQuiz']);
    //
    $router->get('quiz/lam-bai/{id}', [QuizController::class, 'startQuiz']);

    // cap nhat quiz theo logic
    $router->get('quiz/chi-tiet-quiz/{id}', [QuizController::class, 'chitiet_quiz']);
    $router->get('quiz/them', [QuizController::class, 'addForm']);
    //
    $router->get('question', [QuestionController::class, 'index']);
    $router->get('question/tao-moi/{id}', [QuestionController::class, 'addForm']);
    $router->post('question/tao-moi/{id}', [QuestionController::class, 'saveAdd']);
    $router->get('question/cap-nhat/{id}', [QuestionController::class, 'editForm']);
    $router->post('question/cap-nhat/{id}', [QuestionController::class, 'saveEdit']);
    $router->get('question/xoa/{id}/{quiz}', [QuestionController::class, 'remove']);
    // cap nhat question theo logic
    $router->get('question/list-question', [QuestionController::class, 'list_questions']);
    $router->get('question/chi-tiet-question', [QuestionController::class, 'chitiet_question']);
    //
    $router->get('answer', [AnswerController::class, 'index']);
    $router->get('answer/tao-moi/{id}', [AnswerController::class, 'addForm']);
    $router->post('answer/tao-moi/{id}', [AnswerController::class, 'saveAdd']);
    $router->get('answer/cap-nhat', [AnswerController::class, 'editForm']);
    $router->post('answer/luu-cap-nhat', [AnswerController::class, 'saveEdit']);
    $router->get('answer/xoa/{id}/{question}', [AnswerController::class, 'remove']);
    // $router->get('answer/vcl', [AnswerController::class, 'remove']);

    //cap nhat answer theo logic
    $router->get('answer/list-answer', [AnswerController::class, 'list_Answers']);
    $router->get('answer/chi-tiet-answer', [AnswerController::class, 'chitiet_answer']);
    //dung cho sinh vien 
    $router->post('answer/dap-an', [AnswerController::class, 'hienthikq']);

    //
    $router->get('login', [LoginController::class, 'loginForm']);
    $router->post('login/chaymenodi', [LoginController::class, 'checkLogin']);
    $router->get('regist', [LoginController::class, 'registForm']);
    $router->get('admin', [DashboardController::class, 'index']);
    $router->post('dang-ki', [LoginController::class, 'saveRegist']);
    //
    $dispatcher = new Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));

    // Print out the value returned from the dispatched function
    echo $response;
}
