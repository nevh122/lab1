<html>
<head>
<title>Personal Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="img/ico.png">
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
  font-size: 20px;  
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
  <a href="activities.php">Activities</a>
  <a href="refelctions.php">Reflections</a>
  <a href="learnings.php">Learnings</a>
  <a href="guidequestions.php">Guide Questions</a>
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
    <p>This website serves as a compilation or an archive for all the works that i have done under my USERDES class that I am taking right now. This website also serves as a part of my finals activity under the same class and a good experince for me to start creating websites from html.
    	<br><br>
    You can see all the works that i have done on the subject through the navigation bar bellow the header.
	 </p>
    <br>
    <h2>Why am I here?</h2>
    <p>The best explanation is that you may have stumbled this website randomly or you are someone from my class whether the professor or a student. Please forgive the somewhat terrible layout, this was my first major project in html and i am still learning most of the basics about it.</p>
  </div>

</div>

</body>
</html>
