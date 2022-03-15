<?php include "layouts/header.php";
?>

  <header>
      <h1 class="title"> PHP Header</h1>
      <h2 class="title"> Prob: Upload Image</h2>
  </header>

  <section>
    <div class="content_center_section" >
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" name="image">
          <br/>
          <br/>
          <button>Submit</button>
        </form>
    </div>
  </section>    

</body>

<?php include "layouts/footer.php"?>


<!-- Main PHP Code on Below -->

<?php

    error_reporting(0);
    $connection = mysqli_connect('localhost','root','','core_php');
    if (!$connection) {
       echo "Failed to connect Database: " .mysqli_connect_error(); 
    }
    
    // $name = $_FILES['image']['name']; // associative array: contains a key( input field name) and value
    // echo $name;
    // $tmp_name = $_FILES['image']['tmp_name'];
    // echo $tmp_name;
    $originalName = $_FILES['image']['name'];
    $destinationWithFileName = "images/".$_FILES['image']['name']; // associative array: contains a key( input field name) and value
    $tempFilenameWithTempPath = $_FILES['image']['tmp_name'];

    if( move_uploaded_file($tempFilenameWithTempPath,$destinationWithFileName) ){
        $sql = "Insert INTO tbl_img(path,name) VALUES ('$destinationWithFileName','$originalName')";
        mysqli_query($connection,$sql);
    }
  


 
?>
