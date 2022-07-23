<?php

namespace App\Controllers;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class QuizController
{
    public function index()
    {
        $subjects = Subject::all();
        $subjectId = isset($_GET['subject_id']) ? $_GET['subject_id'] : $subjects[0]->id;
        $quizs = Quiz::where('subject_id', $subjectId)->get();

        return view('quiz.index', [
            'subjects' => $subjects,
            'subjectId' => $subjectId,
            'quizs' => $quizs
        ]);
    }

    // public function addForm()
    // {
    //     include_once "./app/views/quiz/add-form.php";
    // }

    public function editForm($id)
    {
        // $id = $_GET['id'];
        $model = Quiz::where('id', '=', $id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'quiz');
            die;
        }
        // include_once './app/views/quiz/edit-form.php';
        return view('quiz.edit-form', [
            'model' => $model,
        ]);
    }

    

    public function addForm($id)
    {
        // $id = $_GET['subject_id'];
        $subject = Subject::where('id', '=', $id)->first();
        // include_once "./app/views/quiz/add-form.php";
        return view('quiz.add-form', [
            'subject' => $subject
        ]);
    }


    public function saveAdd($id)
    {
        $model = new Quiz();
        $model->name = $_POST['name'];
        $model->subject_id = $_POST['subject_id'];
        $model->duration_minutes = $_POST['duration_minutes'];
        $model->start_time = $_POST['start_time'];
        $model->end_time = $_POST['end_time'];
        $model->status = $_POST['status'];
        $model->save();
        header('location: ' . BASE_URL . 'quiz?subject_id=' . $model->subject_id);
        die;
    }

    public function saveEdit($id)
    {
        // $id = $_GET['id'];
        $model = Quiz::where('id', '=', $id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'quiz');
            die;
        }

        $model->name = $_POST['name'];
        $model->subject_id = $_POST['subject_id'];
        $model->duration_minutes = $_POST['duration_minutes'];
        $model->start_time = $_POST['start_time'];
        $model->end_time = $_POST['end_time'];
        $model->img = $_FILES['img']['name'];
        $model->is_shuffle = $_POST['is_shuffle'];
        $file = $_FILES['img'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);

        $model->save();
        header('location: ' . BASE_URL . 'quiz');
        die;
    }
    public function update_befor()
    {
        $id = $_GET['id'];
        $model = Quiz::where('id', '=', $id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'quiz');
            die;
        }

        $data = [
            'name' => $_POST['name'],
            'subject_id' => $_POST['subject_id'],
            'duration_minutes' => $_POST['duration_minutes'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time'],
            'img' => $_FILES['img']['name'],
            'is_shuffle' => $_POST['is_shuffle'],
        ];
        $file = $_FILES['img'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);
        $model->update($data);
        header('location: ' . BASE_URL . 'quiz/chi-tiet-quiz');
        die;
    }
    public function remove($id,$subject)
    {
        // $id = $_GET['id'];
        Quiz::destroy($id);
        header('location: ' . BASE_URL . 'quiz?subject_id=' .$subject);
        die;
    }

    public function listQuiz()
    {
        $id = $_GET['id'];
        $subjects = Subject::all();
        $quiz = Quiz::where('subject_id', '=', $id)->get();
        return view('quiz.list-quiz', [
            'quiz' => $quiz
        ]);
    }
    public function sv_list_quiz()
    {
        $id = $_GET['id'];
        $quiz = Quiz::where('subject_id', '=', $id)->get();
        // include './app/views/views_sv/list-quiz.php';
        return view('views_sv.list-quiz',[
            'quiz'=>$quiz,

        ]);
    }
    public function quiz_them()
    {
        $id = $_GET['id'];
        $quiz = Quiz::where('subject_id', '=', $id)->first();
        // include './app/views/quiz/tao-moi.php';
        return view('quiz.tao-moi', [
            'quiz' => $quiz
        ]);
    }
    public function startQuiz($id)
    {
        // $quiz_id = $_GET['quiz_id'];
        $quiz = Quiz::where('id', '=', $id)->first();
        $questions = Question::where('quiz_id', '=', $id)->get();
        // include './app/views/quiz/quiz-detail.php';
        return view('quiz.quiz-detail',[
            'quiz'=>$quiz,
            'questions'=>$questions

        ]);
    }
    public function chitiet_quiz($id)
    {
        // $quiz_id = $_GET['quiz_id'];
        // $quiz = Quiz::where('quiz_id', '=', $quiz_id)->get_checkid($quiz_id);
        // include './app/views/quiz/chi-tiet.php';
        $model = Quiz::find($id);
        return view('quiz.chi-tiet', [
            'model' => $model,
            // 'teacher' => $teacher,
            // 'teachers' => $teachers,
        ]);
    }
}
