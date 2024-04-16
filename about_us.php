<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background: url("https://www.shutterstock.com/image-photo/green-landscape-600nw-94652485.jpg") center/cover no-repeat;
  
  
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
  background-color: #fff;

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
  color: blue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #FF0000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 660px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


<h2 style="text-align:center">About Us</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="belal.jpg" alt="Jane" style="width:100%", height="150%"> 
      <div class="container">
        <h2>Belal Hafez</h2>
        <p class="title">CEO & Founder</p>
        <p>I am a front-end web developer. I can provide clean code and pixel perfect design. I also make the website more & more interactive with web animations. A responsive design makes your website accessible to al users, regardless of their devices.</p>
        <p>belalhafez8882@gmail.com</p>
      </div>
    </div>
  </div>

  

  </div>
</div>




</body>
</html>
