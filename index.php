<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculatastic</title>
        <meta name="description" content="A calculator built using Less and Bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet/less" type="text/css" href="css/styles.less" />
        
        <?php 
			if(substr( $_SERVER['HTTP_HOST'], 0, 4 ) == 'dev.') { ?>
				<script type="text/javascript" src="js/jquery-1.10.2.min.js" charset="utf-8"></script>
			<?php } else { ?>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<? }
		?>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700|Aldrich' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/less.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
	<header class="page-header">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1>Calculatastic</h1>
				<h2>Built by use of Less.css, Twitter Bootstrap and Object Oriented JavaScript.</h2>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<!--Left Div-->
			<div class="col-md-4">
				<h3>Note that this text jumps above the right when the screen shrinks to mobile proportions.  
					This, and the calculator button layout are products of Bootstrap.</h3>
				<h3>Please feel free to check out the source on <a href="https://github.com/JohnMealy23/calculatastic.git">Github</a>.</h3>
				
			</div>
			
			<!--Begin Calculator Div-->
			<div class="col-md-8 .col-sm-pull-1">
				<div class="calculator_body">
					
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1" id="calc_display">
							0
						</div>
					</div>
				
				<!--
					<div class="row">
						<div class="col-xs-2 col-xs-offset-1">
							<div class="calc_button" id="MC">
								MC
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button" id="MC">
								MC
							</div>	
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="MC">
								MC
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="MC">
								MC
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="MC">
								MC
							</div>
						</div>
					</div>
				-->
									
					<div class="row">
						<div class="col-xs-3 col-xs-offset-1">
							<div class="alt_button" id="backspace">
								<strong>&larr;</strong>
							</div>
						</div>	
						<!--
						<div class="col-xs-2">
							<div class="alt_button" id="CE">
								CE
							</div>	
						</div>
						-->
						<div class="col-xs-3">
							<div class="alt_button" id="C">
								C
							</div>
						</div>
						<div class="col-xs-2">
							<div class="alt_button" id="pos_neg">
								-/+
							</div>
						</div>
						<div class="col-xs-2">
							<div class="alt_button" id="SqRt">
								&radic;
							</div>
						</div>
					</div>	
					
					<div class="row">
						<div class="col-xs-2 col-xs-offset-1">
							<div class="calc_button number_button" id="7">
								7
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button number_button" id="8">
								8
							</div>	
						</div>
						<div class="col-xs-2">
							<div class="calc_button number_button" id="9">
								9
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="divide">
								/
							</div>
						</div>
						<div class="col-xs-2">
							<div class="alt_button" id="percentage">
								%
							</div>
						</div>
					</div>
										
					<div class="row">
						<div class="col-xs-2 col-xs-offset-1">
							<div class="calc_button number_button" id="4">
								4
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button number_button" id="5">
								5
							</div>	
						</div>
						<div class="col-xs-2">
							<div class="calc_button number_button" id="6">
								6
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="multiply">
								*
							</div>
						</div>
						<div class="col-xs-2">
							<div class="alt_button" id="fraction">
								1/*
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-2 col-xs-offset-1">
							<div class="calc_button number_button" id="1">
								1
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button number_button" id="2">
								2
							</div>	
						</div>
						<div class="col-xs-2">
							<div class="calc_button number_button" id="3">
								3
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="minus">
								-
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button rowSpan" id="equals">
								=
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xs-4 col-xs-offset-1">
							<div class="calc_button number_button" id="0">
								0
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button number_button" id="decimal">
								.
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="plus">
								+
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="row">
			<div class="col-md-8 col-xl-6 col-md-offset-1">
				<h3>Thank you for your time.</h3>
			</div>
		</div>
	</footer>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>');</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
        
        
        <script>
   	

        </script>
    </body>
</html>
