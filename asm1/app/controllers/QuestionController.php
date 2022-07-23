<?php 
namespace App\Controllers;
use App\Models\Question;
use App\Models\Quiz;

class QuestionController{
    public function show_question(){
        $id = $_GET['id'];     
        $questions = Question::where('quiz_id', '=',$id)->get();
        include 'we16303-php2/asm1/app/views/lam-bai/index.php';
    }

    //
    
    public function index(){
        $questions = Question::all();

        // include_once "./app/views/questions/index.php";
        return view('questions.index',[
            'questions'=>$questions
        ]);
    }
   
    public function addForm($id){
        $quiz=Quiz::where('id','=',$id)->first();
        // include_once "./app/views/questions/add-form.php";
        return view('questions.add-form',[
                'quiz' => $quiz
        ]);
    }

    public function editForm($id){
        // $id = $_GET['id'];
        $model = Question::where('id', '=', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'questions');
            die;
        }
        // include_once './app/views/questions/edit-form.php';
        return view('questions.edit-form',[
            'model' => $model
        ]);
    }

    public function saveAdd($id){
        $model = new Question();
       
           $model->name = $_POST['name'];
           $model->quiz_id = $_POST['quiz_id'];

        
        $model->save();
        header('location: ' . BASE_URL . 'question/list-question?quiz_id='.$_POST['quiz_id']);
        die;
    }

    public function saveEdit($id){
        // $id = $_GET['id'];
        $model = Question::where('id', '=', $id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'question/list-question?quiz_id='.$id);
            die;
        }

       
           $model->name = $_POST['name'];
       
        $model->save();
        header('location: ' . BASE_URL . 'question/list-question?quiz_id='.$id);
        die;
    }

    public function remove($id,$quiz){

        // $id = $_GET['id'];
        Question::destroy($id);
        header('location: ' . BASE_URL . 'question/list-question?quiz_id='.$quiz);
        die;
    }
    public function list_questions(){
       // $subject_id = $_GET['subject_id'];
       $quiz = $_GET['quiz_id'];

       $questions = Question::where('quiz_id', '=', $quiz)->get();
       // include_once "./app/views/question/index.php";
       return view('questions.list-question',[
           'quiz' => $quiz,
          'questions' => $questions
       ]);
    }
    public function chitiet_question(){
        $question_id=$_GET['question_id'];
        $questions=Question::where('question_id','=',$question_id)->get_checkid($question_id);
        include './app/views/questions/question-chitiet.php';
    }
}
?>