var x = document.getElementById("div_warning");
if(document.cookie == "warning_turned_off=1"){
    x.style.display = "none";
}
else{
    x.style.display = "block";
}