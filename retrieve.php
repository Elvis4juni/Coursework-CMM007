
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    background-color: burlywood;
}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style>
</head>
<body>
    
<video autoplay muted loop id="myVideo">
  <source src="contest-of-street-drawing_eytnslry__448d27cb5306d8a2473bef4ae3ec7dd4__P360 (1).mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
  <h1>Heading</h1>
  <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.</p>
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>

</body>

</html>



<?php
include ("dbconnect.php");

$sql = "SELECT id, firstname, lastname, country, subject FROM story";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Country</th><th>Comment</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. $row["country"]. $row["subject"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$db->close();
?>


