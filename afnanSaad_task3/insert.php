 <!DOCTYPE html>
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 <html>
  
  <head>
   <title> VIWE page  </title>
   <link rel="stylesheet" type="text/css" href="ControPanelStyle.css">
  </head>
 <!-- Start of the home page  -->
 <body>
   <header>
 <a href="Home.html"><img src="pictures/logo.png" id="home" alt="Website logo"></a>
 <hr>
 <h1 style="text-align: center;">
  <span style=" color:  #b3003b ;">Smart</span>
  <span style=" color:  #008080;">Methods</span>
  <br>  
  <span style=" color: #008080 ;"> الأساليب</span>
  <span style=" color: 	#b3003b ;"> الذكية </span>  
 </h1>
 </header>
 
 <?php
 $hostname="localhost";
 $username="root";
 $password="";
 $database="Control_Panel";
  
 $conn=mysqli_connect($hostname,$username,$password,$database);
 echo '<script type="text/JavaScript">  </script>';
 
 ?>
 <br>
 <div id="ControlPanel" >
  <div style = "">
 <form action="insert.php" method="get" >
   <label for="Right"> Right :</label><br>
   <input type="text" id="Right" name="Right" ><br>
   <label for="Left">Left :</label><br>
   <input type="text" id="Left" name="Left" ><br>
    <label for="Forwards">Forwards:</label><br>
   <input type="text" id="Forwards" name="Forwards" ><br><br>
   
   <input type="submit" name = "submit" value="Start"style="background-color :  #adebad ;  ">
   <input type="submit" name = "submit" value="Save" style="background-color : #d1b3ff ; ">
   <input type="submit" name = "submit" value="Delete" style="background-color : #e08585 ; " >
 
 </form> 
 
 
   
   
    <?php
  
  if(isset($_GET["submit"])) {
 
  @$a=$_GET['submit'];
  
  @$r=$_GET['Right'];
  @$l=$_GET['Left'];
  @$f=$_GET['Forwards'];
 
 if ($a === "Save"){
    if ($r && $l && $f){
    $s ="INSERT INTO `Move_Commands`(`Forward`,`right`,`left`) VALUES ('$f','$r' ,'$l')";
 $y = mysqli_query($conn,$s);}
 
  }//end of save
  
  if ($a === "Delete"){
 $s ="DELETE FROM `Move_Commands`";
 $y = mysqli_query($conn,$s);
  }//end of DELETE
  if ($a === "Start"){
   
 }  }
 ?>
</div>
 <br>
 <canvas id="myCanvas" width="300" height="300"   style="border:1px solid green ;  display: flex; ">
</canvas>
<?php
 if ($a === "Start"){
            $right = "SELECT   `right` FROM `Move_Commands`";
            $left = "SELECT    `left` FROM `Move_Commands`";
            $frward = "SELECT  `Forward` FROM `Move_Commands`";


            $result1 = mysqli_query($conn,$right);
            $result2 = mysqli_query($conn,$left);
            $result3 = mysqli_query($conn,$frward);
            
            if ($result2 || $result1||$result3 ){

               //number of rows in the result
               $num_rows = mysqli_num_rows($result2);
               $num_fields = mysqli_num_fields($result2);
               //Get a row of the result
                $row1 = mysqli_fetch_assoc($result1);
                $row2 = mysqli_fetch_assoc($result2);
                $row3 = mysqli_fetch_assoc($result3);


               //Get value from the row
               $value = array_values($row1);
               $value = array_values($row2);
               $value = array_values($row3);
               //1- right 2- left 3- frwards
               
echo"<script>var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');  </script>";
               for ($row_num = 0; $row_num < $num_rows; $row_num++) {
                    $values1 = array_values($row1);
                    $values2 = array_values($row2);
                    $values3 = array_values($row3);


               for ($index = 0; $index < $num_fields; $index++) {
                
                    $value1 = htmlspecialchars($values1[$index]);
      
                    
                    $value2 = htmlspecialchars($values2[$index]);
                                  if($value1 > 0){
                      echo "<script type='text/javascript'>

ctx.beginPath();
ctx.strokeStyle = 'green';  
ctx.moveTo($value1 , $value1);
ctx.lineTo(139 , 144);


</script>";
                    }
                    
                    if($value2>0){ echo "<script type='text/javascript'>

ctx.beginPath();
ctx.strokeStyle = 'purple';  
ctx.moveTo($value2,$value2 );
ctx.lineTo(98 , 113);

</script>";}
                    
                      
                    $value3 = htmlspecialchars($values3[$index]);
                  
                      
                      
                    
                      
                 
                          }
                    $row1 = mysqli_fetch_assoc($result1);
                    $row2 = mysqli_fetch_assoc($result2);
                    $row3 = mysqli_fetch_assoc($result3);}
                     
                   
            } else
                echo "There is no inputs" ;
 echo "<script type='text/javascript'>

ctx.stroke();


</script>";             
 }
      ?>         
    
                

               



 

 <br>
  <footer>
   <p>Designed by: Afnan saad <br>
   <a href="mailto:afnan.sha98@gmail.com">afnan.sha98@gmail.com</a></p	
 </footer>
 </body>
 </html>
