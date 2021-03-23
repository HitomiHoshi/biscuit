<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

mysql_connect($servername, $username, $password) or die ("Connection failed");
mysql_select_db($dbname) or die ("Could not find db");
$output = '';

//collect data
	
	$searchq = array("respect","aman","sayang","integriti","ceria","seronok","kasih","love","tahniah","sihat","cantik","betina","anjing","babi","cilaka","cilake","idiot","fuck","kote","songlap","cinabeng","lies","penipu","bohong","tipu","not","great","boo","trick","tak guna","kurang baik","jilake","not bad","bad","bagus juga","bagus","baik", "kejam", "good", "jahat", "gila", "giler", "bodoh", "bijak", "tak", "samun", "shit","jgn","mampus","mati", "Alhamdulillah", "syukur", "pandai", "bantu", "concern", "care", "helpful");
	$counts=count($searchq);
	
	$searchp=array("respect","amin","sayang","integriti","ceria","seronok","kasih","love","tahniah","sihat","cantik","great","not bad","bagus","baik", "good", "bijak", "Alhamdulillah", "syukur", "pandai", "bantu", "concern", "care", "helpful");
	$countp=count($searchp);
	
	$searchn=array("betina","anjing","babi","cilaka","cilake","idiot","fuck","kote","songlap","cinabeng","lies","penipu","bohong","tipu","not","boo","trick","tak guna","kurang baik","jilake","bad","jahat","kejam","gila", "giler", "bodoh", "tak", "samun", "shit","jgn","mampus","mati");
	$countn=count($searchn);
	
	$num=array();
	
	$cnp=0;
	$cnn=0;
	$totaln=0;
	
	$cmp=0;
	$cmn=0;
	$totalm=0;
	
	$czp=0;
	$czn=0;
	$totalz=0;
	
	$clp=0;
	$cln=0;
	$totall=0;
	
	$cwp=0;
	$cwn=0;
	$totalw=0;
	
	$cap=0;
	$can=0;
	$totala=0;
	
	for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM najib WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$cnp=$cnp+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$cnn=$cnn+$num[$i];
			}
		}
	}
	 $outputn .= '<div> Positive: '.$cnp.' </div>';
	 $outputn .= '<div> Negative: '.$cnn.' </div>';
	 $totaln=$cnp+$cnn;

	 for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM maslan WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];		 
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$cmp=$cmp+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$cmn=$cmn+$num[$i];
			}
		}
	}
	
	 $outputm .= '<div> Positive: '.$cmp.' </div>';
	 $outputm .= '<div> Negative: '.$cmn.' </div>';
	 $totalm=$cmp+$cmn;
	 
	 for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM zahid WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];		 
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$czp=$czp+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$czn=$czn+$num[$i];
			}
		}
	}
	
	 $outputz .= '<div> Positive: '.$czp.' </div>';
	 $outputz .= '<div> Negative: '.$czn.' </div>';
	 $totalz=$czp+$czn;
	 
	 for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
		//$searchq[$i] = preg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM lim WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$clp=$clp+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$cln=$cln+$num[$i];
			}
		}
	}
	
	 $outputl .= '<div> Positive: '.$clp.' </div>';
	 $outputl .= '<div> Negative: '.$cln.' </div>';
	 $totall=$clp+$cln;
	 
	 for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
		//$searchq[$i] = preg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM wan WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$cwp=$cwp+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$cwn=$cwn+$num[$i];
			}
		}
	}
	
	 $outputw .= '<div> Positive: '.$cwp.' </div>';
	 $outputw .= '<div> Negative: '.$cwn.' </div>';
	 $totalw=$cwp+$cwn;
	 
	 for($i=0; $i<$counts; $i++)
	{
		$searchq[$i] = ereg_replace("#[^0-9a-z]#i","",$searchq[$i]);
		//$searchq[$i] = preg_replace("#[^0-9a-z]#i","",$searchq[$i]);
	
		$query = mysql_query("SELECT * FROM azmin WHERE word LIKE '%$searchq[$i]%'") or die("could not search");

		$count = mysql_num_rows($query);
		while($row = mysql_fetch_array($query)){
			$word = $row['Word'];
		}
		
		$num[$i]=$count;
		
		for($j=0; $j<$countp; $j++)
		{
			if($searchq[$i]==$searchp[$j])
			{
				$cap=$cap+$num[$i];
			}
		}
		
		for($r=0; $r<$countn; $r++)
		{
			if($searchq[$i]==$searchn[$r])
			{
				$can=$can+$num[$i];
			}
		}
	}
	
	 $outputa .= '<div> Positive: '.$cap.' </div>';
	 $outputa .= '<div> Negative: '.$can.' </div>';
	 $totala=$cap+$can;
	 
	 /*for($i=0; $i<$counts; $i++)
	 {
		$outputn .= '<div> '.$searchq[$i].': '.$num[$i].' </br>Date: '.$date.'</div>';
	 }*/
	 //$np=($cnp/$totaln)*100;
	 //$jp=($cjp/$totalj)*100;
	 //$lp=($clp/$totall)*100;
	 //$dp=($cdp/$totald)*100;
//$conn->close();
?>  

<!DOCTYPE html>
<html<html lang="en">
<head>
<title>Sentiment Analysis</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href = "project4.php">
  <link rel="stylesheet" href="project.css">


  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {            
      title:{
        text: "Sentiment Analysis based on public perspective"              
      },

      data: [  //array of dataSeries     
      { //dataSeries - first quarter
 /*** Change type "column" to "bar", "area", "line" or "pie"***/        
       type: "column",
       name: "Positive",
       showInLegend: true,
	   dataPoints: [
       { label: "NAJIBRAZAK", y:  <?php echo $cnp; ?>  },
       { label: "DATUK.AHMAD.MASLAN", y:  <?php echo $cmp; ?>  },
       { label: "ZAHIDHAMIDIFC", y:  <?php echo $czp; ?>  },
	   { label: "CMLIMGUANENG", y:  <?php echo $clp; ?>  },
	   { label: "DRWAWI", y:  <?php echo $cwp; ?>  },
	   { label: "MOHAMEDAZMINALI", y:  <?php echo $cap; ?>  }
	   ]
     },
	 
     { //dataSeries - second quarter

      type: "column",
      name: "Negative", 
      showInLegend: true,               
      dataPoints: [
       { label: "NAJIBRAZAK", y:  <?php echo $cnn; ?>  },
       { label: "DATUK.AHMAD.MASLAN", y:  <?php echo $cmn; ?>  },
       { label: "ZAHIDHAMIDIFC", y:  <?php echo $czn; ?>  },
	   { label: "CMLIMGUANENG", y:  <?php echo $cln; ?>  },
	   { label: "DRWAWI", y:  <?php echo $cwn; ?>  },
	   { label: "MOHAMEDAZMINALI", y:  <?php echo $can; ?>  }
       ]
    }
    ],
 /** Set axisY properties here*/
    axisY:{
      prefix: " ",
      suffix: " "
    }    
  });

chart.render();
}
//</script>
<script type="text/javascript" src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
<div class="container-fluid bg-1 text-center">
	<h1 class="margin">PUBLIC'S PERSPECTIVE TOWARDS MALAYSIA POLITICAL LEADERS ON OFFICIAL FACEBOOK PAGE</h1>

	<div class="container-fluid bg-3 text-center">  

		<div class="container-fluid bg-2 text-center">
			<div class="row">
				<div class="col-sm-4">
					<p>NAJIBRAZAK</p>
					<?php print("$outputn");?>
				</div>
	
				<div class="col-sm-4">
					<p>DATUK.AHMAD.MASLAN</p>
					<?php print("$outputm");?>
				</div>
		
				<div class="col-sm-4">
					<p>ZAHIDHAMIDIFC</p>
					<?php print("$outputz");?>
				</div>
			</div>
			</br>
			<div class="row">
				<div class="col-sm-4">
					<p>CMLIMGUANENG</p>
					<?php print("$outputl");?>
				</div>
	
				<div class="col-sm-4">
					<p>DRWAWI</p>
					<?php print("$outputw");?>
				</div>
		
				<div class="col-sm-4">
					<p>MOHAMEDAZMINALI</p>
					<?php print("$outputa");?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid bg-1 text-center">
	<div id="chartContainer" style="height: 400px; width: 100%; ">

	</div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p> Made By <a href="http://localhost/main/page2.html">SERAPHIRE</a></p> 
</footer>

</body>
</html>