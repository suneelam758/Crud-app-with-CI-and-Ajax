<?php
include "navbar.php" ;

$check=$data['checkbox'];
$checkbox1 = explode(",", $check);

?>

<form action="http://localhost/ci_crud/index.php/welcome/update" method="post" id="createform">
        <input type="text" name="id" value="<?= $data['id'];?>" id="id3">
       <br>NAME:<input name="name" value="<?= $data['name'];?>" type="text" id="name">

       <br>EMAIL:<input name="email" id="email" value="<?= $data['email'];?>" type="email">

       <br>NUMBER:<input name="number" id="number" value="<?= $data['number'];?>" type="number">

       <br>TELEPHONE:<input name="telephone" id="telephone" value="<?= $data['telephone'];?>" type="tel">

       <br>PASSWORD:<input name="password" id="password" value="<?= $data['password'];?>" type="password">

       <br>CHECKBOX:<input name="checkbox[]" value="cirket" type="checkbox"     
       <?php 
       if(in_array("cirket", $checkbox1)){
             echo "checked";   
             }
        ?>
        >cricket
        <input name="checkbox[]" value="shoopting" type="checkbox"
         <?php 
       if(in_array("shoopting", $checkbox1)){
             echo "checked";   
             }
        ?>
        >shooting
        <input name="checkbox[]" value="fencing" type="checkbox"
        <?php 
       if(in_array("fencing", $checkbox1)){
             echo "checked";   
             }
        ?>
        >fencing

       <br>DATE:<input name="date" id="date" value="<?= $data['date'];?>" type="date">

       <br>MONTH:<input name="month" id="month" value="<?= $data['month'];?>" type="month">

       <br>RADIO:<input name="radio" value="punjabi" type="radio"
       <?php 
       if($data['radio'] == "punjabi"){
              echo "checked";   
              }
        ?>
       >panjabi
                 <input name="radio" value="hindi" type="radio"  <?php 
       if($data['radio'] == "hindi"){
             echo "checked";   
             }
        ?>>hindi
                 <input name="radio" value="english" type="radio"  <?php 
       if($data['radio'] == "english"){
             echo "checked";   
             }
        ?>>english

       <br>RANGE:<input name="range_input" id="range_input" value="<?= $data['range_input'];?>" type="range">

       <br>COLLEGE:<select name="select_input" value="">

<?php 
if($data['select_input'] == "ITM"){
    ?>
          <option value="ITM" selected>ITM</option>
            <option value="IIITM">IIITM</option>
            <option value="IPS">IPS</option></select>
    <?php  
       }
 ?>
  <?php 
if($data['select_input'] == "IIITM"){
    ?>
          <option value="ITM" >ITM</option>
            <option value="IIITM" selected>IIITM</option>
            <option value="IPS">IPS</option></select>
    <?php  
       }
 ?>
    <?php 
if($data['select_input'] == "IPS"){
    ?>
          <option value="ITM" >ITM</option>
            <option value="IIITM">IIITM</option>
            <option value="IPS" selected>IPS</option></select>
    <?php  
       }
 ?>
       <br>COLOR:<input name="color" id="color" value="<?= $data['color'];?>" type="color">
       
       <br><button name="update" value="update" type="submit" class="btn btn-success">update</button> 
  </form>
