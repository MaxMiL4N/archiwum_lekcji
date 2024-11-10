var counter_kicia = getCookie("klikniecia_kici");
kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;


function klikniecie_kici() {

    counter_kicia+=1;
    kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;

    document.cookie="klikniecia_kici="+counter_kicia;


    
}    
function KiciaClicksfunction() {



      /*  document.cookie = "fff=true";
        console.log("Warning hidden successfully.");
        var x = document.getElementById("div_warning");
        if (x.style.display == "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
          */
      }