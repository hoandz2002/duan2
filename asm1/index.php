<?php
require_once './commons/helpers.php';
require_once './vendor/autoload.php';
require_once './commons/utils.php';
require_once './commons/routing.php';

// use App\Controllers\AnswerController;
// use App\Controllers\SubjectController;
// use App\Controllers\QuizController;
// use App\Controllers\LoginController;
// use App\Controllers\QuestionController;
// use App\Controllers\DashboardController;


// use App\Models\Answer;
// use App\Models\Question;
// use App\Models\Quiz;

$url = isset($_GET['url']) ? $_GET['url'] : "/";
applyRouting($url);
// $url mong muốn của người gửi request
// switch ($url) {
//     case 'login':
//         $ctr = new LoginController();
//         $ctr->loginForm();
//         break;
//     case 'dang-ky':
//         $ctr = new LoginController();
//         $ctr->saveRegist();
//         break;
//     case 'regist':
//         $ctr = new LoginController();
//         $ctr->registForm();
//         break;
//     case 'dang-nhap':
//         $crt = new LoginController();
//         $crt->checkLogin();
//         break;
//     case 'admin':
//         $ctr = new DashboardController();
//         $ctr->index();
//         case 'admin/css-index':
//             $ctr = new DashboardController();
//             $ctr->index();
//         break;
//         // http://localhost/we16304-php2/asm1/mon-hoc
//     case 'mon-hoc':
//         $ctr = new SubjectController();
//         $ctr->index();
//         break;
//     case 'mon-hoc/tao-moi':
//         $ctr = new SubjectController();
//         $ctr->addForm();
//         break;
//     case 'mon-hoc/luu-tao-moi':
//         $ctr = new SubjectController();
//         $ctr->saveAdd();
//         break;
//     case 'mon-hoc/cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->editForm();
//         break;
//     case 'mon-hoc/luu-cap-nhat':
//         $ctr = new SubjectController();
//         $ctr->saveEdit();
//         break;
//     case 'mon-hoc/xoa':
//         $ctr = new SubjectController();
//         $ctr->remove();
//         break;
//     case 'mon-hoc/chi-tiet':
//         $ctr = new SubjectController();
//         $ctr->detail_subject();
//         break;
//         //
//     case 'quiz':
//         $ctr = new QuizController();
//         $ctr->index();
//         break;
//     case 'quiz/tao-moi':
//         $ctr = new QuizController();
//         $ctr->addForm();
//         break;
//     case 'quiz/luu-tao-moi':
//         $ctr = new QuizController();
//         $ctr->saveAdd();
//         break;
//     case 'quiz/cap-nhat':
//         $ctr = new QuizController();
//         $ctr->editForm();
//         break;
//     case 'quiz/luu-cap-nhat':
//         $ctr = new QuizController();
//         $ctr->saveEdit();
//         break;
//     case 'quiz/xoa':
//         $ctr = new QuizController();
//         $ctr->remove();
//         break;
//     case 'quiz/danh-sach':
//         $ctr = new QuizController();
//         $ctr->listQuiz();
//         break;
//     case 'answer':
//         $ctr = new AnswerController();
//         $ctr->index();
//         break;
//     case 'quiz/lam-bai':
//         $ctr = new QuizController();
//         $ctr->startQuiz();
//         break;
//     case 'question':
//         $ctr = new QuestionController();
//         $ctr->index();
//         break;
//     case 'question/tao-moi':
//         $ctr = new QuestionController();
//         $ctr->addForm();
//         break;
//     case 'question/luu-tao-moi':
//         $ctr = new QuestionController();
//         $ctr->saveAdd();
//         break;
//     case 'question/cap-nhat';
//         $ctr = new QuestionController();
//         $ctr->editForm();
//         break;
//     case 'question/luu-cap-nhat';
//         $ctr = new QuestionController();
//         $ctr->saveEdit();
//         break;
//     case 'question/xoa';
//         $ctr = new QuestionController();
//         $ctr->remove();
//         break;
//     case 'answer':
//         $ctr = new AnswerController();
//         $ctr->index();
//         break;
//     case 'answer/tao-moi':
//         $ctr = new AnswerController();
//         $ctr->addForm();
//         break;
//     case 'answer/luu-tao-moi':
//         $ctr = new AnswerController();
//         $ctr->saveAdd();
//         break;
//     case 'answer/cap-nhat';
//         $ctr = new AnswerController();
//         $ctr->editForm();
//         break;
//     case 'answer/luu-cap-nhat';
//         $ctr = new AnswerController();
//         $ctr->saveEdit();
//         break;
//     case 'answer/xoa';
//         $ctr = new AnswerController();
//         $ctr->remove();
//         break;
//         //cap nhat quiz theo logic
//     case 'quiz/chi-tiet-quiz':
//         $ctr = new QuizController();
//         $ctr->chitiet_quiz();
//         break;
//         case 'quiz/them':
//             $ctr = new QuizController();
//             $ctr->addForm();
//             break;
//         //cap nhat question theo logic
//     case 'question/list-question':
//         $ctr = new QuestionController();
//         $ctr->list_questions();
//         break;
//     case 'question/chi-tiet-question';
//         $ctr = new QuestionController();
//         $ctr->chitiet_question();
//         break;
//         //cap nhat Answer theo logic
//         case 'answer/list-answer':
//             $ctr = new AnswerController();
//             $ctr->list_Answers();
//             break;
//         case 'answer/chi-tiet-answer';
//             $ctr = new AnswerController();
//             $ctr->chitiet_answer();
//             break;
//             //dung cho giao dien sinh vien
//             case 'sv/subject';
//             $ctr = new SubjectController();
//             $ctr->index_sv();
//             break;
//             case 'sv/subject-chitiet';
//             $ctr = new SubjectController();
//             $ctr->subject_chitiet();
//             break;
//             case 'sv/list-quiz';
//             $ctr = new QuizController();
//             $ctr->sv_list_quiz();
//             break;
//             case 'answer/dap-an';
//             $ctr = new AnswerController();
//             $ctr->hienthikq();
//             break;
//     default:
//         echo "Đường dẫn bạn đang truy cập chưa được cho phép";
//         break;
// }
