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
    <button class="accordion">R1 - My First Few Weeks of USERDES Class</button>
      <div class="panel">
    <p><p style="text-indent: 40px">During these first weeks of USERDES, I was not really expecting a very in depth based of understanding. I always thought it focuses more on general user interface and how this is related to how the users feel. And all of that was true but with much more definition and understanding why it must be that way.<br>
    <p style="text-indent: 40px">The process of submitting the activities feels great. It feels like how a design group or person would make their projects, in short iterations before giving a final product, to check the correctness and clarity of data and understanding within the document. Because of this method, I was able to improve my past works and make sure it is correct and up to par to what the professor requested.<br>
    <p style="text-indent: 40px">The contents of the subject are somewhat overwhelming. I always thought that this will be and easy subject since its just user interface and experience its straightforward, but it is not just it. You must worry about the audience, the structuring, the navigation and different more. The user interface and experience are just what I would like to call the cream at the top, there are much more detailed and hard codded deep inside. <br>
    <p style="text-indent: 40px">Just from creating the personal website that we made for ourselves proves somewhat hard since we were only using html code and not much knowledge using this code. It already proved hard because of the different ideas and designs that I wanted, and it is hard to produce it.<br>
    <p style="text-indent: 40px">Overall, the subject is fine and very understanding. So far everything is clear to me despite me being delayed for 1 week because of my internet, it was easy to catch up and understand the new lesson or topics that was given and I hope this keeps up in the future.
  </div>
<button class="accordion">R2 - Intronduction to Design Thinking Process</button>
      <div class="panel">
    <p><p style="text-indent: 40px">I was not around during the actual discussion for this lesson due to some technical issues happening in my side. But I was able to view the recordings and the activities regarding this topic, so I have a glimpse or a better understanding about it.<br>
    <p style="text-indent: 40px">The topic explains the process of how the process of making a design should happen, the different steps and scenarios that you can do with those steps to give a proper design. At first, I thought that this was just a straightforward procedure, but it is more technical than I imagined. It works like what we learned in our other subject about scrum and sprints, it both has almost the same procedure and having the same rules regarding to the actual procedure. Compared to some normal design or people that just do designing head on, this will actually help designers eliminate problems that might happen in the long run or it may help them by adding more ideas or polishing their ideas in the process.<br>
    <p style="text-indent: 40px">I would not say that this is simple since we tried doing it in this subject and applying it to the design problem that we are working on, and I have to say that in order for this to work people should be in the same page and able to participate because if not you are going to be stuck in one step or the other. But even though it did not work for us, it was an interesting experience and maybe someday I would use it in the real world after graduating and I would have the knowledge on how to do this because of what happened within my group in the design process. <br>
  </div>

<button class="accordion">R3 - Need Finding (Design Problem)</button>
      <div class="panel">
    <p><p style="text-indent: 40px">During the few meetings with my group members, we had a lot of ideation on making our problem statements and including what are the possible pain points, quotes given by the people and how are we going to solve these problems. We try to make sure that our topics at first were related as much as possible to us so we can easily relate to it and easily build up the problem.<br>
    <p style="text-indent: 40px">So far, we decided on something that we all kind of relate and started to build that with a word document and PowerPoint to slowly build it up so we can visualize it more. Though during the initial reporting, our topic was not very specific enough and kind of looked all over the place and not coherent. These comments made us realize to polish it and adjust it to the point that it is specific and more understandable. <br>
    <p style="text-indent: 40px">As a team we fairly worked together, having occasional meetings, and chatting to make sure that everyone can help. Though we had a little bit of hurdles, such as not agreeing to some new problem statements, some idea are colliding with each other and a team member not really participating since the first day of the meeting started.   <br>
  </div>

<button class="accordion">R4 - Informative Architecture</button>
      <div class="panel">
    <p><p style="text-indent: 40px">Last synchronous session, we studied about the Information Architecture in our USERDES class. We also learned about the different information is organized in groups to make it clear for the users.<br>
    <p style="text-indent: 40px">This topic tackles on how we group information, or that is from what my understanding is, and this avoid unnecessary problems in finding or distributing the information. An example that stood out to me the best in the lecture is the library, finding the book that you need will take time and it is not guaranteed that you will find the right information. That is why the books in a library is arranged in different fields and arranged in the information that is contained within them. There are also databases in libraries that will help you in finding the book or the information within the book that you need. This can also be applied to a website, for example you have a shopping website, you do not just explode information into your user’s face, here is a shopping website for example. <br>
    <img src="img/r4.jpg">
    <p style="text-indent: 40px">As you can see it is all categorized properly depending on what category that item will be and after some time the algorithm or the AI of the website will suggest products that the user has been looking for and stuff that are related to it.<br>
    <p style="text-indent: 40px">As you can see it iThis helps the user and developer since let us say you go to google, searching is very essential and you want the information that you need fast and reliable. Surely this kind of algorithm in hard to develop in a website but it does help the user in a huge way.<br>
  </div>

<button class="accordion">R5 - Visual Information Design</button>
      <div class="panel">
    <p><p style="text-indent: 40px">Last week we learned about visual and information design, this mainly focuses on the appealing side of the user interface such as using proper fonts, colors, spacing and formatting to give out the proper meaning or to not confuse the people who are reading your message, website or article.<br>
    <p style="text-indent: 40px">This topic was very funny since it started by letting us fix a passage that was an invitation to a dinner party. That passage was not very appealing since the format was very wrong, it uses hard to understand words, some information that was not stated and scattered information all along the whole passage. The different fonts was also tackled in the lesson which was kind of amazing for me to know that different fonts has different meanings and not just a style such as Times New Roman being the most common one that is used for very formal documents and some font styles can also be read even though the user cannot see the whole letter. I was also intrigued with the different color spectrum and how different colors will feel pleasant to the user. <br>
    <p style="text-indent: 40px">The more we go deeper in the topics the more the core of this course is being laid out such as the different factors to create the personal website that we have been developing over time. These topics seems to be straight forward but needs a little bit of understanding of the users to make things work out.<br>
  </div>

<button class="accordion">R6 - Color Theory and Typography</button>
      <div class="panel">
    <p><p style="text-indent: 40px">Last week, we had an asynchronous and synchronous learning about the topic on using colors and typefaces in your user design. I have tackled this with the other reflection paper, but this paper will be a more in depth understanding or reflection about the specific topic.<br>
    <p style="text-indent: 40px">During the asynchronous session, I almost had a mental breakdown doing the activities, just kidding haha. The activities involved fixing letters in words with specific fonts and try to fix their spacing as close as the real deal, this one proved to be the hardest since even a fraction of an inch is calculated in your total points. After that we had an activity about knowing certain colors on famous company logos, this was easy but, in a way, a little bit hard since the main problem for this activity is the shading of the color. After that we had a format quiz, it tackled the spacing between lines, spacing between letters, margins, and letter size. I thought this was not necessary since formatting is usually through the preference of the typist, and then I realize this is a user design and experience class so we study how these font should look pleasant to the user’s eyes. And the last activity is guessing the font, this was the easiest of all since its easy to understand what the difference between fonts is, like curvature and thickness.<br>
    <p style="text-indent: 40px">As for the synchronous side of the  lesson, I have tackled most of the things in the past reflection paper. Besides that, we had a little laugh on how to access and answer the asynchronous activities. So far this lesson is the one that I liked the most, it really captures how we developers should really look at what the users would want even the little things such as the spaces between letters.<br>
  </div>
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
