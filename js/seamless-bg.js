/*
                   /)           
 _    _  _  ___   //  _  _   _  
/_)__(/_(_(_// (_(/__(/_/_)_/_)_
                                
 ____     ____      
/\  _`\  /\  _`\    
\ \ \L\ \\ \ \L\_\  
 \ \  _ <'\ \ \L_L  
  \ \ \L\ \\ \ \/, \
   \ \____/ \ \____/
    \/___/   \/___/ 
                    
                    
*/



//BACKGROUND RESIZE
$(document).ready(function() {
//make the image act like a background that resizes (similar to css3 "cover" attribute)
        var theWindow        = $(window),
            $bg              = $(".bg_resize_JS img"),
            aspectRatio      = $bg.width() / $bg.height();

        function resizeBg() {

                if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                    $bg
                        .removeClass()
                        .addClass('bgheight');
                } else {
                    $bg
                        .removeClass()
                        .addClass('bgwidth');
                }

        }

        theWindow.resize(function() {
                resizeBg();
        }).trigger("resize");
});








$(document).ready(function() {


//param stuffs


	//list the valid values
	var VALUES = ['slide02', 'slide03'];
	var KEYWORD = 'sample';

	//optional debug value
	var DEBUG = 'debug';




	//search the current document url
	var searchString = document.location.search;
			
	// strip off the leading '?'
	searchString = searchString.substring(1);
	//get values between the '=' 
	var multiple_values = searchString.split("=");
	
	/*SEE DEBUG*/if (debug_value) {alert(multiple_values);}
	
	//set the vars to compare and validate
	var compare_keyword = multiple_values[0];
	var amp = multiple_values[1];

	var amp_values = amp.split("&");
	
	if (debug_value) {alert(amp_values);}
	
	var compare_value = amp_values[0];
	var amp_value = amp_values[1];



	//DEBUG VALUES
	var debug_value = debuggolicious(amp_value, DEBUG);

	function debuggolicious(amp_value_b, DEBUG_b) {
		if (amp_value_b == DEBUG_b ) {
			var debug_value_b = true;
		}
		else {
			var debug_value_b = false;
		}
		return debug_value_b;
	}


	
	/*SEE DEBUG*/if (debug_value) {alert(amp_value);}



		
	//compare the strings and validate
	//check if it matches the KEYWORD variable
	if (compare_keyword == KEYWORD) {
		//set the match as true
		var keyword_match = true;
		//set the var
		var this_keyword = compare_keyword;
		}
		
		
		
		
	if (debug_value) {
		//if it's true
		if(searchString) {
			if (keyword_match == true) {
				//do something
				alert('The keyword is a match! The keyword variable is set as:' + this_keyword );
				}
				else {
					//otherwise
					alert('The keyword does not match!');
				}
			}
	}




	function match_values() {
		
		/*SEE DEBUG*/ if (debug_value) {alert("VALUES:" + VALUES);}
		
		// compare the values of the array with the value from the url
		if (VALUES.indexOf(compare_value) > -1) {
			
			//set the match as true
			var value_match = true;
			//set the var
			var this_matching_value = compare_value;
			//do something if there's a match
			}
			else {
				//better to define these for debugging
				var value_match = false;
				var this_matching_value = 'no match';
				}

		return [value_match, this_matching_value];
	}
		
	var value_set = match_values();	
	/*SEE DEBUG*/ if (debug_value) {alert(value_set);}/*SEE DEBUG*/
	
	var new_value_match = value_set[0];
	var new_this_matching_value = value_set[1];
	/*SEE DEBUG*/ if (debug_value) {alert('these are the values:' + new_value_match + ', ' + new_this_matching_value);}/*SEE DEBUG*/

	/*SEE DEBUG*/		
	if (debug_value) {
		if (new_value_match == true) {
			//do something
			alert('The value matches a value in the array! The value variable is set as:' + new_this_matching_value);
			}
			else {
			alert('The value does not match!');
			}
	}/*SEE DEBUG*/
	
	
	
	
	if (keyword_match == true && new_value_match == true) {
		alert('Whoohoo! Both the keyword and the values match! Success!');
	}
	else {
		alert('Both items do not match. Invalid key pair!');
	}
















//slidehow stuffs
	$('.slide_advance_JS img:not(:first)').hide();
	
	//$('.slide_advance_JS img:not(.slide_advance_JS img:nth-child(3))').hide();
	
	var $boxes = $(".slide_advance_JS img"),

    	$first_slide = $('.slide_advance_JS img').eq(1),

		//$startBox = $(".slide_advance_JS img:nth-child(3)"),

		$currentBox = $first_slide.show();
		
 		/*setInterval(function(){
			$currentBox.fadeOut(300, function(){
				$currentBox = $currentBox.next();
				if (!$currentBox.length) {
            		$currentBox = $boxes.first();
        		}
				$currentBox.fadeIn(200);
			});
		}, 10000);
		*/		
		
		 setInterval(function(){
			$currentBox.fadeOut(300, function(){
				$currentBox = $currentBox.next();
				if (!$currentBox.length) {
            		$currentBox = $boxes.first();
        		}
				$currentBox.fadeIn(200);
			});
		}, 10000);

		$('.next_JS').click(function(){
    		$currentBox.fadeOut(300, function() {
        		$currentBox = $currentBox.next();
        		if (!$currentBox.length) {
            		$currentBox = $boxes.first();
        		}
        		$currentBox.fadeIn(200);
    		});
		});	
		
		$('.prev_JS').click(function(){
    		$currentBox.fadeOut(300, function() {
        		$currentBox = $currentBox.prev();
        		if (!$currentBox.length) {
            		$currentBox = $boxes.first();
        		}
        		$currentBox.fadeIn(200);
    		});
		});	
});	




























