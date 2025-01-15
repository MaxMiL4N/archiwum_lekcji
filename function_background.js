if (background_checkbox.checked==true){
    document.getElementById("javascript").style.backgroundImage = 'url("fU2C6T2yfT.png")';
    document.getElementById("javascript").style.transition = '0.5s';
    document.getElementById("label_checkbox_center").style.color = 'rgb(54, 158, 255)';
    document.getElementById("label_checkbox_center").style.backgroundColor = 'rgba(37, 26, 189, 0.4)';
}
else {
    document.getElementById("javascript").style.backgroundImage = 'unset';
    document.getElementById("javascript").style.transition = '0.5s';
    document.getElementById("label_checkbox_center").style.color = '';
    document.getElementById("label_checkbox_center").style.backgroundColor = '';
}

function change_background() {
    if (background_checkbox.checked==true){
        document.getElementById("javascript").style.backgroundImage = 'url("fU2C6T2yfT.png")';
        document.getElementById("javascript").style.transition = '0.5s';
        document.getElementById("label_checkbox_center").style.color = 'rgb(54, 158, 255)';
        document.getElementById("label_checkbox_center").style.backgroundColor = 'rgba(37, 26, 189, 0.4)';
    }
    else {
        document.getElementById("javascript").style.backgroundImage = 'unset';
        document.getElementById("javascript").style.transition = '0.5s';
        document.getElementById("label_checkbox_center").style.color = 'lightgray';
        document.getElementById("label_checkbox_center").style.backgroundColor = 'rgba(89, 92, 99, 0.4)';
    }
}