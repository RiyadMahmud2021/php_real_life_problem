
<!-- Main PHP Code on Below -->

<?php

    error_reporting(0);
    $connection = mysqli_connect('localhost','root','','core_php');
    if (!$connection) {
       echo "Failed to connect Database: " .mysqli_connect_error(); 
    }
    // md5 or sha1 or rsa security using // image: no extention in db and image folder(fully encripted)
    $fileName = date("Y-m-d-H-i-s").sha1(" ", "_",$_FILES['image']['name']); // no extention in db and image folder
    $destinationWithFileName = "images/".$fileName; // associative array: contains a key( input field name) and value
    $tempFilenameWithTempPath = $_FILES['image']['tmp_name'];

    if( move_uploaded_file($tempFilenameWithTempPath,$destinationWithFileName) ){
        $sql = "Insert INTO tbl_img(path,name) VALUES ('$destinationWithFileName','$originalName')";
        mysqli_query($connection,$sql);
    }

    $sql1 = 'SELECT * FROM `tbl_img`';
    $images = mysqli_query($connection,$sql1);
    
        // echo '<pre>';
        // print_r($images);
        // exit;
 
?>


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
    <?php foreach($images as $key){ ?>
    <div class="pic_content">
        <div class="gallery">
            <a target="_blank" href="">
                <?php echo"<img style='height: 200px; width:175px;' src=".$key['path']." alt='Cinque Terre' width='600' height='400'>"; ?>
            </a>
        </div>
    </div>
    <?php }?>
  </section>    

</body>

<?php include "layouts/footer.php"?>

