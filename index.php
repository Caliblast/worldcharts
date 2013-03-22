<!DOCTYPE html> 
<html> 
<head> 
	<title>World Charts</title> 
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<meta name = "description" content = "Listen to the top 10 most popular songs in United States, China, India, South Korea, France, Germany, Taiwan, Hong Kong and many more countries to come!">
	<link rel="stylesheet" href="themes/worldcharts.min.css" />
	<link rel = "stylesheet" href = "assets/css/sub.css"/>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile.structure-1.3.0.min.css" />
	<link rel="apple-touch-icon" href="logo.png"/>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

</head> 
<body>

<div data-role="page" id="page" data-theme="a">


<div class = "theme">
	<table border = "0">
	<td width = "7%"><a href ="/"><img src = "logo.png" width = "70px" height = "70px" style="margin-left:20px; margin-top:-20px;"/></a></td>
	<td width = "37%"><div id = "theme"><a href ="/" style="text-decoration: none; color:grey;"><h1>World Charts</h1></a></div></td>
	<td width = "65%" style ="color:grey; font-size:20px;"><p>The World is listening</p></td>
	<td width = "3%" style = "text-align:right;"><a href = "about" style="text-decoration: none; color:black;"><h3>About</h3></a></td>
	</table>
</div>
		
	<table border = "0" id = "whole">
	<td width = "70%">
		<div id="country1" class="ui-grid-a">
			<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
			$query = "SELECT * FROM list WHERE username = 'United States'";
			$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
		?>
		</div><!--usa-->
		<div id="country2" class="ui-grid-a" style="display: none;">
			<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
			$query = "SELECT * FROM list WHERE username = 'China'";
			$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--china-->
		<div id="country3" class="ui-grid-a" style="display: none;">
			<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
			$query = "SELECT * FROM list WHERE username = 'India'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Amazon"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Amazon</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
					echo "<div class = 'ui-block-a' id = 'song_three'>";
					if ($rank < 10)
						echo "<img src = 'numbers/$rank.gif' width = 13.6%; />";
					else echo "<img src = 'numbers/$rank.gif' width = 18%; />";
					echo "<a href='".$row["Amazon"]."' target = 'blank' data-role='button' id = 'buy' span style='float:right' data-theme='a' data-inline = 'true' data-mini='true'>Get it on Amazon</a>";
					echo "<div class = 'video_three' ><iframe width='364' height='205' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></div>";
					echo "<div class = 'title'>".$row["SongName"]."</div>";
					echo "<div class = 'singer'>".$row["Singer"]."</div>";
					echo "</div>";
				}
				else if($rank% 2 == 1) {
					echo "<div class = 'ui-block-b' id = 'song_three'>";
					if ($rank < 10)
						echo "<img src = 'numbers/$rank.gif' width = 13.6%; />";
					else echo "<img src = 'numbers/$rank.gif' width = 18%; />";
					echo "<a href='".$row["Amazon"]."' target = 'blank' data-role='button' id = 'buy' span style='float:right' data-theme='a' data-inline = 'true' data-mini='true'>Get it on Amazon</a>";
					echo "<div class = 'video_three' ><iframe width='364' height='205' src='".$row["Youtube"]."' frameborder='0' allowfullscreen></iframe></div>";
					echo "<div class = 'title'>".$row["SongName"]."</div>";
					echo "<div class = 'singer'>".$row["Singer"]."</div>";
					echo "</div>";
				}
		}
		
?>
		</div><!--india-->
		
		
		<div id="country4" class="ui-grid-a" style="display: none;">
			<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());
			
			
		
			$query = "SELECT * FROM list WHERE username = 'South Korea'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--korea-->
		
	 <!--france-->
	  <div id="country5" class="ui-grid-a" style="display: none;">
	 		<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());			
			$query = "SELECT * FROM list WHERE username = 'France'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--france-->
		
		
		
		<!--germany-->
	  <div id="country6" class="ui-grid-a" style="display: none;">
	 		<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());			
			$query = "SELECT * FROM list WHERE username = 'Germany'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--germany-->
		
		
		<!--Taiwan-->
	  <div id="country7" class="ui-grid-a" style="display: none;">
	 		<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());			
			$query = "SELECT * FROM list WHERE username = 'Taiwan'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--taiwan-->
		
		
		<!--Taiwan-->
	  <div id="country8" class="ui-grid-a" style="display: none;">
	 		<?php
			mysql_connect ("mysql-user-master.stanford.edu","ccs147rxliu","DUVRcwnPDTHGhfty") or die ('Cannot connect to MySQL: ' . mysql_error());
			mysql_select_db ("c_cs147_rxliu") or die ('Cannot connect to the database: ' . mysql_error());			
			$query = "SELECT * FROM list WHERE username = 'Hong Kong'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
				$rank = $row["Ranking"];
				if ($rank == 1) {
				echo "<div class = 'no1' id = 'top'>";
				echo "<img src = 'numbers/$rank.gif' width = 10%;/>";
				echo "<a href='".$row["Itunes"]."' target = 'blank' data-role='button' span style='float:right' id = 'buy1' data-theme='a' data-inline = 'true' >Get it on Itunes</a>";
				echo "<div class = 'video'><iframe width='476' height='268' src='".$row["Youtube"]."' param name='wmode' value='transparent' frameborder='0' allowfullscreen></iframe></div>";
				echo "<div class = 'title1'>".$row["SongName"]."</div>";
				echo "<div class = 'singer1'>".$row["Singer"]."</div></div>";
				}
				else if($rank% 2 == 0) {
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
				else if($rank% 2 == 1) {
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
		}
		
?>
		</div><!--hk-->
	</td>
	
	
	
	
	
	<!----------------------------------------------------------flags---------------------------------------------------------------------------------->
	
	
	
	<td width = "30%" valign="top">
		<table border = "0" id = "stripe" >
		<tr>
		<td>
			<div class="flip-container highlight" id = "usa" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
					<img src = "flags/USA.png"  class = "cover"/></a>
						<p>United States</p>
					</div>
					<div class="back">	
					<img src = "albums/USA.png" class = "cover"/></a>
					<p>United States</p>
					</div>
				</div>
			</div>
		</td><!--usa-->
				<input type="radio" name="countries" checked="checked" value="1" style="visibility:hidden;position:absolute;top:0;left:0" />
			<script>
						
						$("#usa").click(function(e) {		
							$('input[value$="1"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');
						})				
						
			</script>
		<td>
			<div class="flip-container" id = "china" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img src = "flags/China.gif"  class = "cover"/></a>
						<p>China</p>
					</div>
					<div class="back">	
						<img src = "albums/China.jpg" class = "cover"/></a>
						<p>China<p>				
				</div>
			</div>
			</div>
		</td><!--china-->
			<input type="radio" name="countries" value="2" style="visibility:hidden;position:absolute;top:0;left:0" />
			<script>
						
						$("#china").click(function(e) {		
							$('input[value$="2"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');
						})				
						
			</script>
			<td>
			<div class="flip-container" id = "india" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img src = "flags/India.png"  class = "cover"/></a>
						<p>India</p>
					</div>
					<div class="back">	
						<img src = "albums/India.jpg" class = "cover"/> </a>
						<p>India</p>
					</div>
				</div>
			</div>
		</td><!--india-->
		<input type="radio" name="countries" value="3" style="visibility:hidden;position:absolute;top:0;left:0" />
			<script>
						
						$("#india").click(function(e) {		
							$('input[value$="3"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');
						})				
						
			</script><!--india-->
		</tr>
		<tr>
		<td>
			<div class="flip-container" id = "korea" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper"  >
					<div class="front">
						<img src = "flags/Korea.png"  class = "cover"/></a>
						<p>South Korea</p>
					</div>
					<div class="back">	
						<img src = "albums/Korea.jpg" class = "cover"/></a>
						<p>South Korea</p>
					</div>
				</div>
			</div>
		</td>
			<input type="radio" name="countries" value="4" style="visibility:hidden;position:absolute;top:0;left:0" />
		<script>
						$("#korea").click(function(e) {
							$('input[value$="4"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');							
						})				
						
		</script><!--korea-->
		<td>
			<div class="flip-container" id = "france" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img src = "flags/France.png" class = "cover"/></a>
						<p>France</p>
					</div>
					<div class="back">	
						<img src = "albums/France.jpg" class = "cover"/> </a>
						<p>France</p>
					</div>
				</div>
			</div>
		</td>
			<input type="radio" name="countries" value="5" style="visibility:hidden;position:absolute;top:0;left:0" />
		<script>
						$("#france").click(function(e) {
							$('input[value$="5"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');	
						})				
						
		</script><!--france-->
		<td>
			<div class="flip-container" id = "germany" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img src = "flags/Germany.gif"  class = "cover"/></a>
						<p>Germany</p>
					</div>
					<div class="back">	
						<img src = "albums/Germany.jpg" class = "cover"/> </a>
						<p>Germany</p>
					</div>
				</div>
			</div>
		</td>
		<input type="radio" name="countries" value="6" style="visibility:hidden;position:absolute;top:0;left:0" />
		<script>
						$("#germany").click(function(e) {
							$('input[value$="6"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');	
						})				
						
		</script><!--germany-->
		</tr>
		<tr>
			<td>
			<div class="flip-container" id = "taiwan" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front" >
						<img src = "flags/Taiwan.png"  class = "cover"/></a>
						<p>Taiwan</p>
					</div>
					<div class="back" >	
						<img src = "albums/Taiwan.jpg" class = "cover"/> </a>
						<p>Taiwan</p>
					</div>
				</div>
			</div>
		</td>
		<input type="radio" name="countries" value="7" style="visibility:hidden;position:absolute;top:0;left:0" />
		<script>
						$("#taiwan").click(function(e) {
							$('input[value$="7"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');	
						})				
						
		</script><!--taiwan-->
			
		<td>
			<div class="flip-container" id = "hk" ontouchstart="this.classList.toggle('hover');">
				<div class="flipper">
					<div class="front">
						<img src = "flags/Hong Kong.png"  class = "cover"/></a>
						<p>Hong Kong</p>
					</div>
					<div class="back">	
						<img src = "albums/Hong Kong.jpg" class = "cover"/> </a>
						<p>Hong Kong</p>
					</div>
				</div>
			</div>
		</td>
		<input type="radio" name="countries" value="8" style="visibility:hidden;position:absolute;top:0;left:0" />
		<script>
						$("#hk").click(function(e) {
							$('input[value$="8"]').click();
							$('div.flip-container').removeClass('highlight');
							$(this).addClass('highlight');	
						})				
						
		</script><!--hk-->
		</tr>
	</table><!--videos-->
		</td>
		
		

	
	</table> <!--whole-->
	</div><!--page-->


<script>
$(document).ready(function() {
    $("input[name$='countries']").click(function() {
        var test = $(this).val();

        $("div.ui-grid-a").hide();
        $("#country" + test).show();
    });
});
</script>


</body>
</html>