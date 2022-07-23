<?php
// session_start();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form method="POST" action="<?= BASE_URL . 'login/chaymenodi' ?>">
    <h3>Login</h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" name="email" placeholder="Nhập Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Nhập Mật khẩu" class="form-control" id="exampleInputPassword1">
    </div>
    <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
    <div>
        <p style="color: red;">
            <?php if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            } ?>
        </p>
        <a href="">Quên mật khẩu?</a> <br>
        <a href="<?= BASE_URL . 'regist' ?>">Đăng kí</a>
    </div>
</form>