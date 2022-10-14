<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
  
  
  
  
      <form id="updateform">
        <input type="hidden" id="id3" name="id" value="">
       <br>NAME:<input name="name" id="name" value="" type="text"  class="form-ccontrol" >

       <br>EMAIL:<input name="email"  id="email"  value="" type="email" class="form-ccontrol">

       <br>NUMBER:<input  id="number" name="number" value="" type="number" class="form-ccontrol">

       <br>TELEPHONE:<input id="telephone"  name="telephone" value="" type="tel" class="form-ccontrol">

       <br>PASSWORD:<input  id="password" name="password" value="" type="password" class="form-ccontrol">

       <br>CHECKBOX:<input name="checkbox[]" value="cirket" type="checkbox">cricket
                    <input name="checkbox[]" value="shoopting" type="checkbox">shooting
                    <input name="checkbox[]" value="fencing" type="checkbox">fencing

       <br>DATE:<input name="date" id="date"  value="" type="date" class="form-ccontrol">

       <br>MONTH:<input name="month" id="month"  value="" type="month" class="form-ccontrol">

       <br>RADIO:<input name="radio" id="radio" value="punjabi" type="radio" class="form-ccontrol">panjabi
                 <input name="radio" value="hindi" type="radio">hindi
                 <input name="radio" value="english" type="radio">english


                 <br>RANGE:<input name="range_input"  id="range_input" value="" type="range" class="form-ccontrol">

       <br>COLLEGE:<select name="select_input" value="" id="">
                   <option value="">choose collage</option>
                   <option value="ITM">itm</option>
                   <option value="IIITM">iiitm</option>
                   <option value="IPS">ips</option></select>
                   <br>COLOR:<input name="color" id="color"  value="" type="color" class="form-ccontrol">
                   
                   <br><button name="submit" type="submit" class="btn btn-success">save</button> 
                  </form>
                  

                  
                  <br>
                  
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Telephone</th>
      <th scope="col">Password</th>
      <th scope="col">Checkbox</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Radio</th>
      <th scope="col">Range_input</th>
      <th scope="col">Select_input</th>
      <th scope="col">Color</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>
  </thead>
  <tbody id="tbody">
  
  </tbody>
</table>

<form id="insertform">
       <br>NAME:<input name="name"  value="" type="text" >

       <br>EMAIL:<input name="email"    value="" type="email">

       <br>NUMBER:<input   name="number" value="" type="number">

       <br>TELEPHONE:<input name="telephone" value="" type="tel">

       <br>PASSWORD:<input  name="password" value="" type="password">

       <br>CHECKBOX:<input name="checkbox[]" value="cirket" type="checkbox">cricket
                    <input name="checkbox[]" value="shoopting" type="checkbox">shooting
                    <input name="checkbox[]" value="fencing" type="checkbox">fencing

       <br>DATE:<input name="date" value="" type="date">

       <br>MONTH:<input name="month"   value="" type="month">

       <br>RADIO:<input name="radio"  value="punjabi" type="radio">panjabi
                 <input name="radio" value="hindi" type="radio">hindi
                 <input name="radio" value="english" type="radio">english


                 <br>RANGE:<input name="range_input"  id="range_input" value="" type="range">

       <br>COLLEGE:<select name="select_input" value="" id="">
                   <option value="">choose collage</option>
                   <option value="ITM">itm</option>
                   <option value="IIITM">iiitm</option>
                   <option value="IPS">ips</option></select>
                   <br>COLOR:<input name="color"   value="" type="color">
                   
                   <br><button name="submit" type="submit" class="btn btn-success">save</button> 
                  </form>

<script>
  abc()
  function abc()
  {
    $.ajax({
      type:'ajax',
      url:'<?= base_url(); ?>welcome/disp',
      async:false,
      dataType: 'json',
      success: function(data){
  //   console.log(data)
  // console.log(data.length)
 var html='';
 for(i=0;i<data.length;i++)
 {
  html+='<tr>'+
  '<td>'+ data[i].id +'</td>'+
  '<td>'+ data[i].name +'</td>'+
  '<td>'+ data[i].email +'</td>'+
  '<td>'+ data[i].number +'</td>'+
  '<td>'+ data[i].telephone +'</td>'+
  '<td>'+ data[i].password +'</td>'+
  '<td>'+ data[i].checkbox +'</td>'+
  '<td>'+ data[i].date +'</td>'+
  '<td>'+ data[i].month +'</td>'+
  '<td>'+ data[i].radio +'</td>'+
  '<td>'+ data[i].range_input +'</td>'+
  '<td>'+ data[i].select_input +'</td>'+
  '<td>'+ data[i].color +'</td>'+
  '<td><button onclick=edit(' + data[i].id + ')>edit</button></td>'+
  '<td><button onclick=boom(' + data[i].id + ')>delete</button></td>'
  +'</tr>';
 }

 $('#tbody').html(html)
  }

});
}

function edit(id){
  alert(id);

  $("#id3").val(id);

            $.ajax({
                  url:"<?= base_url(); ?>welcome/formalldata",
                  type: "POST",
                  data: {id:id},
                  dataType: 'json',
                success:function(response){
                  // console.log(response.name);
                  // alert(response.name);
                  $radio=response.radio;
                  
                  // alert($radio);
                    $('#name').val(response.name);
                    $('#email').val(response.email);
                    $('#number').val(response.number);
                    $('#telephone').val(response.telephone);
                    $('#password').val(response.password);
                    $('#checkbox').val(response.checkbox);
                    $('#date').val(response.date);
                    $('#month').val(response.month);
                    $('#radio').val(response.radio);
                    $('#range_input').val(response.range_input);
                    $('#select_input').val(response.select_input);
                    $('#color').val(response.color);
                   
                }

            });



}
function boom(id){

$.ajax({
      url:"<?= base_url(); ?>welcome/delete",
      type: "POST",
      data: {id:id},
    success:function(data){
      alert('Delete successfully');
      $('#tbody').reload(true);
    }
});

} 
$('#insertform').submit(function(){
  
  $.ajax({
      url: '<?= base_url(); ?>welcome/insert',
       data: $('#insertform').serialize(),
     type:'POST',
     dataType:'json',
     success: function(data){
      alert('insert successfully');
       },
       error: function(){
      alert ('Error');
     }
  });

});

$('#updateform').submit(function(){
  
  $.ajax({
      url: '<?= base_url(); ?>welcome/update',
       data: $('#updateform').serialize(),
     type:'POST',
     dataType:'json',
     success: function(data){
      alert('update successfully');
       },
       error: function(){
      alert ('Error');
     }
  });

});


</script>


</body>
</html>
