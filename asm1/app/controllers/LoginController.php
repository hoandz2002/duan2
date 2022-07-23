<?php

namespace App\Controllers;

session_start();

use App\Models\Subject;
use App\Models\User;

class LoginController
{
    public function loginForm()
    {
        include './app/views/account/login_form.php';
    }

    public function checkLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $model = User::where('email', '=', $email)->first();
        $_SESSION['user'] = $model;
        if (password_verify($password, $model->password)) {
            if ($model->role_id == 1) {
                header('Location:' . BASE_URL . 'sv/subject?id=' . $model->id);
                die;    
            }
            if ($model->role_id == 2) {
                header('Location:' . BASE_URL . 'mon-hoc');
                die;
            }
           
        }
         else {
            $_SESSION['error'] = 'Tài khoản hoặc mật khẩu không chính xác!';
            header('Location:' . BASE_URL . 'login');
            die;
        }
    }
    public function registForm()
    {
        include './app/views/account/regist_form.php';
    }

    public function saveRegist()
    {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'avatar' => $_FILES['avatar']['name'],
            'role_id' => 1,
        ];
        $file = $_FILES['avatar'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], './assets/img/' . $file_name);
        $model = new User();
        $model->insert($data);
        header('Location:' . BASE_URL . 'login');
    }

    public function logout()
    {
        if (isset($_SESSION['user']) && $_SESSION['user'] != NULL) {
            unset($_SESSION['user']);
            header('location:' . BASE_URL . 'dang-nhap');
        }
    }
}
