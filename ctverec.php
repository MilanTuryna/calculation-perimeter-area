<?php

if ($_POST['rozmer3']) {
	
$jednotka = "cm";
$ctverecni = "<sup>2</sup>";

$a1 = $_POST['rozmer3'];
$a2 = "4";

$obsah = $a1 * $a1;
$obvod = $a2 * $a1;


}

else {
	header('Location: index.php');
}

?>

<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		#instructions {font: 16px 'AmericanTypewriter', Cambria, Georgia; color: #282625; margin: 0 auto; width: 600px;}
		.paper {
			padding: 37px 55px 27px;
			position: relative;
			border: 1px solid #B5B55;
			background: white;
			background: -webkit-linear-gradient(top, #DFE8EC 0%, white 8%) 0 57px;
			background: -moz-linear-gradient(top, #DFE8EC 0%, white 8%) 0 57px;
			background: linear-gradient(top, #DFE8EC 0%, white 8%) 0 57px;
			-webkit-background-size: 100% 30px;
			-moz-background-size: 100% 30px;
			-ms-background-size: 100% 30px;
			background-size: 100% 30px;
		}
		.paper::before {content:""; z-index:-1; margin:0 1px; width:706px; height:10px; position:absolute; bottom:-3px; left:0; background:white; border:1px solid #B5B5B5;}
		.paper::after {content:''; position:absolute; width:0px; top:0; left:39px; bottom:0; border-left:1px solid #F8D3D3;}
	</style>
	<meta author="MilanT">
	<meta charset="UTF-8">
	<title>
		Výpočet čtverce
	</title>
</head>

<div class="container-fluid" style="border-left-color: #edefef; border-right-color: #edefef; border-width: 1px; background-color: #fafafa; margin-bottom: 0px;">
	<h1 class="display-3" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; text-align: center;         margin: 0px;
        ">Vypočítání obvodu a obsahu<br><small style="font-weight: 370; font-size: 20px;">Přejít <a href="./">zpět</a></small></h1></div>



<style>
	#h1-cara {
		margin: 0px 0px 0px
	}
</style>
<hr class="my-4" id="h1-cara" style="margin-top: 0px !important;"/>
<div class="container" style="border-left-color: #edefef; border-right-color: #edefef; border-width: 1px;">
	<div class="row">
		<div class="col">
			<form style="user-select: none;">

				<div class="form-group">
					<label for="formGroupExampleInput">Strana 1</label>
					<input type="number"  name="rozmer4"class="form-control" disabled id="formGroupExampleInput" placeholder="<?php echo("$a1")?>">
				</div>

				<div class="form-group">
					<input type="submit" style="pointer: default;" disabled class="btn btn-outline-success" value="Vypočítat"/>
				</div>

			</form>
		</div>
		<div class="col">
			<form >

				<div class="form-group">
					<label for="formGroupExampleInput">Obvod (<?php echo("$jednotka"); ?>)</label>
					<input type="text"  name="rozmer4"class="form-control" id="formGroupExampleInput4" disabled value="<?php echo("$obvod");?>">
					<style>
						#formGroupExampleInput4:disabled {
							background: white;
							color: black;

						}
					</style>
				</div>

				<div class="form-group">
					<label for="formGroupExampleInput2">Obsah (<?php echo("$jednotka$ctverecni")?>)</label>
					<input type="number" name="rozmer5" class="form-control" id="formGroupExampleInput4" disabled value="<?php echo("$obsah");?>">
				</div>

			</form>

		</div>

	</div>
	<div class="row">

		<div class="col">
			<hr class="my-4"/>
			<h1 class="display-5" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; margin: 0px; font-weight: lighter;">
				Vzorec obvodu</h1>
			<pre>o = 4 · a </pre>
			<pre>o = <?php echo("$a2 x $a1")?></pre>
			<pre>o = <?php echo("$obvod$jednotka")?></pre>

		</div>
		<div class="col">
			<hr class="my-4"/>
			<h1 class="display-5" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; margin: 0px; font-weight: lighter;">
				Vzorec obsahu</h1>
			<pre>S = a · a</pre>
			<pre>S = <?php echo("$a1 · $a1")?></pre>
			<pre>S = <?php echo("$obsah$jednotka$ctverecni")?></pre>





		</div>

	</div>

</div>

</html>
