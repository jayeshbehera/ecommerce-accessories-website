function addToCart(x) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      var text = xhttp.responseText;
	  if(text!="Product added")
	  { 
		alert(text);
		}
	  else {
		var cartitems = document.getElementById("cartitems").innerHTML;
		document.getElementById("cartitems").innerHTML = (++cartitems);
	}
    }
  };
  xhttp.open("GET", "addToCart.php?pid="+x, true);
  xhttp.send();
}
