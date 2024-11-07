var x = document.getElementById("div_warning");

function getCookie(cookieName) {
    let cookies = document.cookie;
    let cookieArray = cookies.split("; ");
 
    for (let i = 0; i < cookieArray.length; i++) {
       let cookie = cookieArray[i];
       let [name, value] = cookie.split("=");
      
       if (name === cookieName) {
            return value;
       }
    }
    
    return null;
 }
console.log("Warning disabled = "+getCookie("dsa"));
if(getCookie("dsa")==="true"){
    x.style.display = "none";
    console.log("Warning hidden successfully.");
}
else{
    x.style.display = "block";
}
