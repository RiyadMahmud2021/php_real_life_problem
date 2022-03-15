<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Real Life</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Raleway, sans-serif;
}

/* Style the header */
header {
  background-color: DodgerBlue;
  padding: 30px;
  text-align: center;
  color: white;
}
.superTitle {
  background-color: DodgerBlue;
  text-align: center;
  font-size: 25px;
  color: white;
}
.title {
  background-color: DodgerBlue;
  padding: 20px;
  text-align: center;
  font-size: 20px;
  color: White;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 300px; /* only for demonstration, should be removed */
  background: Tomato;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 100%;
  background-color: white;
  height: 300px; /* only for demonstration, should be removed */
  color : gray;
  padding-left: 600px;
  padding-top: 100px;
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: DodgerBlue;
  padding: 10px;
  text-align: center;
  color: white;
}

.content_center_section{
  background-color: white;
  text-align: center;
  color: gray;
  padding: 150px;
 /* only for demonstration, should be removed */
}

.pic_content {
  float: left;
  width: 15%;
  padding: 0%;
}

/* On screens that are 992px wide or less, go from four columns to two columns */
@media screen and (min-width: 900px) {
  .pic_content {
    padding: 3%;
    width: 20%;
  }
}
 
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

/* image gallery */
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
/* image gallery */
</style>
</head>
<body>

<br/> 
  <header class="superTitle">
    <h2>This project file is for practicing Real Life Programming with "php". </h2>
  </header>
<br/>
