<?php
session_start();
if ($_POST) {
    $phoneNumber = $_POST['phoneNumber'];
    $errors = [];

    // Phone Number Validation

    if (empty($phoneNumber)) {
        $errors['phoneNumber'] = "<div class='text-danger font-weight-bold '> Your Phone Number Is Required </div>";
    }elseif ($phoneNumber <= 999999999){
        $errors['phoneNumber'] = "<div class='text-danger font-weight-bold '> Your Phone Number Must Be 11 Digits Like : 01124479334 </div>";
    }


    if (empty($errors)) {
        $_SESSION['phoneNumber'] = $phoneNumber;
        header('location:review.php');
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <title>Number</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link href="../BS5-Template/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="../BS5-Template/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    body{
        background:url('doctor.jpg');
        background-size:cover;
        background-repeat:no-repeat;
    }

</style>

</head>

<body>

    <div class="container py-4 my-4 text-center mt-5 ">
        <h1 class=" my-2 text-light "> Hospital</h1>

        <div class="row ">
            <div class="col-6 offset-3 my-3 mt-5">
                <form method="POST">
                    <div class="input-group mb-3 ">
                        <span class="input-group-text" id="basic-addon1">Phone Number</span>
                        <input type="number" class="form-control" name="phoneNumber">
                    </div>
                    <?= $errors['phoneNumber'] ?? "" ?>

                    <button class="btn btn-outline-light w-25  my-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../BS5-Template/css/js/bootstrap.bundle.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>