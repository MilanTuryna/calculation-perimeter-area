<?php 
$rok = date('Y');
$copyright = "&copy;";
$footer = '<span class="footer" oncontextmenu="return false" oncopy="return false" oncut="return false">' . "Created by Miloslav Turyna $copyright $rok </span>";
$boostrap = "Boostrap" ;

?>

<html>
 <head>
  <title>Vypočítání obvodu a obsahu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 
 <div class="container" style="border-left-color: #edefef; border-right-color: #edefef; border-width: 1px;">
   <h1 class="display-3" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray;">Vypočítání obvodu a obsahu</h1>
   <div class="alert alert-info" role="alert">
  <strong>Obdelník</strong>
</div>
        <form action="obdelnik.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Strana 1</label>
    <input type="number"  name="rozmer1"class="form-control" id="formGroupExampleInput" placeholder="např: 7">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Strana 2</label>
    <input type="number" name="rozmer2" class="form-control" id="formGroupExampleInput2" placeholder="např: 4">
  </div>
  <div class="form-group">
  	<input type="submit" class="btn btn-outline-info" value="Vypočítat"/>
  </div>
</form>

<hr class="my-4">
<div class="alert alert-success" role="alert">
  <strong>Čtverec</strong>
</div>
<form action="ctverec.php" method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Strana</label>
    <input type="number"  name="rozmer3"class="form-control" id="formGroupExampleInput" placeholder="např: 5">
  </div>
  <div class="form-group">
  	<input type="submit" class="btn btn-outline-success" value="Vypočítat"/>
  </div>
</form>
<hr class="my-4">
<div class="alert alert-danger" role="alert">
  <strong>Trojúhelník</strong>
</div>
        <form action="trojuhelnik.php" method="POST" >
  <div class="form-group">
    <label for="formGroupExampleInput">Strana 1</label>
    <input type="number"  name="rozmer4"class="form-control" id="formGroupExampleInput" placeholder="např: 8">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Strana 2</label>
    <input type="number" name="rozmer5" class="form-control" id="formGroupExampleInput2" placeholder="např: 3">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Strana 3</label>
    <input type="number" name="rozmer6" class="form-control" id="formGroupExampleInput2" placeholder="např: 6">
  </div>
  <div class="form-group">
  	<input type="submit"  class="btn btn-outline-danger" value="Vypočítat"/>
  </div>
</form>
</div>
<div class="card-footer text-muted" style="margin-top: 8px;" >
    <div class="container" ><?php
    print($footer)?>- Jedná se o soutěžní aplikaci v soutěži od <a href="https://itnetwork.cz">itnetwork.cz</a>
    
  </div>
  </div>

 
        
        
</html>
