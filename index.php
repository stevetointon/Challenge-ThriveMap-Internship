<!DOCTYPE html>
<html>
<head>
    <style>
    .button
    {
        background-color: #F00000; /* Red */
        border: none;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button1 {border-radius: 8px;}

</style>
</head>
<body>

    <h2>Click for Time or Clear Results</h2>

<button class="button button1" onclick="addLoadList()">Click Me</button>

<button class="button button1" onclick="clearList()">Clear</button>

<div id="demo">

</div>

<script>
function addLoadList() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "list.php", true);
  xhttp.send();
}
</script>

<script>
function clearList() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "clear.php", true);
  xhttp.send();
}
</script>
</body>
</html>

