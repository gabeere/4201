<style type="text/css">
	table{
		background: green;
		border-radius: 10px;
		margin-left: 20%;
		margin-right: 20%;
		cursor: pointer;
		width: 50%;
;
	}
	tr{
		color: red  green;
		background-color: grey;

		
	}
	td:hover{
		background: #D4F1F4;

	}
	.y{
		
		font-size: 25;
        background-color: #
308933
;
	}
	td{
		font-weight: bold;

	}
	.t{
		color:white;
	}
	.t:hover{
		background-color: blue;
	}
</style>
<?php
$University="DIU";
$STID="4201";
$Name="cali gabeere";
$Faculty="Computer Science & ENG";
$DEP="computer Science";
$Gender="Male";


/*echo "$University<br>";
echo "STID<br>";
echo "$Name<br>";
echo "$Faculty<br>";
echo "$DEP<br>";
echo "$Gender<br>";
echo "$Date<br>";*/



?>

<table border="1">
	<tr><td class="y">University</td><td class="t"><?php echo "$University"; ?></td></tr><br>
	<tr><td class="y">Studet ID CRD</td ><td class="t"><?php echo "$STID"; ?></td></tr><br>
	<tr><td class="y">Name</td><td class="t"><?php echo "$Name"; ?></td></tr><br>
	<tr><td class="y">Faculty</td><td class="t"><?php echo "$Faculty";?></td></tr><br>
	<tr><td class="y">DEPART</td><td class="t"><?php echo "$DEP";?></td></tr><br>
	<tr><td class="y">Gender<td class="t"><?php echo "$Gender";?></td></tr><br>
	
	

</table>