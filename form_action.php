<?php
$fname = $email = $number = " "; 
$nameErr = $emailErr = $numberErr = " ";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_POST["fname"])){
       $nameErr = "Name is required";
    }else{
        $fname =  test_input($_POST["fname"]) . "<br>";
    }
    if(empty($_POST["email"])){
        $emailErr = "Email is Required";
    }else{
        $email = test_input($_GET["email"]) . "<br>";
    }
    if(empty($_POST["number"])){
        $numberErr = "Number is required";
    }else{
        $number = test_input($_GET["number"]);
    }
} 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}


echo "Name: " . $fname ."<br>";
echo "Email:" . $email ."<br>";
echo "Mobile No.:" . $number ."<br>";
?>


<div class="col-4 mx-auto justify-content-center">
    <div class="container input-group">
        <input type="text" class="form-control" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];}?>" placeholder="seach for product" >
    <input type="submit" value="Search" class="btn btn-success">
    </div>
    </div>
</div>