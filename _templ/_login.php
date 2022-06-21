<?php


if (isset($_POST['email']) and $_POST['password'] and !empty($_POST['password'])) {
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $result = user::login($email, $pass);
    // print("result=$result");
}
    if (isset($result) == 1) {
        include __DIR__."/../collegeweb/DepartmentWebsite.php";
    } else {
        ?>

<body class="text-center" style="margin-left: 500px;">

  <main class="form-signin">
    <form method="post">
      <img class="mb-4" src="https://cdn.bitrix24.com/b11752903/landing/12c/12c17c85e9f677ab97be195f3a596221/1_1x.png"
        alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button><br>
      Click Here to <a href="/bootstrap/signup.php">Signup</a>
    </form>
  </main>
  <?php
    }
