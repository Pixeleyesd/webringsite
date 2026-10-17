<hr style="margin-left:50px;margin-right:50px;">
                <div style="margin:0 auto;margin-left:50px;margin-right:50px;display:flex">
                        <h1 id="welcome">Website</h1>
                        <button onclick="history.go(-1);">Back</button>
			<button onclick="location.reload();">Reload</button>
                        <button style="" onclick="window.close()" >Close</button>
                </div>
                <br>
		<style>
			.PopUpAd {
				position:absolute;
				background:black;
				border:2px solid white;
				width:85px;
				display:flex block;
				align-content:center;
				justify-content:center;
				flex-direction:column;
				z-index:99999;
				padding:5px;
				overscroll-behavior: contain;
			}
		</style>
		<div id="allPopUpAds"></div>
		<script>
			function getPopUps() {
				rand = Math.round(Math.random()*(links.length-1));
				document.getElementById("allPopUpAds").innerHTML += `<div class="PopUpAd" style='top:` +  (Math.random()*(window.innerHeight-200))+100 + `px;left:` +  (Math.random()*(window.innerWidth-(200)))+225 + `px;'><a style="display:flex block;align-content:center;justify-content:center;" href="` + links[rand] + `"><img onerror="console.warn('Broken Image: ` + images[rand] + `');this.parentNode.parentNode.remove()" width="75px" src="` + images[rand] + `"></a><button onclick="this.parentNode.remove()">remove</button></div>`;
			}
			popUp = setInterval(getPopUps, 1000);
		</script>
		<img id="AnimatedPet" src="korok.png" style="width:50px;height:50px;position:absolute;z-index:9999;display:none">
		<script>
			//window.innerHeight
			//window.innerWidth
			pet = document.getElementById("AnimatedPet");
			pet.style.display = "unset";
			let x = window.innerWidth/2;
			let y = window.innerHeight/2;
			let xForce = (Math.random()*2)-1;
			let yForce = (Math.random()*2)-1;
			let mousePosX = 0;
			let mousePosY = 0;

			function fixOffscreen() {
				x = x+xForce;
				y = y+yForce;
				if (x < 0 || x > (window.innerWidth-50)) {xForce=xForce*-1;x= x+(xForce*2)}
				if (y < 0 || y > (window.innerHeight-50)) {yForce=yForce*-1;y = y+(yForce*2)}
			}
			function movePet() {
				pet.style.top = y + "px";
				pet.style.left = x + "px";
				fixOffscreen();
			}

			setInterval(movePet,100);
		</script>
		<script src="/oneko.js"></script>
                <div id="mainBox">
			<div id="Box">
