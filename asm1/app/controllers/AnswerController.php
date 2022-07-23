<?php 
namespace App\Controllers;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class AnswerController{
    public function index(){
        $answer=Answer::all();

        // include_once "./app/views/tra-loi/index.php";
        return view('tra-loi.index',[
            'answer' => $answer
        ]);
    }
   
    public function addForm($id){
        $questions=Question::where('id','=',$id);
        // include_once "./app/views/tra-loi/add-form.php";
        return view('tra-loi.add-form', [
            'questions' => $questions,
            'id' =>$id
        ]);
    }

    public function editForm(){
        $id = $_GET['question_id'];
        $model = Answer::where('id', '=', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'answer');
            die;
        }
        // include_once './app/views/tra-loi/edit-form.php';
        return view('tra-loi.edit-form', [
            'model' => $model
        ]);
    }

    public function saveAdd($id){
        $model = new Answer();
        // $data = [
           $model->content = $_POST ['content'];
           $model->question_id = $_POST['question_id'];
           $model->is_correct = $_POST['is_correct'];

        // ];
        $model->save();
        header('location: ' . BASE_URL . 'answer/list-answer?question_id=' .$_POST['question_id']);
        die;
    }

    public function saveEdit(){
        $id = $_GET['question_id'];
        $model = Answer::where('id', '=', $id)->first();

        if(!$model){
            header('location: ' . BASE_URL . 'answer');
            die;
        }

        // $data = [
           $model->content = $_POST['content'];
           $model->question_id = $_POST['question_id'];
           $model->is_correct = $_POST['is_correct'];
            
        // ];
        $model->save();
        header('location: ' . BASE_URL . 'answer/list-answer?question_id=' .$_POST['question_id']);
        die;
    }

    public function remove($id,$question){
        // $id = $_GET['id'];
        Answer::destroy($id);
        header('location: ' . BASE_URL . 'answer/list-answer?question_id=' .$question);
        die;
    }
    public function list_Answers()
    {
        $question_id = $_GET['question_id'];
        $question = Question::where('id', '=', $question_id)->first();
        $answers = Answer::where('question_id', '=', $question->id)->get();
        // include_once "./app/views/answer/index.php";
        return view('tra-loi.answer-list', [
            'question_id'=> $question_id,
            'question' => $question,
            'answers'=> $answers
        ]);
    }
    public function chitiet_answer()
    {
        $id=$_GET['answer_id'];
        $answer=Answer::where('id','=',$id)->get_checkid($id);
        include './app/views/tra-loi/answer-chitiet.php';
    }
    //
    public function answers($data, $quiz_id)
    {
        $right = 0;
        $wrong = 0;
        $no_answer = 0;
        
        $questions = Question::where('quiz_id', '=', $quiz_id)->get();
        foreach ($questions as $value) {
            if (isset($data[$value->id])) {
                if ($value->answer_id  == $data[$value->id]) {
                    $right++;
                } else if ($value->answer_id != $data[$value->id] && $data[$value->id] != NULL) {
                    $wrong++;
                }
            } else {
                $no_answer++;
            }
        }
        $array = [];
        $array['right'] = $right;
        $array['wrong'] = $wrong;
        $array['no_answer'] = $no_answer;
        return $array;
    }

    // public function answers($quiz_id,$question_id)
    // {
    
    //     $right = 0;
    //     $wrong = 0;
    //     $no_answer = 0;
        
    //     $questions = Question::where('quiz_id', '=', $quiz_id)->get();
    //     $answer = Answer::where('question_id', '=', $question_id)->get();

    //     foreach ($questions as $value) {
    //        foreach ($answer as $cmm) {
    //         if (isset($value->id)) {
    //             if ($cmm->is_correct  == 0) {
    //                 $right++;
    //             } else if ($cmm->is_correct == 1) {
    //                 $wrong++;
    //             }
    //             else if (count($cmm->is_correct) == 0) {
    //                 $wrong++;
    //             }
    //         }
    //        }
    //     }
    //     $array = [];
    //     $array['right'] = $right;
    //     $array['wrong'] = $wrong;
    //     $array['no_answer'] = $no_answer;
    //     return $array;
    // }

    public function hienthikq()
    {
        $quiz_id = $_GET['quiz_id'];
        $subject_id = $_GET['id'];
        include './app/views/views_sv/dap-an.php';
    }
}
?>