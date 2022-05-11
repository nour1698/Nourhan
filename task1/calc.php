<?php
if ($_GET ) {

    $firstNumber= $_GET["first"];
    $secondNumber= $_GET["second"];
    $oper=$_GET['add'];

    switch($oper){
        case "+":
            $result = $firstNumber + $secondNumber;
            break;
        case"-":
            $result = $firstNumber - $secondNumber;
            break;
        case"*":
            $result = $firstNumber * $secondNumber;
            break;
        case"/":
            $result = $firstNumber / $secondNumber;
            break;
        case"**":
            $result = $firstNumber ** $secondNumber;
            break;
        case"%":
            $result = $firstNumber % $secondNumber;
            break;
    }

}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Clac</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center text-dark">
        <h3 class="text-dark mt-5 mb-3">Calculator </h3>

        <div class="row py-5">
            <div class=" col-6 offset-3">
                <form method="get">
            
                    <div class=" form-group " >
                    
                    <label for="first" >First Number</label>
             
      
                    <input type="number" name="first" id="first"   class="  form-control mt-1 mb-4 ">
                    <label for="second" >Second Number</label>
                     <input type="number" name="second" id="second"  class=" form-control mt-1 mb-4">
                
                        <div class="row  justify-content-between mt-4 mb-5">

                            <button class="col-1 btn btn-dark " name="add" value="+">+</button>   
                            <button class="col-1 btn btn-dark " name="add" value="-">-</button>   
                            <button class="col-1 btn btn-dark " name="add" value="*">x</button>   
                            <button class="col-1 btn btn-dark " name="add" value="/">/</button>   
                            <button class="col-1 btn btn-dark " name="add" value="**">^</button>   
                            <button class="col-1 btn btn-dark " name="add" value="%">%</button>   

                            </div>
                    </div>

                </form>
                <?php

                if (isset($result)) {
                    echo "<div class='alert alert-success'>
                    <strong>$firstNumber</strong> $oper <strong>$secondNumber</strong>=<strong> {$result} </strong>
                   
                    </div>";} 
                ?>

            </div>
        </div>
    </div>


</body>

</html> 