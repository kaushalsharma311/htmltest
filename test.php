<html>
    <head>
        <title>Dashboard</title>
	</head>
    <body>
			<?php 
			echo "asd";
			if($_GET["d"]==1){echo "Customer Profitability";}
								   elseif ($_GET["d"]==2){echo "Human Resources";}
								   elseif ($_GET["d"]==3){echo "IT Spend Analysis";}
								   elseif ($_GET["d"]==4){echo "Opportunity Analysis";}
									else {echo $_GET["d"];} ?>
    </body>
</html>
