setInterval(changeColor, 1000);
    function changeColor() {
    var x=document.getElementById("all");
    if(x.style.color=="red")
       x.style.color="black";
    else if (x.style.color=="black")
       x.style.color="blue";
    else if (x.style.color=="blue")
       x.style.color="red";
    else x.style.color="red";
}