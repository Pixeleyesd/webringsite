<!doctype html>
<html>
        <link rel="stylesheet" href="/style.css">
	<link rel="stylesheet" href="/misc.css">
	<head>
		<title>Website</title>
		<meta charset="utf8">
	</head>
	<body>
		<?php require_once("template.php");?>
			<div id="indexDiv">
				<div class="textContainer">
					<div class="text">
						index of <?php echo substr(getcwd(),13); ?>
						<hr>
						<?php
							$dir = scandir(".");
							for ($i = 2; $i < sizeof($dir); $i++)  {
								if ($dir[$i] != "index.php") {
									if (is_dir("./" . $dir[$i])) {
										$type = "/index.php";
									} else {
										$type = "";
									}
									$strut = "<a class='myButton' href='" . $dir[$i] . $type . "'>" . $dir[$i] . $type . "</a>";
									echo $strut . "<br>";
								}
							}
						?>
						<br>
					</div>
				</div>
			</div>
			<script src="/marquee.js"></script>
			<div id="marqueeAds" class="marquee allOfTheAds" data-pause="true">
				<style><?php require_once("/marquee.css"); ?></style>
				<div class="Ads marquee-items"></div>
			</div>
			<div id="marqueeAds" class="marquee allOfTheAds" data-pause="true">
				<style><?php require_once("/marquee.css"); ?></style>
				<div class="Ads marquee-items"></div>
			</div>
			<script src="/getads.js"></script>
			<script src="/setmarquee.js" async></script>
			<div id="advertisments">
				<script>
					//console.log(document.cookie);
					//console.log(getCookie('ad'));
					if (getCookie('ad') == 'bad') {
						killAds();
						//console.log('MY ADS HAVE BEEN REMOVED');
					}
					function getCookie(c_name) {
					    if (document.cookie.length > 0) {
					        c_start = document.cookie.indexOf(c_name + "=");
				    	    if (c_start != -1) {
				    	        c_start = c_start + c_name.length + 1;
				    	        c_end = document.cookie.indexOf(";", c_start);
				    	        if (c_end == -1) {
				        	        c_end = document.cookie.length;
				    	        }
				    	        return unescape(document.cookie.substring(c_start, c_end));
				    		    }
				    		}
					    return "";
					}
					function createCookie(name, value, days) {
					    var expires;
					    if (days) {
					        var date = new Date();
					        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					        expires = "; expires=" + date.toGMTString();
					    }
					    else {
					        expires = "";
					    }
					    document.cookie = name + "=" + value + expires + "; path=/";
					}
					function killAds() {
						var messages = document.querySelectorAll(".allOfTheAds");
						messages.forEach(message => {
							message.innerHTML = message.style.display = "none";
						});
					}
					function setCookie(joy) {
						createCookie('ad',joy,'1');
					}
	        		</script>
				<p>Remove Advertisements?</p>
				<button onclick="setCookie('bad');killAds();this.parentNode.style.display='none'">yes</button>
				<button onclick="setCookie('good');this.parentNode.style.display='none'">no</button>
			</div>
		</div>
	</body>
</html>

