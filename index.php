<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'; ?>
    
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">VR/AR Medical Treatment</h1>
                <p class="lead fw-normal">We are researching how to use VR technology and brain hijacking as a non-pharmacological treatment</p>
                <a class="btn btn-outline-secondary" href="#">Find out more!</a>
            </div>
        </div>

        <!-- <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul> -->

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
    
    <div class="row mb-5 pb-5">
        <?php foreach($users as $user) : ?>
            <div class="col-m-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">    
                    <h5 class="card-title"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email'])?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include './parts/footer.php'; ?>