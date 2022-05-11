<?php

    if ($_GET) {

        $number1 = $_GET['number1'];
        $number2 = $_GET['number2'];
        $number3 = $_GET['number3'];

        if ($number1 >= $number2  && $number1 >= $number3) {
            $max = $number1;
        } elseif ($number2 >= $number1 && $number2 >= $number3) {
            $max = $number2;
        } elseif ($number3 >= $number1 && $number3 >= $number2) {
            $max = $number3;
        }

        if ($number1 <= $number2 && $number1 <= $number3) {
            $mini = $number1;
        } elseif ($number2 <= $number1 && $number2 <= $number3) {
            $mini = $number2;
        } elseif ($number3 <= $number1 && $number3 <= $number2) {
            $mini = $number3;
        }


}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Max</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h3 class=" mt-5 mb-3">Calculate Max & Mini Value </h3>

        <div class="row  py-4">
            <div class="col-4 offset-4">
                <form method="get">
                <div class="form-group ">
                        <label for="Number1 ">The First Number</label>
                        <input type="number" name="number1" id="Number1" class="form-control mt-1 mb-3">

                        <label for="Number2 mt-2">The Second Number</label>
                        <input type="number" name="number2" id="Number2" class="form-control  mt-1 mb-3">

                        <label for="Number3 mt-2">The Third Number</label>
                        <input type="number" name="number3" id="Number3" class="form-control  mt-1 mb-3">
                    <div>
                   

                    <button class="btn btn-success w-50 mb-5 mt-3">Calculate</button>
                </form>
                <?php

                if (isset($max, $mini)) {
                    echo
                    " <div class='alert alert-dark'>
            
            The Max Number is <strong>= $max </strong><br>
            The Minimum Number is <strong>= $mini </strong>
            
            </div>";
                } elseif (isset($message)) {
                    echo $message;
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html> 