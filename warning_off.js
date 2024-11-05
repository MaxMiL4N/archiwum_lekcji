function NiePokazujPonownie() {
    document.cookie = "dsa=true";
    console.log("Warning hidden successfully.");
    var x = document.getElementById("div_warning");
    if (x.style.display == "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
