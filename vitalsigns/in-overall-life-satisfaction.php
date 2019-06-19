<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>2017 Vital Signs - Overall life satisfaction</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/custom.css" rel="stylesheet" type="text/css">
<!-- loads the wf-loading class right away to minimize FOUT -->
<script>document.documentElement.className += ' wf-loading';</script>
<!-- Font PRENTON TYPEKIT -->
<script src="https://use.typekit.net/srt5jze.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--><script>  navSelected = 6;  subNavSelected = 25;
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script> 
		// set to zero to indicate this isn't that kind of page. Used for if statement to run either VS or IN code
		var whatVS = 0; 
		var whatIN = "in-overall-life-satisfaction.json";
	</script>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include '../includes/modal-inc.html';?>
<!-- START IMAGE HEADER --> 
 
<div class="container-fluid  page-content padding-50-bottom">
	<div class="row">
		<div class="col-sm-10 padding-20-top padding-0-left">
<h1>&nbsp;</h1>
			</div>
		<div class="col-sm-2 padding-20-top"></div>
	</div>
	
	<div class="row"> 
		<div class="col-sm-3">
			<div class="nav-leftside-custom">
				<ul class="nav nav-stacked nav-pills nav-leftside-custom padding-left-0 margin-10-top">
<?php include 'includes/ln-vital.html';?>
				</ul>
			</div>
			<div><br>
<br>
				<div class="no-icon"><a href="http://www.psp.wa.gov/evaluating-PSEMP.php"><img class="img-responsive" src="images/vitalsigns/logos/PSEMP.png" alt="" width="260" height="86" title="PSEMP logo"/></a><br><br></div>
</div>
		</div>
		 
		<div class="col-sm-7 padding-20-top content-column">
<?php include 'includes/in-content.html';?>
		<script src="js/vital.js"></script>		</div>
		
		
		
		
		<div class="col-sm-2 padding-20-top padding-0-right"> </div>
		</div>
	<!--END OF ROW --> 
</div>
<!--END OF CONTENT CONTAINER -->

<?php include 'includes/footer-inc.html';?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<!-- custom js --> 
<script src="js/custom.js"></script> 
<!-- Google Tracking  --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69373425-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
