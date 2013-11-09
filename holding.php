<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculator</title>
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
				<h1>The Amazing Calculator</h1>
				<h2>Built to exhibit my abilities in Less.css, Bootstrap and Ember.js.</h2>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<!--Left Div-->
			<div class="col-md-4">
				<p>First column</p>
				
			</div>
			
			<!--Begin Calculator Div-->
			<div class="col-md-8 .col-sm-pull-1">
				<div class="calculator_body">
					
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1" id="calc_display">
							Testing
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
						<div class="col-xs-2 col-xs-offset-1">
							<div class="calc_button" id="backspace">
								<strong>&larr;</strong>
							</div>
						</div>	
						<div class="col-xs-2">
							<div class="calc_button" id="CE">
								CE
							</div>	
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="C">
								C
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="pos_neg" alt="stateChanger">
								-/+
							</div>
						</div>
						<div class="col-xs-2">
							<div class="calc_button" id="SqRt">
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
							<div class="calc_button" id="percentage" alt="stateChanger">
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
							<div class="calc_button" id="fraction" alt="stateChanger">
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
							<div class="calc_button" id="equals" alt="stateChanger">
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
				<h3>Thank you for your consideration.</h3>
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
            var counter = 1;
            
            function equation() {
            	this.currentNumber = {};            	
            	this.currentNumber.id = 0;
        		this.currentNumber.value = new Array(0);
        		this.currentNumber.compiledValue = null;
        		this.currentNumber.column = 0;
        		this.currentNumber.isNumber = function(id) {
	        		if (!isNaN(id) || id == '.') {
	        			return true;
	        		} else {
	        			return false;
	        		};
	        	};
	        	this.currentNumber.operator = null;
	        	this.currentNumber.stateChanger = function(alt){ 
	        		if (alt == 'stateChanger'){
	        			return true;
	        		} else {
	        			return false;
	        		}
	        	};
	            this.lastNumber = {};
	            this.lastNumber.operator = null;
				this.lastNumber.value = 0;
				this.runningTotal = function(lastValue, currentValue, operator){
					switch (operator) {
						case 'divide':
						
							var result= lastValue/currentValue;
							return result;							
						case 'multiply':
							var result= lastValue * currentValue;
							return result;							
						case 'minus':
							var result= lastValue - currentValue;
							return result;							
						case 'plus':
							var result = lastValue + currentValue;
							return result;							

//Only affects current value.  This means current value needs to be returned immediately, prior to proceeding with calculation.

						case 'percentage':
							if(lastValue == 0){
								return 0;
							} else {
								var perc= lastValue * (currentValue/100);
								
								return thisEquation.runningTotal(lastValue, perc, operator);
							}							

						case 'fraction':
					//Will need to reset
											
							var result= lastValue - currentValue;
							return result;							
						case 'pos_neg':
							result = currentValue * -1; 
							return result;							
						case 'SqRt':
					//Will need to reset
						
						var result= lastValue - currentValue;
						return result;							
					
						case 'equals':
						//Will need to reset
						
							var result= lastValue - currentValue;
							return result;
 					};
				};
            }
			
			var thisEquation = new equation();
			
            //On Mousedown 
            $(document).on( 'mousedown', '.calc_button', function () {
	            $(this).addClass( "shadows_down" );
	        	
	        	var buttonValue = $(this).attr('id');
	        	if (buttonValue == 'decimal'){buttonValue = '.'}
	        	
	        	thisEquation.currentNumber.type = buttonValue;
	        	var isNumber = thisEquation.currentNumber.isNumber(buttonValue);
	        	var stateChanger = thisEquation.currentNumber.stateChanger($(this).attr('alt'));
	        	
	        	if(!isNumber){
        		//If not a number:
        		console.log("Not a number.");
	        		if(thisEquation.lastNumber.operator == null && thisEquation.currentNumber.compiledValue == null) {
	        		console.log('No operator or number has been entered.');
	        			thisEquation.currentNumber.operator = buttonValue;
	        		} else if(thisEquation.lastNumber.operator == null && thisEquation.currentNumber.compiledValue != null) {
	        			console.log('First operator entered. ');
	        			console.log("Move last operator " + thisEquation.currentNumber.operator + " to secondary spot, and introduce new operator " + buttonValue + " to the primary spot.")
	        			thisEquation.lastNumber.operator = thisEquation.currentNumber.operator;
	        			thisEquation.currentNumber.operator = buttonValue;
	        			thisEquation.lastNumber.value = thisEquation.currentNumber.compiledValue;
						thisEquation.currentNumber.column = 0;
	        		} else { 
	        		//If there is an operation waiting to execute, the .lastNumber.operator will be set:
	        		console.log("Execute input equation.");
	        		
	        		
	        		var runningTotal = thisEquation.runningTotal(parseFloat(thisEquation.lastNumber.value), thisEquation.currentNumber.compiledValue, thisEquation.lastNumber.operator);   			        		
		        	console.log("Running total: " + runningTotal);
	        		//Output to display:   		
		        		$('#calc_display').html(runningTotal);
	        			        		
	        		//Clear currentNumber.value array, then input result of equation:
	        			thisEquation.currentNumber.value = new Array;
	        			thisEquation.currentNumber.value[0] = runningTotal;
	        			console.log("Running Total: " + runningTotal);
	        			thisEquation.currentNumber.column = 0;
	        		}
	        	} else {
	        	//If entry is a number:
				console.log("Entry is a number.");
	        		if(thisEquation.currentNumber.column == 0) {
	        		//If display is at zero, overwrite with new numeric entry:
	        		console.log("First number input.");
	        			thisEquation.currentNumber.value[0] = buttonValue;
	        			thisEquation.currentNumber.compiledValue = buttonValue;
	        			thisEquation.currentNumber.column++;
	        			
					} else {
	        		//If a number had been entered, and no operator had been entered, add number to end of currentValue:
	        		console.log("Added digit to end of number");
	        			
						thisEquation.currentNumber.value[thisEquation.currentNumber.column] = buttonValue;
						console.log('This number is ' + (thisEquation.currentNumber.column + 1) + ' long.  Just added to the ones column: ' + thisEquation.currentNumber.value[thisEquation.currentNumber.column]);
	        			thisEquation.currentNumber.column++;
						
						thisEquation.currentNumber.compiledValue = parseFloat(thisEquation.currentNumber.value.toString().replace(/,/g, ''));
	        			console.log("compiled number: " + thisEquation.currentNumber.compiledValue);
	        		};
	        		
	        		//Adjust display:
	        		$('#calc_display').html(thisEquation.currentNumber.compiledValue);
	        			
	        	}
	        	
	        	// console.log('\nAfter click' + counter + ': ');
	        	// console.log("lastValue: " + thisEquation.lastNumber.value);
	        	// console.log("previous operator (just used): " + thisEquation.lastNumber.operator);
	        	// console.log("currentValue: " + thisEquation.currentNumber.value);
	        	// console.log("current operator (not yet used): " + thisEquation.currentNumber.operator);
	        	// counter++;
            });
            
            
            //On Mouseup
            $(document).on( 'mouseup mouseout', '.calc_button', function () {
            	$(this).removeClass( "shadows_down" );
            });        	

        </script>
    </body>
</html>
