//Google font import:
  WebFontConfig = {
    google: { families: [ 'Noto+Sans:400,700:latin', 'Aldrich::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
  
 

function equation() {
	this.startOver = false;
	this.currentNumber = "0";
	this.currentOperator = null;
	this.lastOperator = null;
	this.runningTotal = 0;
	this.numberEntered = true;
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
					processEquation("equals");
					return perc;
				};							
			case 'fraction':											
				var result= 1/thisEquation.currentNumber;
				return result;							
			case 'pos_neg':
				result = thisEquation.currentNumber * -1; 
				return result;							
			case 'SqRt':
				if(thisEquation.currentNumber > 0) {
					if(thisEquation.runningTotal != 0) {
						processEquation("equals");
					} 
					var result= Math.sqrt(thisEquation.currentNumber);
					return result;	
				} else {
					return "0";
				}
			case 'C':
				thisEquation = new equation();
				return "0";
			case 'CE':
				return "0";
			case 'backspace':
				if(thisEquation.currentNumber.toString().length < 2) {
					console.log("Number is only one digit.");
					return "0";
				} else {
					newLength = thisEquation.currentNumber.toString().length - 1;
					console.log("New Length: " + newLength);
					return thisEquation.currentNumber.toString().slice(0, newLength);
				}
		};
	};
};
            
var thisEquation = new equation();

$(document).on( 'mousedown', '.alt_button', function () {
    $(this).addClass( "shadows_down" );
    var buttonValue = $(this).attr('id');
    var processNumber = thisEquation.adjustValue(buttonValue).toString();
    thisEquation.currentNumber = processNumber;
	$('#calc_display').html(thisEquation.currentNumber);
 });

 //On Mousedown 
$(document).on( 'mousedown', '.calc_button', function () {
    $(this).addClass( "shadows_down" );
	
	var buttonValue = $(this).attr('id');
	if (buttonValue == 'decimal'){buttonValue = '.';};
	var isNumber = thisEquation.isNumber(buttonValue);
	
	if(isNumber) {
  		if(thisEquation.startOver == true) {
  			console.log("Startover was triggered");
  			thisEquation.adjustValue("C");
  			thisEquation.startOver = false;
  		};
  		thisEquation.currentNumber = thisEquation.currentNumber.toString();
		
		//Acquire a new number:
		console.log("CurrentNumber: " + thisEquation.currentNumber.toString());
		console.log("A digit was pressed. It's value is '" + buttonValue + "'.");
		if(buttonValue == '.'){
			if( thisEquation.currentNumber.toString().search(/\./) == -1){
				thisEquation.currentNumber = thisEquation.currentNumber + ".";
			};
		} else if(thisEquation.currentNumber == "0") {
			console.log("This is the first digit to be pressed. It'll be inserted into the currentNumber.");
			thisEquation.currentNumber = buttonValue.toString();
		} else if(thisEquation.currentNumber != "0") {
			console.log("Add a digit to the end of the current number.");
			thisEquation.currentNumber = thisEquation.currentNumber + buttonValue.toString();
			console.log("New number: " + thisEquation.currentNumber + ".");
		};
		$('#calc_display').html(thisEquation.currentNumber);
		thisEquation.numberEntered = true;

	} else {
		//Apply the new number to the existing value:
		if(thisEquation.numberEntered == true) {
			thisEquation.lastOperator = thisEquation.currentOperator;
			if (thisEquation.currentOperator == null && buttonValue != "equals") {
				console.log("No operators have been entered previously. " + buttonValue + " is the first operator.");
				progressEquation(buttonValue);
			} else if(thisEquation.lastOperator != null) {
				console.log("A second operator was pressed. Execute initial operation.");
				processEquation(buttonValue);	
			}
		} else {
			thisEquation.currentOperator = buttonValue;
		};
		
	}
					testing(buttonValue);
});

function progressEquation(buttonValue) {	
	thisEquation.currentNumber = parseFloat(thisEquation.currentNumber);
	console.log("No previous operator existed. " + buttonValue + " is being entered now.");
	thisEquation.currentOperator = buttonValue;
	thisEquation.runningTotal = parseFloat(thisEquation.currentNumber);
	thisEquation.currentNumber = "0";
	thisEquation.startOver = false;
	thisEquation.numberEntered = false;
}

function processEquation(buttonValue) {
		thisEquation.currentNumber = parseFloat(thisEquation.currentNumber);
		thisEquation.lastOperator = thisEquation.currentOperator;
		thisEquation.currentOperator = buttonValue;
		thisEquation.runningTotal = thisEquation.doTheMath(thisEquation.runningTotal, thisEquation.currentNumber, thisEquation.lastOperator);
		$('#calc_display').html(thisEquation.runningTotal.toString());
		thisEquation.currentNumber = "0";
		if(buttonValue == "equals") {
			console.log("Equals was used as an operator. Clear the operators while retaining the total.");
			var a = thisEquation.runningTotal;
			thisEquation.adjustValue('C');
			thisEquation.currentNumber = a;
			thisEquation.startOver = true;
			thisEquation.numberEntered = true;
		}
};

$(document).on( 'mousedown', '.tester', function () {
	var buttonValue = $(this).attr('id');
	if (buttonValue == 'decimal'){buttonValue = '.';};
	testing(buttonValue);
});

function testing(buttonValue) {
			//Log progress:
		
		console.log("\n");
		console.log("Button entry: " + buttonValue);
		console.log("thisEquation.runningTotal: " + thisEquation.runningTotal);
		console.log("thisEquation.lastOperator: " + thisEquation.lastOperator);
		console.log("thisEquation.currentOperator: " + thisEquation.currentOperator);
		console.log("thisEquation.currentNumber: " + thisEquation.currentNumber);
		console.log("thisEquation.startOver: " + thisEquation.startOver);
		console.log("thisEquation.numberEntered: " + thisEquation.numberEntered);
};

//On Mouseup
$(document).on( 'mouseup mouseout', '.calc_button, .alt_button', function () {
	$(this).removeClass( "shadows_down" );
});     