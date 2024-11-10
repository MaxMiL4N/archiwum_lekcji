var counter_kicia = parseInt(getCookie("klikniecia_kici"));
document.cookie="klikniecia_kici="+counter_kicia;
if (isNaN(getCookie("klikniecia_kici"))==true) {
    var counter_kicia = 0;
    document.cookie="klikniecia_kici="+counter_kicia;
}



var counter_kicia = parseInt(getCookie("klikniecia_kici"));
kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;

console.log("counter_kicia="+counter_kicia);
console.log("cookie klikniecia_kici="+getCookie("klikniecia_kici"));


function klikniecie_kici() {

    counter_kicia+=1;
    kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;

    document.cookie="klikniecia_kici="+counter_kicia;
}    

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