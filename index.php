<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>

    
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto">
              <img src="image/t.png" alt="">
                <h1 class="display-4 fw-normal">VR/AR Medical Treatment</h1>
                <p class="lead fw-normal">We are researching how to use VR technology and brain hijacking as a non-pharmacological treatment</p>
                    <h3 id="#count-down"></h3>
                
            </div>

            <div class="container">
            <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul> 
            </div>
        
        </div>

         

        <div class="container">
    <h3>To enter follow the following            </h3>
        <div class="position-relative text-center">
            <div class="col-md-6 p-lg-6 mx-auto my-6">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3>Please enter the following information</h3>

                <div class="mb-3">
                    <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['firstNameError'] ?></div> <!--recalling errors from form.php from the array-->
                </div>
                
                <div class="mb-3">
                    <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['lastNameError'] ?></div>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email adress" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text error"><?php echo $errors['emailError'] ?></div>
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
  

        <!-- Button trigger modal -->
        <div class = "d-grid gap-2 col-6 mx-auto my-5">
<button  type="button" id = "winner" class="btn btn-primary">
pick winner
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

      <h5 class="modal-title" id="modalLabel">the winner is</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
        <h1 class=" display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
      <?php endforeach; ?>
      </div>
    
    </div>
  </div>
</div>




    
    <?php include './parts/footer.php'; ?>