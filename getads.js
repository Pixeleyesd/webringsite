let adCurrent = "";
let adWorking = "";

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
function rand(min, max) {
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
function ranAd() {
	return rand(0,links.length+2);
}

function scroll() {
	let final = [];
	let adAmount = Math.floor((Math.random()*10)+10);
	let x = 0;

	for (var i = 0; i < links.length; i++) {
		x = 0;
		adWorking = ranAd();
		while ( ( adWorking == adCurrent ) || ( x < 10) ) {
			adWorking = ranAd();
			x = x + 1;
		}

		adCurrent = adWorking;
		final.push("<a class='' href='" + links[adCurrent] + "'>" + "<img style='image-rendering:pixelated' onerror='this.parentElement.remove();' width=300px src='" + images[adCurrent] + "'>" + "</a>");
	}
	final.push('<iframe src="//incr.easrng.net/badge?key=changeme" width="100%" style="max-height:32px;min-height:32px;background: url(//incr.easrng.net/bg.gif)" title="increment badge" frameborder="0" >Oh No, you dont support Iframes >!< </iframe>');
	final.push('<iframe width="300" height="300" style="border:none" src="https://nvlk.dimden.dev/" name="neolink"></iframe>');
	return(final.join(""));
}
//document.querySelectorAll("Ads").innerHTML = scroll;

var ads = document.querySelectorAll(".Ads");
var put;
for (var i = 0; i < ads.length; i++) {
	put = scroll();
	ads[i].innerHTML = "<div style='display:flex'><div>" + put + "</div><div>" + put + "</div></div>";
}
//console.log(getCookie("ad"));
