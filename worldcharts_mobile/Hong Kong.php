<!DOCTYPE html> 
<html> 
<head> 
	<title>Hong Kong</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head> 
<body> 

<div data-role="page" id="page" style="background-image: url('backgrounds/hongkong.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;"
    data-theme="a">

	<div data-role="header">
		<a href="#" data-role="button" data-icon="back" data-rel="back">Back</a>
		<h1>Hong Kong</h1>
			<div data-role="fieldcontain" data-inline="true" class="ui-btn-right">
				<select name="select-choice-1" id="select-choice-1" data-inline="true">
					<option value="Hong Kong">Hong Kong</option>
					<option value="United States">United States</option>
					<option value="France">France</option>
					<option value="Germany">Germany</option>
					<option value="China">China</option>
					<option value="India">India</option>
					<option value="South Korea">South Korea</option>			
					<option value="Taiwan">Taiwan</option>
				</select>
				
				<script>
					$(function(){

						$('select').change(function() {
						var nextpage = $(this).children('option:selected').attr('value');
						$.mobile.changePage( nextpage + '.php' );
						});

					});
				</script>
			</div>
	
	</div><!-- /header -->

	<div data-role="content">	
	
	<!--country list-->

	<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
			$query = "SELECT * FROM list WHERE username = 'Hong Kong'";
			$result = mysql_query($query);
			$ranking = 1;
        while ($row = mysql_fetch_assoc($result)) {
			echo "<div data-role='collapsible' data-theme='c' data-content-theme='c'>";
				echo "<h3> NO $ranking. ".$row["SongName"]." - ".$row["Singer"]."</h3>";
				echo "<table class = 'table' id = 'table_uneven' cellpadding = '10px' width = '100%'>";
				echo "<td width = '80%'><iframe width='280' height='157' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></td>";
				echo "<td width = '20%'>";
				echo "<a href='".$row["Itunes"]."'  data-role='button' data-theme='b' >Get it on Itunes</a>";
				echo "<a href='".$row["Amazon"]."' target = 'blank' data-role='button' data-theme='e' >Get it on Amazon</a>";
				echo "<a href='#' data-role='button' data-theme='c' >Add to List</a>";
				echo "</td>";
				echo "</table>";
			echo "</div>";
			$ranking++;
        }
?>
  

  
	</div><!-- /content -->

</div><!-- /page -->

</body>
</html>