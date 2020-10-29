<html>
<head>
<title>Personal Website - Activities</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/ico" type="ico"/>
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin:0;
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

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: #f0f0f0;
  overflow: hidden;
}

.main { 
  font-size: 17px;  
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
  margin: 50px;
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

<div class="main">
  <h2>Activities</h2>
<button class="accordion">A1 - Favorite Application</button>
  <div class="panel">
  <p><p style="text-indent: 40px">The favorite application that I chose is FL Studio. FL Studio is a music production software or a digital audio workstation (DAW).  It is a paid software and prices varies depending on the version though they provide a free trial version up to 30 days. Fl Studio is also somewhat known in the community as a user-friendly audio mixer and it is used by some famous people such as Porter Robinson, Thomas Zimmerman (Deadmau5), DeAndre Cortez Way (Soulja Boy) and much more.<br>
  <p style="text-indent: 40px">As for me, I discovered Fl Studio because of my friend back in Senior Highschool. During those times we were required to make a song for our Music class. By then my friend recommended it and I have been using it since. I only use the software when I feel like making music or when a beat comes to mind but for the most part, I just help my friend when he is recording or when I have a project.
  I only use the free version of FL Studio so I cannot speak for the full features of it but from the trial alone shows a lot of versatility using the software. One of the reasons why I like it is because of the multiple compatible plugins that can be used with the software. The plugins are virtual instruments so that you can play the instruments virtually instead of needing real ones. There are also very easily understandable shortcuts and easily rebind able if needed. The slight downside is, when you first boot up the software, it will feel overwhelming because there is a lot of different knobs and sliders. But the also good side of this is that those knobs and sliders are labeled, and the user can see what it does when hovering the mouse on it.<br>
  <p style="text-indent: 40px">I recommend using Fl Studio to people who want to get into sound making since its free if you are just starting it out or testing it. They can also help you since the forums usually have fast responses from the creators and they also have guides from the website. The only downside is that most of their “premium” add-ons and plugins are paid but since Fl Studio has support for different plugins, its better to find open source ones than to buy them.
  </p>
  </div>

<button class="accordion">A2 - Personas</button>
  <div class="panel">
   <p> <img src="img/persona1.jpg"><img src="img/persona2.png"><img src="img/persona3.png"></p>
  </div>

<button class="accordion">A3 - Wireframe</button>
  <div class="panel">
  <p><p style="text-indent: 40px">Main page of the planned website. Also known as the homepage where all the different pages will be set in a short description about that part. Can be separated to multiple boxes if needed. Each box gives a different short description about that topic set to it and has a view more button located at the bottom to redirect to a page with much more detailed information in the topic. The nav bar on the top is to help the users in case they get lost or to easily navigate through the site.<br>
  <p style="text-indent: 40px">Each tab represents one of each box in the picture and added a contact tab. Words or guide words in the nav bar should be recognizable and reflect what the users think if they see the word.<br>
  <p style="text-indent: 40px">Example of the info page. Add bold text to word or sentences that you would want to emphasize like quotes or important information. Do not make this like a diary make it like a “my life is interesting” kind of thing. Information written should not be too overwhelming for users.<br>
  <p style="text-indent: 40px">Have support for mobile devices. Website should adjust to the resolution of the device and determine which is best to use. When having a similar aspect ratio as a smartphone, the nav bar is replaced with the navigation drawer or the hamburger icon.<br>
 </p>
  </div>

<button class="accordion">A4 - Invitation Design</button>
  <div class="panel">
  <p>
    <img src="img/a41.jpg"><img src="img/a42.jpg">
 </p>
  </div>
<button class="accordion">A6 - Typefaces & Document</button>
  <div class="panel">
  <p>
    <img src="img/a6typefaces.jpg"><img src="img/a6document.jpg"><img src="img/a6document2.jpg"><img src="img/a6document3.jpg">
 </p>
  </div>
<button class="accordion">A7 - Personal Website - Progress Report</button>
  <div class="panel">
  <p>
    <img src="img/a7.jpg">
 </p>
  </div>

</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>
