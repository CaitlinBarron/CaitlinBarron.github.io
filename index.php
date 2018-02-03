<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body>
	<h1>testing 123</h1>
<div class="main">
	<h1>Heading test</h1>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
	<p>paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraphparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph paragraph test paragraph test paragraph test paragraph test paragraph test paragraph test paragraph testparagraph testparagraph testparagraph testparagraph testparagraphparagraph paragraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testparagraph testvparagraph testparagraph testparagraph testparagraph testvparagraph testvparagraph testparagraph testparagraph v v paragraph testvvparagraph testparagraph testvparagraph vparagraph testvvparagraph testvparagraph vvvvparagraph testparagraph testparagraph testparagraph testparagraph testvvvparagraph testvvvv v paragraph testparagraph testparagraph test</p>
</div>
</body>
<script type="text/javascript">
	// Get the container element
var btnContainer = document.getElementById("navbar");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("navbtn");

// Loop through the buttons and add the active class to the current/clicked button

for (var i = 0; i < btns.length; i++) 
{
  btns[i].addEventListener("click", function() 
  {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace("active", "navbtn");
    this.className = "active";
  });
}
</script>
</html>

