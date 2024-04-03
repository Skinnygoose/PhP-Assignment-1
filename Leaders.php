<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaders-Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="diplay-5 mt-3 mb-5">
                    Leaders

                </h1>
            </div>
            <div class="col">
                <h1 class="diplay-5 mt-3 mb-5">
                <a href="Countries.php" class="btn btn-primary">Country</a>

                </h1>
            </div>

        </div>
    </div>
    <?php
    $connect = mysqli_connect('localhost','root','root','assignment1-database');
    $querry = 'SELECT * FROM Leaders';

    $leaders = mysqli_query($connect , $querry);

    ?>

    <div class="row">
        <?php
        foreach($leaders as $leader){



           
           echo '<div class="card '.$bgClass.' custom-card" style="width: 18rem;">
  <img src="data:image/jpeg;base64,' .base64_encode($leader['Image']). '" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NAME:  '.$leader['Name'].'</h5>
    <p class="card-text">Designation:'.$leader['Designation'].'</p>
    <p class="card-text">Age:'.$leader['Age'].'</p>
    <p class="card-text">Country:'.$leader['Country'].'</p>
    
  </div>
   </div>';


        } 
        ?>

    </div>
    

</body>
<style>
    .custom-card {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.custom-card-img {
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}

.custom-card-title {
    font-size: 18px;
    font-weight: bold;
}

.custom-card-text {
    font-size: 14px;
}

.custom-btn {
    background-color: #007bff;
    color: white;
}

.custom-btn:hover {
    background-color: #0056b3;
}

</style>

</html>