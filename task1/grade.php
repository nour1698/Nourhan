<?php
if ($_GET) {
    $phy= $_GET['Physics'] ;
    $che= $_GET['Chemistry'] ;
    $bio= $_GET['Biology'] ;
    $math= $_GET['Math'] ;
    $com= $_GET['Computer'];


    $add= $phy+ $che+ $bio+ $math +$com;
    $per=$add*100 /500;
    if ($per >= 90){
        $grade = "A" ;
    }elseif ($per >= 80){
        $grade = "B";
    } elseif ($per >= 70){
        $grade = "C";
    }elseif ($per >= 60 ){
        $grade = "D";
    }elseif ($per >= 40 ){
        $grade = "E";
    }elseif($per >= 0){ 
        $grade = "F";
    }elseif($per < 0){ 
       $message= "<div class='alert alert-danger'>
       Add Real Values Please!</div> ";}
}



?>
<!doctype html>
<html lang="en">

<head>
    <title>Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h3 class=" mt-5 mb-3">Enter Your Grade</h3>

        <div class="rowpy-5">
            <div class=" col-8 offset-2">
                <form method="get">
                    <div  >
                        <div class="labels row justify-content-between">
                        <label for="Physics" class="col-2 form-label">Physics</label>
                        <label for="Chemistry" class="col-2 form-label">Chemistry</label>
                        <label for="Biology" class="col-2 form-label">Biology</label>
                        <label for="Math" class="col-2 form-label">Math</label>
                        <label for="Computer" class="col-2 form-label">Computer</label>

                        </div>
                        <div class="row  justify-content-between">
                        <input type="number"  name="Physics" id="Physics" class="col-2 form-control text-center  mb-4">
                        <input type="number"  name="Chemistry" id="Chemistry" class="col-2 form-control text-center  mb-4">
                        <input type="number"  name="Biology" id="Biology" class="col-2 form-control text-center mb-4">
                        <input type="number"  name="Math" id="Math" class="col-2 form-control text-center mb-4">
                        <input type="number"  name="Computer" id="Computer" class="col-2 form-control text-center mb-4">
                        </div>
                    </div>

                    <button class="btn btn-success w-50 mb-5 mt-2">Result</button>
                </form>
                <?php

                if (isset($add,$grade)) {
                    echo "<div >
              
                    Your Total Grade Is <br>  <strong>{$add}/500</strong>  <br>
                    Your Percentage Is <br>  <strong>{$per}%</strong>  <br>
                    Your Grade Is <br>  <strong>{$grade}</strong>  <br>
                    </div>";

                }elseif(isset($message)){
                    echo $message;
                    }
                ?>

            </div>
        </div>
    </div>



</html> 