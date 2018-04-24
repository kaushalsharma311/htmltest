<html>
    <head>
        <title>Dashboard</title>
		<script src='js/jquery-1.7.1.min.js' type='text/javascript'></script>
		<script src="js/jspdf.js" type='text/javascript'></script>
		<script src='js/jspdf.debug.js' type='text/javascript'></script>
		<script src='js/html2canvas.js' type='text/javascript'></script>
		<link type="text/css" rel="stylesheet" href="css/style.css">


        <script type="text/javascript">
            function HTMLtoPDF() {
                var doc=new jsPDF();
                doc.fromHTML($('#HTMLtoPDF').get(0),20,20,{'width':500});
                doc.save('report.pdf');
            }
        </script>
		<script type="text/javascript">
            function screenshot() {
					html2canvas(document.body).then(function(canvas) {
					document.body.appendChild(canvas);
					});
				}
        </script>
		<script type="text/javascript">
            function print() {
					var element = document.getElementById('#HTMLtoPDF');
					var report = powerbi.get(element);

					element.print().catch(function (errors) { Log.log(errors); });
				}
        </script>
	</head>
    <body>
		<div class="header">
			<img class="mckessonlogo" src="images/mckesson.jpg" />
			<div class="header-list">
				<pre class="text">Help | Contact Us | Sign Out</pre>
			</div>
			<h4 class="name">Welcome<br>Kaushal Sharma</h4>
		</div>
		<div class="blue-header">
			<h1 class="header-text"><?php if ($_GET["d"]==1){echo "GPO Sales Analysis";}
								   elseif($_GET["d"]==2){echo "Customer Profitability";}
								   elseif ($_GET["d"]==3){echo "Human Resources";}
								   elseif ($_GET["d"]==4){echo "IT Spend Analysis";}
								   elseif ($_GET["d"]==5){echo "Opportunity Analysis";} ?></h1>
		</div>
        <div class="iframe">
			<?php if ($_GET["d"]==1){echo '<iframe width="100%" height="600px" src="https://app.powerbi.com/view?r=eyJrIjoiNzdiOTU5OGQtMzdkMy00MWM2LWEwZTYtOTIxM2ZlNDE3YmE2IiwidCI6ImRhNjdlZjFiLWNhNTktNGRiMi05YThjLWFhOGQ5NDYxN2ExNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>';}
				  elseif ($_GET["d"]==2){echo '<iframe width="100%" height="600px" src="https://app.powerbi.com/view?r=eyJrIjoiODM2YTE1ZGYtZmMzYS00YWMyLWFkNjYtNTliOTNkYjhkODRjIiwidCI6ImRhNjdlZjFiLWNhNTktNGRiMi05YThjLWFhOGQ5NDYxN2ExNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>';}
				  elseif ($_GET["d"]==3){echo '<iframe width="100%" height="600px" src="https://app.powerbi.com/view?r=eyJrIjoiZDkxZTRkOWMtZWEzZS00MTEwLWFlZGYtN2NlZmI0OWIxMmRmIiwidCI6ImRhNjdlZjFiLWNhNTktNGRiMi05YThjLWFhOGQ5NDYxN2ExNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>';}
				  elseif ($_GET["d"]==4){echo '<iframe width="100%" height="600px" src="https://app.powerbi.com/view?r=eyJrIjoiMzAzMTU3ZTktMmRmOC00ZTQwLTg3ZGItYTAzZGZjNjk5MTQ2IiwidCI6ImRhNjdlZjFiLWNhNTktNGRiMi05YThjLWFhOGQ5NDYxN2ExNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>';}
				  elseif ($_GET["d"]==5){echo '<iframe width="100%" height="600px" src="https://app.powerbi.com/view?r=eyJrIjoiNzRlNGQ0OWYtNGE5ZS00Yjc4LWIwZjEtMTIxNzIwMDJlMDI2IiwidCI6ImRhNjdlZjFiLWNhNTktNGRiMi05YThjLWFhOGQ5NDYxN2ExNiIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>';} ?>
        </div>
		<div class="button">
			<button onclick="HTMLtoPDF()">Subscribe</button>
			<button onclick="print()">Print</button>
		</div>
		<div class="footer">
			<b class="footer-text">Developed by : McKesson Data Insights and Automation Team</b>
		</div>
    </body>
</html>
