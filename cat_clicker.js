var counter_kicia = getCookie("klikniecia_kici");
kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;


function klikniecie_kici() {

    counter_kicia+=1;
    kici_counter.innerHTML="<img src='cat_cursor.png' height='25px'>"+counter_kicia;

    document.cookie="klikniecia_kici="+counter_kicia;
}    