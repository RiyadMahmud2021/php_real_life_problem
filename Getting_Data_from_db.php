<!-- Main PHP Code on Below -->

<?php include "layouts/header.php"; 

       $connection = mysqli_connect('localhost','root','','core_php');
       if (!$connection) {
          echo "Failed to connect Database: " .mysqli_connect_error();   
       }
       else{
       $sql = 'SELECT * FROM tbl_student';

       $user = mysqli_query($connection,$sql); 
      }
        // echo '<pre>';
        // var_dump($user);
        // exit;
?>

<!-- HTML Code on Below -->


<header>	 
  <h1 class="title"> PHP Header</h1>
  <h1 class="title"> #Prob: Getting Data from db</h1>
</header>



<section>
  <!-- <nav>
    <ul>
      <li><a href="#">Students</a></li>
      <li><a href="#">Teachers</a></li>
    </ul>
  </nav> -->
        <article>
            <table class = 'tblone'>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Depertment</th>
                            <th>Age</th>
                        </tr>
                        <?php foreach($user as $value) {?>
                        <tr>
                            <td><?php echo $value['id'] ?></td>       <!-- or --> <?php //echo $value[0] ?>  
                            <td><?php echo $value['name']?></td>      <!-- or --> <?php //echo $value[1] ?>  
                            <td><?php echo $value['dept'] ?></td>     <!-- or --> <?php //echo $value[2] ?>  
                            <td><?php echo $value['age']  ?></td>     <!-- or --> <?php //echo $value[3]  ?>
                        </tr>
                        <?php } ?>
            </table>

        </article>

</section>    
   
</body>

<?php include "layouts/footer.php"?>






