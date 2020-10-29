<html>
<head>
<title>Guide Qustions-Personal Website</title>
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
    <h2>Reflections</h2>
<button class="accordion">G1: What is User Design?</button>
      <div class="panel">
        <img src="img/g1.png">
  </div>
<button class="accordion">G2: What is Design Thinking?</button>
      <div class="panel">
      <p><p style="text-indent: 40px">Design thinking is multiple step process in creating or developing software. Not just software but this can also be applied to non-electronic medium as well. This process can also be used to answer or solve problems that arise when designing or problems before making a design. These processes are empathize, define, ideate, prototype and test<br>
      <p style="text-indent: 40px">Empathize is where you get to know and understand your user. You engage with the target audience and gather data like what they want, what they do not like and some bugs that they do not want to see. After that us the define stage. The define stage is where you put to gather all the data that you have gathered from the previous stage into one. Removing or adding ideas depending on the target audience and requirements. You do not have to add all the data that you have gathered but you must add those that are much more important, or it is appropriate. Next step is the ideate stage, during this stage is now the brainstorming part of the team. Now that your team know what your target audience need, it is now the teams turn to make the solutions for that problem. After this is the prototype stage, in this stage will now produce a simple version or the skeletal form of the application that they are going to make. This is to test any bugs that may have to follow or to make sure that everything is running smoothly. And finally, the test phase, in this phase the team either test the application themselves or let other people or the target users test the application. This is to make sure that the application is up to their expectations and to see if any more problems may arise when it is being used or in some other aspects. <br>
      <p style="text-indent: 40px">The design thinking steps are dynamic and can change depending on the needs of the team or their time frame. Some times from phase one the team may jump to phase four or vise versa.<br>
  </div>

<button class="accordion">G3 What is Prototyping?</button>
      <div class="panel">
        <p><p style="text-indent: 40px">Prototyping is when a team create rough drafts or designs a sample model of what their software, application, website, etc. that they are going to do. This has two different types which is called the low and high-fidelity prototyping. This helps the developers and designers envision what they want to make and make necessary changes before it is implemented.<br>
        <p><p style="text-indent: 40px">A low fidelity prototype is as the name implies is a low form of prototyping that generally looks like a storyboard, rough sketches using pen and paper and not very interactive with limited designs. This is often used to slowly visualize what the design would look like and to eliminate small problems that can come out in future iterations. While a hard fidelity is almost close to the final software that is interactive, it is usually used as a final test if everything will run smooth.<br>
        <p><p style="text-indent: 40px">As stated the purpose of these prototypes is to make sure that the application that you are developing has little to no bugs and to see if the application is suited to what the client or the user would want and feel. Not all bugs and problems are solved in this case but it’s better to remove most of them early on through prototyping since it is much easier to solve this issues early on before development and release than fixing it while the final product is released.<br>
        <img src="img/g3.png">
        <p><p style="text-indent: 40px">On the left is an example of a low fidelity prototype, it is seen as said like a storyboard, to be able to see where things go and how things should work at the final product. And on the right is an example of a high fidelity prototype, it is technically usable but without certain elements such as color or animations, this is just to see if the product is actually working as expected before finalizing it.<br>
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