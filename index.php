<html>
<head>
<title>Personal Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.header {
  padding: 80px;
  text-align: center;
  background: #8baae0;
  color: white;
}

.header h1 {
  font-size: 40px;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
 }

.row {  
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.side {
  -ms-flex: 30%;
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

.main {   
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}
</style>
</head>
<body>
<div class="header" >
  <h1>Hi I'm Ned</h1>
  <p>A BS-EMC student at Asia Pacific College</p>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="#">USERDES Works</a>
  <a href="#">Certificates</a>
  <a href="#" class="right">Socials</a>
</div>

<div class="row">
  <div class="side">
    <h2>Who's Ned?</h2>
    <h5>This is me:</h5>
    <img src="https://trello-attachments.s3.amazonaws.com/5f3945025b439677dd72a20c/5f39befad087794a8819a945/a9b949337a9f522129f51c16ecdd78c6/117406283_962313754273372_3151311764514997581_n.jpg" alt="Ned" width="225" height="300">
    <p>Yep thats me. The me who is not an avatar or a person in a chat screen.</p>
    <h3>More About Me</h3>
    <p>I'm just your average guy who likes to play video games and decides to become a developer in the near future. I want to create a new mechanic in a game which the person would really feel like the character in the game, kind of like Sword Art Online without the deaths.
    <br>
    <br>
    Right now I'm just a student trying to learn the all the technicalities in development while taking little side jobs to improve my experince.
	 <br>
	 <br>
	 I enjoy mostly any kind of game as long as it is enjoying for me but Hack and Slash and JRPGs are usually a sweet spot for me</p>
	 <br>
	 "Being patient is not always a good idea, sometimes you just have to break borders"
    </div>

  <div class="main">
    <h2>What is this website?</h2>
    <p>This website serves as my personal portfolio, where my works from our USERDES class can be seen, some works that i have made and people may find it interesting and certificates that i have gathered through multiple sources.
    	<br><br>
    This website is exclusively made by me and outlines all the works taht i have done under the USERDES class.
		<br><br>
	   You can navigate through my website by clicking on the different tabs in the navigation bar.</p>
    <img src=https://miro.medium.com/max/1050/1*hp-yfKsmzsj711iLbM8eEw.jpeg alt="uiux" width="500" height="300">
    <br>
    <h2>Why am I here?</h2>
    <p>(to add detils here) (to add nav bar)</p>
  </div>

</div>

</body>
</html>
