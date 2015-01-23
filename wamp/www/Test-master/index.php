<?php include "TwitterOAuth.php"; ?>
<?php
$consumer="jU0MkA7mNjjVqP8Xhv8Ol6vPW";
$consumersecret="9D0keq6hPkmQEv77ag4JN7dx1XSJ83XM4CnoLKEcajJJcKymTl";
$accesstoken="419577606-p5d1Uzia7Uov3Jamr7SmnT1fpbAuTjAC2SlT4yhF";
$accesstokensecret="rR5Gf7G4TFlFLLd2kJM2cbTXLkzNBWXNmVyAHITn9RFXR";

$twitter = new TwitterOAuth($consumer,$consumersecret,$accesstoken,$accesstokensecret);
?>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title> tiwtter search </title>
</head>
<body class="page lang-fr">
<div id="wrapper" class="hfeed" bgcolor="black">
	<form action="" method="post">
		<label> Search : <input type="text" name="keyword"/></label>
	</form>
	</div>
	<center>
	<?php 
	if(isset($_POST['keyword'])){
	$tweets=$twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$_POST['keyword'].'&lang=tr& result_type=recent&count=150');
	
	
            foreach ($tweets as $tweet) {
                foreach ($tweet as $t) {
	
                        echo $t->text . '</br>';
                    
                }
            }
	}
	?>
	</center>
</body>

</html>