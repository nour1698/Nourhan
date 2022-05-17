<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validation
        $user = $_POST['user'];
        $loanAmount = $_POST['loanAmount'];
        $years = $_POST['years'];
        $errors = [];

        if (empty($user)) {
            $errors['user'] = "<div class='text-danger font-weight-bold '> User Name Is Required </div>";
        }
        if (empty($loanAmount)) {
            $errors['loanAmount'] = "<div class='text-danger font-weight-bold my-2'> Loan Amount Is Required </div>";
        }
        if (empty($years)) {
            $errors['years'] = "<div class='text-danger font-weight-bold my-2'> Number Of Years Is Required </div>";
        } if($years <= 0 || $loanAmount <= 0){
            $errors['validNumber']="<div class='alert alert-danger text-center'>
            Please Enter Valid Value</div>";
        }
        if (empty($errors)) {

    

   
    $monthNum = $years * 12;

    if($years <= 3){
        $interestRate= $years * 0.10 * $loanAmount;
        $loanAfterInterest= $interestRate + $loanAmount;
        $monthly= $loanAfterInterest / $monthNum;

    }else{
        $interestRate= $years * 0.15 * $loanAmount;
        $loanAfterInterest= $interestRate + $loanAmount;
        $monthly= $loanAfterInterest / $monthNum;
    }
    $table= "<table class='table table-light table-striped my-2'>
    <thead>
      <tr>
        <th scope='col'>User Name</th>
        <th scope='col'>Interest Rate</th>
        <th scope='col'>Loan After Interest</th>
        <th scope='col'>Monthly</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope='row'>$user</th>
        <td>$interestRate EGP</td>
        <td>$loanAfterInterest EGP</td>
        <td>$monthly EGP</td>
      </tr>";
}
}


?>


<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../BS5-Template/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="../BS5-Template/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    body{
        background:url(p1.jpg);
        background-size:cover;
        background-repeat:no-repeat;
    }
</style>
</head>

<body>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-light text-center my-4">
                <h2>Bank</h2>
            </div>
            <div class="col-6 offset-3 bg-info text-light rounded-top py-3 mt-5">
                <form method="POST">
                    <div class="form-group text-center">
                        <label for="user">User Name</label>
                        <input type="text" name="user" value="<?= $user ??  "" ?>"  id="" class="form-control  text-center " placeholder="" aria-describedby="helpId">
                        <?= $errors['user'] ?? "" ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="loanAmount">loan amount</label>
                        <input type="number" name="loanAmount" value="<?= $loanAmount ??  "" ?>" id="" class="form-control  text-center" placeholder="" aria-describedby="helpId">
                        <?= $errors['loanAmount'] ?? "" ?>

                    </div>
                    <div class="form-group text-center">
                        <label for="years">Years Number</label>
                        <input type="number" name="years" value="<?= $years ??  "" ?>" id="" class="form-control  text-center" placeholder="" aria-describedby="helpId">
                        <?= $errors['years'] ?? "" ?>

                    </div>
                    <button class="btn btn-outline-light form-control my-3"> Calculate</button>
                </form>
                <?= $errors['validNumber'] ?? "" ?>
                <?= isset($table) ? $table : "" ?>




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
