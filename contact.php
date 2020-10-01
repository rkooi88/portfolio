<?php
if($_POST["message"]) {
    mail("rkooi@unc.edu", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rachel Ooi | Contact Me</title>

	<meta charset="utf-8"/>
	<meta name="About Me"/>
	<meta name="description" content="If you have questions or concerns, please feel free to get in contact with me!">
	<meta name="viewport" content="width=device-width" initial-scale="1,0" maximum-scale="5.0" minimum scale="1.0"/>
	<link rel="shortcut icon" href="favPhoto.png">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171555304-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171555304-1');
</script>

</head>
<body>
	<nav class="navbar navbar-light navbar sticky-top navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="landing.html"><strong>Rachel Ooi</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="landing.html">About Me<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="ITProjects.html">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="OoiResume.pdf">Resume</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Me</a>
      </li>
    </ul>


  </div>
 
</nav>

<div class="contacts">
	<p class="contactForm">If you have any questions or concerns, please feel free to contact me by filling out this form! I'll get back to you as soon as possible.</p>
  
<form action="contact.php" method="post">
    <label for="fname">Your Name</label>
    <input type="text" id="fname" name="message" placeholder="Your name">

    <label for="email">Email</label>
    <input type="text" id="email" name="message" placeholder="example@example.com">

  <label for="subject">Subject</label>
    <input type="text" id="subject" name="message" placeholder="Enter Subject">


    <label for="subject">Subject</label>
    <textarea id="subject" name="message" placeholder="Write a Message!" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<footer class="page-footer">

  <!-- Footer Elements -->
 
 <div id="social">
  <div id="SocCont">
    <!-- Social buttons -->
    <ul class="list-inline">
      <li class="list-inline-item">
        <a href="https://www.facebook.com/iamorganiceatme" class="fa fa-facebook">
         
        </a>
      </li>
      <li class="list-inline-item">
        <a href="http://linkedin.com/in/rooi" class="fa fa-linkedin">
        </a>
      </li>
    
      <li class="list-inline-item">
        <a href="https://github.com/rkooi88" class="fa fa-github">
        </a>
      </li>
    <li class="list-inline-item">
      <a href="https://www.instagram.com/thewasabigirl/" class="fa fa-instagram">
      </a>
    </li>
    </ul>
    <!-- Social buttons -->
    </div>
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: Rachel Koto Ooi
  </div>
  <!-- Copyright -->

</footer>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>

</body>
</html>