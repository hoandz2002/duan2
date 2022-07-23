<?php
namespace App\Controllers;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
class SubjectController{
    public function index(){
        $subjects = Subject::all();

        // include_once "./app/views/mon-hoc/index.php";
        return view('mon-hoc.index',[
            'subjects' => $subjects
        ]);
    }
    public function index_sv(){
        $subjects = Subject::all();

        // include_once "./app/views/views_sv/subject.php";
        return view('views_sv.subject',[
            'subjects' => $subjects
        ]);
    }
    public function detail_subject(){
        $subject_id = $_GET['id'];
        $subject = Subject::where('id', '=', $subject_id)->first();
        
        
        include_once "./app/views/mon-hoc/subjects-detail.php";
    }
    public function subject_chitiet(){
        $subject_id = $_GET['id'];
        $subject = Subject::where('id', '=', $subject_id)->first();
        
        
        include_once "./app/views/views_sv/subject-chitiet.php";
    }
    public function addForm(){
        // include_once "./app/views/mon-hoc/add-form.blade.php";
        return view('mon-hoc.add-form', [
        ]);
    }
    public function editForm($id)
    {
        $model = Subject::find($id);
        // $teachers = User::where('role_id', '=', 2)->get();
        // //     $model = Subject::where('id', '=', $id)->first();
        // $teacher = User::where('id', '=', $model->author_id)->first();
        // include_once "./app/views/mon-hoc/edit-form.php";
        return view('mon-hoc.edit-form', [
            'model' => $model,
            // 'teacher' => $teacher,
            // 'teachers' => $teachers,
        ]);
    }

    public function saveEdit($id)
    {
        $model = Subject::find($id);
        $file = $_FILES['img'];
        $file_name = $file['name'];
        if (!$model) {
            header('location: ' . BASE_URL . 'mon-hoc');
            die;
        }
        $file = $_FILES['img'];
        $file_name = $file['name'];
        if (empty($file_name)) {
            $file_name = $model->img;
        } else {
            move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);
        }
        $model->name = $_POST['name'];
        $model->img = $_FILES['img']['name'];
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    // public function editForm(){
    //     $id = $_GET['id'];
    //     $model = Subject::where('id', '=', $id)->first();
    //     if(!$model){
    //         header('location: ' . BASE_URL . 'mon-hoc');
    //         die;
    //     }
    //     // include_once './app/views/mon-hoc/edit-form.blade.php';
    //     return view('mon-hoc.edit-form',[

    //     ]);
    // }

    public function saveAdd()
    {
        $model = new Subject();
        $model->name = $_POST['name'];
        $model->img = $_FILES['img']['name'];
        $model->author_id = $_POST['author_id'];
        $file = $_FILES['img'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);
        $model->save();
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }

    // public function saveEdit(){
    //     $id = $_GET['id'];
    //     $model = Subject::where('id', '=', $id)->first();
    //     if(!$model){
    //         header('location: ' . BASE_URL . 'mon-hoc');
    //         die;
    //     }

    //     $data = [
    //         'name' => $_POST['name'],
    //         'img' => $_FILES['img']['name']

    //     ];
    //     $file = $_FILES['img'];
    //     $file_name = $file['name'];
    //     move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);

    //     $model->update($data);
    //     header('location: ' . BASE_URL . 'mon-hoc');
    //     die;
    // }

    public function remove(){
        $id = $_GET['id'];
        Subject::destroy($id);
        header('location: ' . BASE_URL . 'mon-hoc');
        die;
    }
    public function test($id,$name){
       var_dump($id . '</br>'.$name);
    }
   
 
}
?>