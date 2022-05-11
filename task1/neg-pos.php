<?php
if ($_GET ) {
    $number = $_GET['number'] ;

    if ( $number > 0) {
        $sign = "Positive";
    } elseif( $number < 0){
        $sign="Negative";
    }else{
        $message="<div class='alert alert-danger'> This Is <strong>Zero</strong> </div>";
    }

}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Neg-Pos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h4 class="mt-5 mb-3">Check Negative or Positive Number </h4>

        <div class="row py-3">
            <div class="col-4 offset-4">
                <form method="get">
                    <div>

                        <label for="number mt-2">Add Your Number To Check</label>
                        <input type="number" name="number" id="number" class=" mt-1 mb-3">
                    </div>

                    <button class="btn btn-success w-50 mb-5 mt-2">Check</button>
                </form>
                <?php

                if (isset($sign)) {
                    echo "<div>
                        Your Number Is <strong> $sign</strong>
                
                    </div>";} elseif(isset($message)){

                        echo $message;
                    }
                ?>

            </div>
        </div>
    </div>








</body>

</html>