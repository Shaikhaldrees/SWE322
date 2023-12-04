	<link rel="stylesheet" href="style-final.css"/>


var mood = document.getElementById("mood");
		mood.onclick=function(){
			document.body.classList.toggle("darkmood");
			if(document.body.classList.contains("darkmood")){
				mood.src="imgs.fanil/light Mood.JPG";
			}
			else{
			mood.src="imgs.fanil/dark mood.JPG";
			}
		}
