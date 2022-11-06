<?php 
include './inc/conn.php';
include './inc/form.php';



$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);




?>




<?php include_once './parts/header.php'; ?>

    

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
      <img src="images/11.jpg" alt="">
      <h1 class="display-4 fw-normal">welcome</h1>
      <p class="lead fw-normal">rakan web</p>
      <h3 id="countdown"></h3>
    </div>

    <div class="container">
      <h3>to win app free</h3>
      <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
    <li class="list-group-item">A fourth item</li>
    <li class="list-group-item">And a fifth one</li>
  </ul>
  </div>



<div class="container">
<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF']  ?>" method="POST">
    <h3>please enter your info</h3>
  <div class="mb-3">
    <label for="firstname" class="form-label">firstname</label>
    <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname ?>" >
    <div class="form-text error"><?php echo $errors['firstnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastname" class="form-label">lastname</label>
    <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo $lastname ?>">
    <div class="form-text error"><?php echo $errors['lastnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>" >
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>


<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>


<div class="d-grid gap-2 col-6 mx-auto my-5 ">
<button type="button" id="winner" class="btn btn-primary">
choose the winner
</button>
</div>
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">the winner of game</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-5 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']) ?></h1>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>







<div id="cards" class="row mb-5 pd-5">


<?php foreach($users as $user): ?>

  <div class="col-sm-6">
  <div class="card my-2 bg-light">
  <div class="card-body">
     <h5 class="card-title"></h5>
     <p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
      </div>
    </div>
  </div>
     <?php endforeach; ?>
</div>


<?php include_once './parts/footer.php'; ?>