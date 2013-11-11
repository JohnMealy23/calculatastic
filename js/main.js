// //Google font import:
  // WebFontConfig = {
    // google: { families: [ 'Noto+Sans:400,700:latin', 'Aldrich::latin' ] }
  // };
  // (function() {
    // var wf = document.createElement('script');
    // wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      // '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    // wf.type = 'text/javascript';
    // wf.async = 'true';
    // var s = document.getElementsByTagName('script')[0];
    // s.parentNode.insertBefore(wf, s);
  // })(); 
//   
 

            function equation() {
            	this.startOver = false;
				this.currentNumber = "";
				this.currentOperator = null;
				this.lastOperator = null;
				this.runningTotal = 0;
				this.isNumber = function(id) {
	        		if (!isNaN(id) || id == '.') {
	        			return true;
	        		} else {
	        			return false;
	        		};
	        	};  
	        	this.doTheMath = function(lastValue, currentValue, operator){
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
					};
				};
				this.adjustValue = function(id) {
					switch(id){
						case 'percentage':
							if(thisEquation.runningTotal == 0){
								return thisEquation.currentNumber;
							} else {
								var perc= thisEquation.currentNumber * (thisEquation.runningTotal/100);
								return perc;
							};							
						case 'fraction':											
							var result= 1/thisEquation.currentNumber;
							return result;							
						case 'pos_neg':
							result = thisEquation.currentNumber * -1; 
							return result;							
						case 'SqRt':
							thisEquation.startOver = true;
							if(thisEquation.currentNumber > 0) {
								var result= Math.sqrt(thisEquation.currentNumber);
								return result;	
							} else {
								return "0";
							}
						case 'C':
							thisEquation = new equation();
							return "0";
						case 'backspace':
							if(thisEquation.currentNumber.toString().length < 2) {
								console.log("Number is only one digit.")
								return "0";
							} else {
								newLength = thisEquation.currentNumber.toString().length - 1;
								console.log("New Length: " + newLength)
								return thisEquation.currentNumber.toString().slice(0, newLength)
							}
 					};
 				};
            };
                        
            var thisEquation = new equation();
            
            $(document).on( 'mousedown', '.alt_button', function () {
	            $(this).addClass( "shadows_down" );
	            var buttonValue = $(this).attr('id');
				$('#calc_display').html(thisEquation.currentNumber = thisEquation.adjustValue(buttonValue));
	         });
	        
             //On Mousedown 
            $(document).on( 'mousedown', '.calc_button', function () {
	            $(this).addClass( "shadows_down" );
	        	
	        	var buttonValue = $(this).attr('id');
	        	if (buttonValue == 'decimal'){buttonValue = '.'};
	        	var isNumber = thisEquation.isNumber(buttonValue);
	        	
	        	if(isNumber) {
		      		if(thisEquation.startOver == true) {
		      			console.log("Startover was triggered");
		      			thisEquation.adjustValue("C");
		      		};
	        		//Acquire a new number:
	        		console.log("A digit was pressed. It's value is '" + buttonValue + "'.");
	        		console.log("CurrentNumber: " + thisEquation.currentNumber.toString());
	        		console.log("Length of number: " + thisEquation.currentNumber.length);
	        		if(buttonValue == '.'){
	        			if( thisEquation.currentNumber.toString().search(/\./) == -1){
	        				thisEquation.currentNumber = thisEquation.currentNumber + ".";
	        			};
	        		} else if(thisEquation.currentNumber == 0) {
	        			console.log("This is the first digit to be pressed. It'll be inserted into the currentNumber.")
	        			thisEquation.currentNumber = buttonValue.toString();
	        		} else if(thisEquation.currentNumber != 0) {
	        			console.log("Add a digit to the end of the current number.")
	        			thisEquation.currentNumber = thisEquation.currentNumber.toString() + buttonValue.toString();
	        			console.log("New number: " + thisEquation.currentNumber + ".");
	        		};
	        		$('#calc_display').html(thisEquation.currentNumber);
	        		console.log("Number updated.")
	        		
	        	} else {
	        		//Apply the new number to the existing value:
	        		console.log("An operator was pressed. It's value is " + buttonValue + ".");
	        		console.log("Last operator: " + thisEquation.lastOperator + ".");
	        		thisEquation.lastOperator = parseFloat(thisEquation.currentOperator);

	        		if (thisEquation.currentOperator == null && buttonValue != "equals") {
	        			console.log("No operators have been entered previously. " + buttonValue + " is the first operator.")
	        			console.log("No previous operator existed. " + buttonValue + " is being entered now.");
	        			thisEquation.currentOperator = buttonValue;
	        			thisEquation.runningTotal = parseFloat(thisEquation.currentNumber);
	        			thisEquation.currentNumber = "0";
	        			thisEquation.startOver = false;

	        		} else if(thisEquation.lastOperator != null) {
	        			console.log("A second operator was pressed. Execute initial operation.");
	        			console.log(thisEquation.runningTotal + thisEquation.lastOperator + thisEquation.currentNumber);
	        			thisEquation.lastOperator = thisEquation.currentOperator;
	        			thisEquation.currentOperator = buttonValue;
	        			thisEquation.runningTotal = thisEquation.doTheMath(thisEquation.runningTotal, thisEquation.currentNumber, thisEquation.lastOperator);
	        			$('#calc_display').html(thisEquation.runningTotal.toString());
	        			thisEquation.currentNumber = "0";
	        			if(buttonValue == "equals") {
	        				console.log("If an equals was used as an operator, clear the operators while retaining the total.")
							var a = thisEquation.runningTotal;
							thisEquation.adjustValue('C');
							thisEquation.currentNumber = a;
							thisEquation.startOver = true;
        				}	
	        		}
	        	}
	        });
            
            //On Mouseup
            $(document).on( 'mouseup mouseout', '.calc_button, .alt_button', function () {
            	$(this).removeClass( "shadows_down" );
            });     