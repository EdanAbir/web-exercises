var plus = document.getElementById("plus");

plus.onclick = function(){
    addDiv();    
}

function addDiv(){
    var newDiv = document.getElementById("AddBoxes");
    var Box = document.createElement("div");
    
    newDiv.appendChild(Box);
    
    Box.style.backgroundColor = "#000000";
    Box.style.height = "250px";
    Box.style.width = "250px";      
    Box.style.cssFloat = "left";
    Box.style.opacity = Math.random();
}