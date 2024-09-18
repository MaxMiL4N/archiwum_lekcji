function myFunction2() {
    document.cookie = "dsa=true";
    console.log("Warning hidden successfully."+getCookie("dsa"));
    var x = document.getElementById("div_warning");
    if (x.style.display == "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
