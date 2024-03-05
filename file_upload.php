<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

</html>
<?php
if (isset($_FILES['image'])) {

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];

    if (move_uploaded_file($file_tmp, "task-2/" . $file_name)) {
        echo "<h3 class='text-success text-center mt-5'>Successfully uploaded</h3>";
    } else {
        echo "<h3 class='text-danger text-center mt-5'>Image Doesn't uploaded</h3>";
    }
}
?>

<body class="ps-3">
    <form style="display:inline-flexbox" action="" class="container mt-3 text-center border border-primary" method="post" enctype="multipart/form-data"><br><br>
        <label for="image" class="form-label">Add File : &nbsp; </label>
        <input type="file" class="form-control-md text-center" name="image" id="image" style="width:200px" size="70"><br><br>
        <input type="submit" class="btn btn-warning btn-rounded-pill" value="Upload file">
    </form>
</body>
