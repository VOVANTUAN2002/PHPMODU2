<?php
session_start();
$json_users = file_get_contents('uuser.json');
if ($json_users) {
  $users = json_decode($json_users);
} else {
  $users = [];
}
$errors = [];
// echo "<pre>";
// print_r($users);
// die();
$errors = [];
$alert = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  /*
        Array
      (
          [email] => add@gmail.com
          [password] => 12345
      ) 
   */
  $email = $_REQUEST['email'];
  $password = $_REQUEST['password'];

  // if (!$username ||  !$email ) {
  //   echo $username = "vui lòng bạn nhập Username";
  //   echo $email    = "vui lòng nhập email";
  // } else {
  //   echo "Đăng nhập thành công !";
  // }

  $can_do = false;
  if (count($errors) === 0) {
    foreach ($users as $user) {
      // echo $user->email. ' _ ' . $email. '<br>';
      // echo $user->password. ' _ ' . $password. '<br>';
      // echo '<hr>';
      if ($user->email == $email || $user->password == $password) {
        //xu ly đăng nhập
        $_SESSION['user'] = $user;
        $can_do = true;
        // echo '<pre>';
        // print_r($_SESSION['user']);
        // echo '</pre>';

        header("Location: user.php");
      } else {
        header("Location: trangtrolai.php");
      }
    }
  }
}

?>
<?php include 'layout/header.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-1g-12">
      <h3 class="text-center">login</h3>
      <?php if ($alert) : ?>
        <div class="alert alert-danger" role="alert">
          <?= "Please enter the correct password for the account you registered !" . $alert; ?>
        </div>
      <?php endif; ?>
      <form action="" method="POST">
        <div class="form-group">
          <label>Email</label>
          <input type="emali" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small class="form-text text-gender"></small>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <small class="form-text text-gender"></small>
        </div>
        <button type="submit" class="btn btn-info">login</button>
      </form>

      <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      </body>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">