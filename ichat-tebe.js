function tebeFxhr() {
  let tebex = new XMLHttpRequest();
  tebex.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tebexhr").innerHTML =
      this.responseText;
    }
  };
  let tebeObj = {data_3:wtebe,
                 meta_0:utebe};
  let jtebe = JSON.stringify(tebeObj);
  tebex.open("POST", "x.php", true);
  tebex.setRequestHeader("Content-type", "application/x-www-form-urlencoded");//© 2021 tebe.app
  tebex.send("x="+jtebe);
}