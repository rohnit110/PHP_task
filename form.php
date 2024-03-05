<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php
?>
<body>
    <h3 class=" container text-center mt-3">Registration Form</h3><br>
    <form class="container text-cent" action="form_action.php" method="post">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Your name" required>
            <label for="fname">Name </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your email" required>
            <label for="email">Email </label>
        </div>
        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="number" name="number" placeholder="Your mobile number" required>
            <label for="number">Mobile No. </label>
        </div>
        <input type="submit" class="btn btn-primary mx-auto d-flex  justify-content-center" >                   
    </form>
</body>

</html>