<?php


    $signup = false;

    //print_r($_POST['email']);

    if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = user::signup($username, $email, $password);
        $signup = true;
    }
    
    

    if ($signup) {
        if ($result) {?>
<main class="container">
	<h1>Signup Success</h1>
	<p class="lead">Now you can login from <a href="/bootstrap/login.php">here</a>.
	</p>

</main>
<?php
        } else {
            ?>
<main class="container">
	<h1>Signup Failed</h1>
	<p class="lead">Now you can login from <a href="../login.php">here</a>.
	</p>

</main>
<?php
        }
    } else {
        ?>

<body class="text-center" style="margin-left: 500px;">
	<main class="form-signin">
		<form method="post">

			<img class="mb-4"
				src="https://cdn.bitrix24.com/b11752903/landing/12c/12c17c85e9f677ab97be195f3a596221/1_1x.png" alt=""
				width="72" height="57" style="width: 100px;">

			<h1 class="h3 mb-3 fw-normal">Please sign up</h1>
			<div class="form-floating">
				<input name='username' type="text" class="form-control" id="floatingInput">
				<label for="floatingInput">Name</label>
			</div>
			<div class="form-floating">
				<input name="email" type="email" class="form-control" id="floatingInput">
				<label for="floatingInput">Email address</label>
			</div>
			<div class="form-floating">
				<input name="password" type="password" class="form-control" id="floatingPassword">
				<label for="floatingPassword">Password</label>
			</div>

			<div class="checkbox mb-3">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
			Click Here to <a href="/bootstrap/login.php">Login</a>

		</form>
	</main>
	<?php
    }
