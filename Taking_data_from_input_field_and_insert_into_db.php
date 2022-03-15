<?php include "layouts/header.php";
?>

  <header>
      <h1 class="title"> PHP Header</h1>
      <h2 class="title"> Prob: Taking data from input field and insert into db </h2>
  </header>

  <section>
    <div class="content_center_section" >
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="text" name="name" value="" placeholder="Name">
          <br/>
          <br/>
          <input type="text" name="dept" value="" placeholder="Dept">
          <br/>
          <br/>
          <input type="text" name="age" value="" placeholder="Age">
          <br/>
          <br/>
          <button>Submit</button>
        </form>
    </div>
  </section>    

</body>

<?php include "layouts/footer.php"?>


<?php  
       error_reporting(0);
       $connection = mysqli_connect('localhost','root','','core_php');
       if (!$connection) {
          die("Failed to connect Database: " .mysqli_error());   
       }
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $age  = $_POST['age'];
        

        $sql = "INSERT INTO tbl_student(name,dept, age) VALUES ('$name','$dept','$age')"; 
 

        if($sql){     
          mysqli_query($connection,$sql);
        }

                  // if($ok) { 
                  // echo "inserted";
                  // }
                  // else{
                  // echo "not inserted";
                  // }
        // echo '<pre>';
        // print_r($user);
        // exit;
?>

