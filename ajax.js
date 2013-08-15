window.addEventListener('load', loadXMLDoc);


document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('myDiv').addEventListener('click', redirect);
});

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('1').addEventListener('click', redirect);
});

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('back').addEventListener('click', loadXMLDoc);
});
function redirect()
{
	//alert("hi");
	var e = window.event,
    btn = e.target || e.srcElement;
   //alert(btn.id);
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","https://localhost/redirect.php?id="+btn.id,true);
xmlhttp.send();
}
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","https://localhost/ajax.php",true);
xmlhttp.send();
}