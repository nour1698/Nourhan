<?php
if ($_GET ) {
    $number = $_GET['number'] ;
    $power= $_GET['power'];
    $root=1/$power;
    $result=$number**$root;

}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Root</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h3 class=" mt-5 mb-3">Check Negative or Positive Number </h3>

        <div class="rowpy-5">
            <div class="col-4 offset-4">
                <form method="get">
                    <div clas='form-group' >

                        <label for="number mt-2">Add Number</label>
                        <input type="number" name="number" id="number" class="form-control mt-1 mb-4">
                        <label for="power mt-2">Add Root Number</label>
                        <input type="number" name="power" id="power" class="form-control mt-1 mb-3">
                    </div>

                    <button class="btn btn-success w-50 mb-5 mt-2">Check</button>
                </form>
                <?php

                if (isset($number,$power)) {
                    echo "<div>
                    The Root <strong>{$power}</strong>  Of  Number <strong>{$number}</strong> Is   <br><strong> {$result} </strong>
                
                    </div>";}
                ?>

            </div>
        </div>
    </div>

</body>

</html> 