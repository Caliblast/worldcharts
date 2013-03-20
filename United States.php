<!DOCTYPE html> 
<html> 
<head> 
	<title>United States</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="themes/worldcharts.min.css" />
	<link rel = "stylesheet" href = "assets/css/sub.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>
</head> 
<body> 

<div data-role="page" id="page" style="background-image: url('backgrounds/background.png'); background-attachment: fixed; background-repeat: no-repeat; background-size: 100% 100%;"
    data-theme="a">

	<div data-role="header">
		<a href="#" data-role="button" data-icon="back" data-rel="back">Back</a>
		<h1>United States</h1>
			<div data-role="fieldcontain" data-inline="true" class="ui-btn-right">
				<select name="select-choice-1" id="select-choice-1" data-inline="true">
					<option value="United States">United States</option>
					<option value="France">France</option>
					<option value="Germany">Germany</option>
					<option value="China">China</option>
					<option value="India">India</option>
					<option value="South Korea">South Korea</option>
					<option value="Hong Kong">Hong Kong</option>
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
	
	<div class="ui-grid-b">
	
	<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
		$query = "SELECT * FROM list WHERE username = 'United States'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<table class = 'table' id = 'table_uneven' cellpadding = '10px'>";
				echo "<td width = '30%'><img src = 'crown.png' id = 'number1_left' width = 100px;/></td>";
				echo "<td width = '40%'><div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></td>";
				echo "<td width = '30%'><img src = 'crown.png' id = 'number1_right' width = 100px;/></td>";
				echo "</table>";
				}
				else if($rank% 3 == 2) {
					echo "<div class = 'ui-block-a' id = 'song_three'>";
					if ($rank < 10)
						echo "<img src = 'numbers/$rank.gif' width = 13.6%; />";
					else echo "<img src = 'numbers/$rank.gif' width = 18%; />";
					echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' id = 'buy' span style='float:right' data-theme='a' data-inline = 'true' data-mini='true'>Get it on Itunes</a>";
					echo "<div class = 'video_three' ><iframe width='364' height='205' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></div>";
					echo "<div class = 'title'>".$row["SongName"]."</div>";
					echo "<div class = 'singer'>".$row["Singer"]."</div>";
					echo "</div>";
				}
				else if($rank% 3 == 0) {
					echo "<div class = 'ui-block-b' id = 'song_three'>";
					if ($rank < 10)
						echo "<img src = 'numbers/$rank.gif' width = 13.6%; />";
					else echo "<img src = 'numbers/$rank.gif' width = 18%; />";
					echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' id = 'buy' span style='float:right' data-theme='a' data-inline = 'true' data-mini='true'>Get it on Itunes</a>";
					echo "<div class = 'video_three' ><iframe width='364' height='205' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></div>";
					echo "<div class = 'title'>".$row["SongName"]."</div>";
					echo "<div class = 'singer'>".$row["Singer"]."</div>";
					echo "</div>";
				}
				else {
					echo "<div class = 'ui-block-c' id = 'song_three'>";
					if ($rank < 10)
						echo "<img src = 'numbers/$rank.gif' width = 13.6%; />";
					else echo "<img src = 'numbers/$rank.gif' width = 18%; />";
					echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' id = 'buy' span style='float:right' data-theme='a' data-inline = 'true' data-mini='true'>Get it on Itunes</a>";
					echo "<div class = 'video_three' ><iframe width='364' height='205' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></div>";
					echo "<div class = 'title'>".$row["SongName"]."</div>";
					echo "<div class = 'singer'>".$row["Singer"]."</div>";
					echo "</div>";
				}
		}
		
?>
	</div><!--/ui-grid-b-->
	
</div><!-- /content -->

</div><!-- /page -->

</body>
</html>


