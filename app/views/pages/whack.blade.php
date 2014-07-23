<!DOCTYPE html>
<html>
<head>
	<title>Whack-A-Newbie</title>
	<link rel="stylesheet" href="/webpage_ext/css/whack.css"></script>
	<link href='http://fonts.googleapis.com/css?family=Life+Savers:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="heading">	
  <h2>Whack-A-Newbie</h2>
   <h3>Score</h3>
    <div id="score" ></div>
</div>
 
  <div id="main-div">
	<div id="box1" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box2" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box3" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box4" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box5" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box6" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box7" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box8" class="box"><img class="boximage"style="display:none;"></div>
	<div id="box9" class="box"><img class="boximage"style="display:none;"></div>
   </div>	
	

<script src="/webpage_ext/js/jquery2.1.1.js"></script>
<script>

var timer = setInterval('random()',1000);
var counter = 0; 

function random() {

  $('.boximage').fadeOut();
  var randNum = Math.floor(Math.random() * 8);
  $('.box').eq(randNum).children('.boximage').fadeIn();
}

$('.boximage').click(function(){
  counter += 1;
  $('#score').html(counter);
  $(this).hide();
});

</script>
</body>
</html>