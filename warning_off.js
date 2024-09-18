function myFunction2() {
    document.cookie == "warning_turned_off=1";
    var x = document.getElementById("div_warning");
    if (x.style.display == "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
