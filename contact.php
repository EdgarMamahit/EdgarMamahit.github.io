<?php 
include 'partials/header.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title>Contact Me</title>
</head>
<body>
  <h1>Contact Form</h1>
  <form action="mailto:youremail@example.com" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Your Name"><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Your Email"><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Write your message here"></textarea><br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
<?php
include './partials/footer.php';
?>