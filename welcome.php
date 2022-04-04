
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  background-color: gray;
  font-family: Arial, Helvetica, sans-serif;
}

#navbar {
  background-color: #333;
  position: fixed;
  top: -50px;
  width: 100%;
  display: block;
  transition: top 0.3s;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: burlywood;
  color: black;
}
</style>
</head>
<body>

<div id="navbar">
  <a href="http://localhost:8888/Quick%20Acesss/Log%20Code/Homepage2.php">Home</a>
  <a href="http://localhost:8888/Quick%20Acesss/Log%20Code/Homepage2.php">News</a>
  <a href="http://localhost:8888/Quick%20Acesss/Log%20Code/Homepage2.php">Contact</a>
</div>

<div style="padding:15px 15px 2500px;font-size:30px">
  <h1>THANK YOU FOR CONTACTING US</h1>
  <P>We will respond to you as early as possible</p>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>

</body>
</html>

