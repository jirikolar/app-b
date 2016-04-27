document.onreadystatechange = function () {
  if (document.readyState == "complete") {
    countdown();
  }
}

var countdown = function() {
  var el = document.getElementById('countdown');
  var value = parseInt(el.innerHTML);
  if(value == 0) {
    location.reload();
  } else {
    el.innerHTML = value - 1;
    setTimeout(function(){ countdown(); }, 1000);
  }
}
