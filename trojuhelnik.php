<?php

if ($_POST['rozmer4'] && $_POST['rozmer5'] && $_POST['rozmer6']) {
 
$jednotka = "cm";

$a1 = $_POST['rozmer4'];
$a2 = $_POST['rozmer5'];
$a3 = $_POST['rozmer6'];
$obvod = $a1 + $a2 + $a3;

$s = ($a1 + $a2 + $a3) / 2;
$obsah = sqrt($s * ($s - $a1) * ($s - $a2) * ($s - $a3));


$vypocet = "$obvod$jednotka";



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


    <meta author="MilanT">
    <meta charset="UTF-8">
    <title>
        Výpočet trojúhelníku
    </title>
</head>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
<div class="container-fluid" style="border-left-color: #edefef; border-right-color: #edefef; border-width: 1px; background-color: #fafafa; margin-bottom: 0px;">
    <h1 class="display-3" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; text-align: center;         margin: 0px;
        ">Vypočítání obvodu a obsahu<br><small style="font-weight: 370; font-size: 20px;">Přejít <a href="./">zpět</a></small></h1></div>
</div>
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
                        <label for="formGroupExampleInput2">Strana 2</label>
                        <input type="number" name="rozmer5" class="form-control" disabled  id="formGroupExampleInput2" placeholder="<?php echo("$a2")?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Strana 3</label>
                        <input type="number" name="rozmer6" class="form-control" disabled id="formGroupExampleInput2" placeholder="<?php echo("$a3")?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" style="pointer: default;" disabled class="btn btn-outline-danger" value="Vypočítat"/>
                    </div>

            </form>
        </div>
        <div class="col">
            <form >

                    <div class="form-group">
                        <label for="formGroupExampleInput">Obvod</label>
                        <input type="text"  name="rozmer4"class="form-control" id="formGroupExampleInput4" disabled value="<?php echo("$vypocet")?>">
                        <style>
                            #formGroupExampleInput4:disabled {
                                background: white;
                                color: black;

                            }
                        </style>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Obsah (bez zaokrouhlení: <?php echo($obsah)?>)</label>
                        <input type="number" name="rozmer5" class="form-control" id="formGroupExampleInput4" disabled value="<?php echo round($obsah, 2)?>">
                    </div>

            </form>

        </div>

    </div>
    <div class="row">

        <div class="col">
            <hr class="my-4"/>
            <h1 class="display-5" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; margin: 0px; font-weight: lighter;">
                Vzorec obvodu</h1>
            <pre>S = a + b + c</pre>
            <pre>S = <?php echo("$a1 &#43; $a2 &#43; $a3")?></pre>
            <pre>S = <?php echo("$vypocet")?></pre>

        </div>
        <div class="col">
            <hr class="my-4"/>
            <h1 class="display-5" style="background-color: #success;  max-width: 102%; padding-top: 2%; padding-bottom:2%;  border: gray; margin: 0px; font-weight: lighter;">
                Vzorec obsahu</h1>
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"

                 preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,132.000000) scale(0.100000,-0.100000)"
                   fill="#000000" stroke="none">
                    <path d="M2388 1107 c34 -34 62 -67 62 -72 0 -5 -28 -38 -62 -72 -35 -35 -56
-63 -47 -63 8 0 41 27 74 60 l59 60 63 -62 c34 -34 66 -59 70 -55 4 4 -21 36
-55 70 l-62 62 62 62 c34 34 59 66 55 70 -4 4 -36 -21 -70 -55 l-63 -62 -59
60 c-33 33 -66 60 -74 60 -9 0 12 -28 47 -63z"/>
                    <path d="M2039 1127 c-43 -28 -79 -98 -79 -155 0 -76 70 -117 128 -76 21 15
25 15 41 0 38 -34 85 -9 97 52 8 40 -11 44 -21 5 -7 -31 -23 -53 -36 -53 -14
0 -10 46 12 132 23 92 20 111 -15 102 -13 -3 -27 -1 -30 5 -12 18 -61 12 -97
-12z m95 -19 c12 -20 -7 -130 -30 -166 -34 -52 -94 -50 -94 4 0 120 82 228
124 162z"/>
                    <path d="M2757 1129 c-17 -10 -47 -59 -47 -79 0 -23 21 -8 34 25 14 33 40 54
53 42 3 -3 -4 -34 -16 -68 -39 -116 -20 -179 52 -179 56 0 101 60 127 168 15
63 7 102 -20 102 -28 0 -42 -31 -24 -55 41 -56 -27 -209 -85 -190 -31 10 -34
43 -12 115 26 81 26 107 2 120 -24 12 -41 12 -64 -1z"/>
                    <path d="M372 1010 c-106 -43 -163 -174 -112 -257 15 -26 32 -36 88 -52 38
-12 74 -21 79 -21 20 0 45 -40 45 -73 0 -102 -99 -164 -198 -122 -41 17 -69
72 -60 117 4 22 2 28 -12 28 -14 0 -23 -19 -41 -96 -13 -52 -20 -98 -17 -102
4 -3 18 6 33 20 l26 26 29 -21 c20 -15 47 -22 91 -25 54 -3 68 1 114 27 91 54
137 173 96 251 -18 35 -49 52 -153 82 -81 24 -92 91 -24 155 30 28 43 33 82
33 27 0 57 -7 69 -15 26 -19 44 -76 36 -116 -5 -24 -2 -29 15 -29 17 0 23 14
43 95 13 52 20 98 16 102 -4 3 -21 -6 -37 -22 -17 -16 -30 -24 -30 -18 0 32
-123 55 -178 33z"/>
                    <path d="M3062 935 c-39 -33 -58 -89 -43 -127 12 -33 55 -47 84 -29 14 9 22
10 30 2 25 -25 77 6 77 46 0 23 -18 14 -24 -12 -4 -14 -11 -25 -16 -25 -14 0
-12 36 5 100 8 30 13 55 12 56 -1 1 -23 5 -48 9 -40 6 -49 4 -77 -20z m78 -24
c0 -74 -46 -145 -77 -119 -16 13 -16 31 -2 81 19 71 79 100 79 38z"/>
                    <path d="M947 733 c-4 -3 -7 -10 -7 -15 0 -4 124 -8 275 -8 238 0 275 2 275
15 0 13 -36 15 -268 15 -148 0 -272 -3 -275 -7z"/>
                    <path d="M1890 670 l0 -30 700 0 700 0 0 30 0 30 -700 0 -700 0 0 -30z"/>
                    <path d="M942 568 c4 -10 70 -14 276 -16 238 -2 272 0 272 13 0 13 -36 15
-276 15 -216 0 -275 -3 -272 -12z"/>
                    <path d="M2535 521 c-70 -29 -86 -142 -18 -129 24 4 30 48 9 64 -15 11 -15 13
-1 28 44 43 115 -2 115 -73 0 -45 -25 -86 -106 -177 -35 -39 -64 -76 -64 -83
0 -7 34 -11 109 -11 l108 0 7 37 c12 76 1 100 -21 43 -11 -29 -13 -30 -80 -30
l-68 1 70 66 c39 37 78 78 87 92 22 32 23 99 2 129 -30 44 -98 63 -149 43z"/>
                </g>
            </svg><br>
            <small>Tato aplikace k vypočítání jako algoritmus využívá <span style="color: #007bff;text-decoration: none;background-color: transparent;" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">heronův vzorec</span></small>





        </div>

    </div>

</div>

</html>
