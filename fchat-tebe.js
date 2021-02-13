function tebeChat() {
  let tebexhrcat = new XMLHttpRequest();
  tebexhrcat.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  tebexhrcat.open("GET", "x.php?chat=true", true);//© 2021 tebe.app
  tebexhrcat.send();
}