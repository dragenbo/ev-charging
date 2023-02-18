
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>usecond  page</title>
  
</head>
<style>



.MainPage
{
  background-color:grey;
  text-align: center;
  font-size:medium;
  letter-spacing: 0.5px;

}


label{
    
    width:120px;
    height: 20px;
    display: inline-block;
    border-radius: 40px;
    margin-left:10px;
    font-size: 18px;
    font-weight: bold;

  }


  input{
 width: 269px;
 height: 30px;
 border: black 2px;
  }

#Secondpage
{
 
  text-align: center;
  font-size:medium;
  letter-spacing: 0.5px;

}

.buttons 
{
  
  

}




</style>
<body>
    <?php include 'unavbar.php'?>
    <?php
     $hostname = "localhost";
     $username = "root";
     $password = "";
     $databaseName = "user_db";
     
      
     $connect = mysqli_connect($hostname, $username, $password, $databaseName);
     ?>
     
    <div class="MainPage">
        <h2 style="text-align:center;text-decoration:underline;"><b>EV RECHARGE SERVICE<b></h2>
        <br>
    
   
      <br>
      <h3 style="text-align:center;text-decoration:underline;"> <b> Book Slot </b></h3>
     
      <br>
      <br>
      
      
      <label for="location" >LOCATION</label>
        <input type="text" id="location" name="location" >
        <br>
        <br>

        <label for="slot_id" >SLOT ID</label>
        <input type="text" id="slot_id" name="slot_id">
        <br>
        
        <br>
        <label for="slots">SlOT AVAILABILITY</label>
        <input type="text"  id="slots" name="slots">
        <br>
        <br>
        <label for="required_slots">Enter Required No Of Slots</label>
        <input type="text"  id="required_slots" name="required_slots">
        <br>
        
       
        <br>
        <br>

        <div class="buttons">
     <button name="book" class="action_btn submit" type="submit" value="update" onclick="myFunction()">BOOK SLOT</button>
         <br>
         </div>
     </div>
     </body>