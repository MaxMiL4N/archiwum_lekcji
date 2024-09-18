var x = document.getElementById("div_warning");
let dsa = document.cookie;
console.log(dsa);
if(dsa == "dsa=true"){
    x.style.display = "none";
}
else{
    x.style.display = "block";
}