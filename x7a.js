function MyXmlHttpObject() {
  var myxmlhttp;
  try {
    myxmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e) {
    try {
      myxmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch (E) {
      myxmlhttp = false;
    }
  }
  if (!myxmlhttp && typeof XMLHttpRequest != 'undefined')
    myxmlhttp = new XMLHttpRequest();
  return myxmlhttp;
}

function MyAjax(param) {
  if (window.XMLHttpRequest)
    req = new MyXmlHttpObject();
  method = ( !param.method ? "POST" : param.method.toUpperCase() );

  if (method=="GET") {
    send = null;
    param.url = param.url+"&ajax=true";
  } else {
    send = "";
    for (var i in param.data)
      send += i + "=" + param.data[i] + "&";
    send = send+"x7ai";
  }

  req.open(method, param.url, true);
  if (param.statbox)
    document.getElementById(param.statbox).innerHTML = '<div class="alert"><img alt="" height="75" src="101.gif" width="75"></div>';
  req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  req.send(send);
  req.onreadystatechange = function() {
    if (req.readyState == 4 && req.status == 200) // - если все в порядке.
      if (param.success)
        param.success(req.responseText);
  }
}

function run_script() {
  MyAjax({
    url:"x7aa.php",
    statbox:"status",
    method:"POST",
    data: {
      data_0:document.getElementById("data_0").value,
      //data_1:document.getElementById("data_1").value,  
      area_1:document.getElementById("area_1").value,
      //document.getElementById('body').style.display = "hidden";
    },
    success:function(data){
      document.getElementById("status").innerHTML=data;
    }
  })
}