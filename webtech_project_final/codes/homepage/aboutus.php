<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1>
  <p>Carrer Forage is an excelent opportuity for searching job and internship at a time.</p>
  <p>We have almost 500+ multinational companis and 1000+ advisers who will provide you the best service for searching the job</p>
</div>

<h2 style="text-align:center">Our advisors</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <!img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Nayma Islam</h2>
        <p class="title">Advisor Guardian</p>
        <p>I believe to get some information will help you out.</p>
        <p>naiyma1997@gmail.com</p>
        <p><a href="mailto:naiyma1997@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shaily Sarkar</h2>
        <p class="title">Management Division</p>
        <p>Please let me know if have any queries.</p>
        <p>shailysarker99@gmail.com</p>
        <p><a href="mailto:shailysarker99@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <!img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Gazi Ehsanul Haque</h2>
        <p class="title">Senior Advisor</p>
        <p>Lets know about your interest.</p>
        <p>antik.official@gmail.com</p>
        <p><a href="mailto:antik.official@gmail.com"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
