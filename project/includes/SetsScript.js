/* Timer  */

var MadeIt3 = document.getElementById("MadeIt3");
var MadeIt2 = document.getElementById("MadeIt2");
var MadeIt1 = document.getElementById("MadeIt1");

MadeIt3.onclick = function()
{
	function countdown(minutes) 
	{		
    	var seconds =  10;
    	var mins = minutes
    	function tick() 
    	{
        	var counter = document.getElementById("counter");
        	var current_minutes = mins-1
        	seconds--;
        	counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        	if( seconds > 0 ) {
            	setTimeout(tick, 1000);
        	}
        	else if(i = 2){
        		document.getElementById('BlackSet3').style.background = "#CCCCFF";        	
        	}
        	else{
            	if(mins > 1){
                	countdown(mins-1);              
            	}
        	}     	
    	}
    	tick();
	}
	countdown(1);
}
		
MadeIt2.onclick = function()
{
	function countdown(minutes) 
	{		
    	var seconds =  10;
    	var mins = minutes
    	function tick() 
    	{
        	var counter = document.getElementById("counter");
        	var current_minutes = mins-1
        	seconds--;
        	counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        	if( seconds > 0 ) {
            	setTimeout(tick, 1000);
        	}
        	else if(i = 2){
        		document.getElementById('BlackSet2').style.background = "#CCCCFF";
        		document.getElementById('MadeIt2').style.display = "none";
        	}
        	else{
            	if(mins > 1){
                	countdown(mins-1);              
            	}
        	}     	
    	}
    	tick();
	}
	countdown(1);
}	
	
MadeIt1.onclick = function()
{
	function countdown(minutes) 
	{		
    	var seconds =  10;
    	var mins = minutes
    	function tick() 
    	{
        	var counter = document.getElementById("counter");
        	var current_minutes = mins-1
        	seconds--;
        	counter.innerHTML = current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        	if( seconds > 0 ) {
            	setTimeout(tick, 1000);
        	}
        	else if(i = 2){
        		document.getElementById('BlackSet1').style.background = "#CCCCFF"; 
        		document.getElementById('MadeIt1').style.display = "none";       	
        	}
        	else{
            	if(mins > 1){
                	countdown(mins-1);              
            	}
        	}     	
    	}
    	tick();
	}
	countdown(1);
}
		
	
	
	



