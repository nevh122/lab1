<html>
<head>
<title>Learnings-Personal Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="img/ico.png">
<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0px;
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
    <h2>Learnings</h2>
<button class="accordion">L1 - UX Design: 1 Overview</button>
      <div class="panel">
        <img src="img/l1.png">
  </div>
<button class="accordion">L2 - UX Design: 2 Analyzing User Data</button>
      <div class="panel">
        <img src="img/l2.png">
  </div>

<button class="accordion">L3 - UX Design: 3 Creating Personas</button>
      <div class="panel">
        <img src="img/l3.png">
  </div>

<button class="accordion">L4 - UX Design: 4 Ideation</button>
      <div class="panel">
        <img src="img/l4.png">
  </div>

<button class="accordion">L5 - UX Design: 5 Creating Scenarios and Storyboards</button>
      <div class="panel">
        <img src="img/l5.png">
  </div>

<button class="accordion">L6 - UX Design: 6 Paper Prototyping</button>
      <div class="panel">
        <img src="img/l6.png">
  </div>

<button class="accordion">L7 - UX Design: 7 Implementation Planning</button>
      <div class="panel">
        <img src="img/l7.png">
  </div>

<button class="accordion">L8 - UX Foundations: Prototyping</button>
      <div class="panel">
        <img src="img/l8.png">
  </div>

<button class="accordion">L9 - Bootstrap 4 Essential Training</button>
      <div class="panel">
        <img src="img/l9.png">
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
