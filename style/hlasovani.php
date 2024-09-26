<?php require('style.php'); ?>
<style>
body{
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-background-size: cover;
  background-size: cover;
  background-image: url('./img/background.jpg');
  background-attachment: fixed;
}  
.at-jmeno {
    color: white;
    text-shadow: 0px 0px 20px black;
    text-align: center;
	margin-top: 1.25em;
	font-size: 3em;
}	

.at-team {
	display: flex;
	justify-content: space-around;
	flex-wrap: wrap;
	margin: 20px auto 10px auto;
	width: 95%;
}

.at {
	padding: 20px 0;
}

.at h2 {
	margin-top: 0;
}

.at-team > div {
	padding: 10px;
	margin: 5px;
	background-color: rgba(0,0,0,0.5);
	color: white;
	text-align: center;
	transition: all ease 0.3s;
	width: 100px;
	font-size: 10px;
	z-index: 5;
    animation: pulse 2.5s infinite ease-in-out alternate;
}  

  @keyframes pulse {
    from { transform: scale(0.9); }
    to { transform: scale(1.05); }
  }
.at-team > div:hover {
	transform: scale(1.02);
}

.at-team h3 {
	margin-bottom: 8px;
	font-weight: 600;
}

.at-team img {
	margin-top: 50px;
}


.majitel,.admin,.helper,.builder {
	padding: 12px;
	color: white;
	margin-top: 200px;
}

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active{
	text-decoration: none;
}
.majitel {
	background-color: #ff8700;
}
.admin {
	background-color: #4267b2;
}
.helper {
	background-color: #ff8243;
}

.builder {
	background-color: #1C48C5;
}



@media(min-width: 900px) {
	
	
	.at-team img {
		height: 112px;
	}
	.at-team > div {
		padding: 13px;
		width: 250px;
		font-size: 18px;
	}

	.at {
		padding: 40px 0;
	}

}
@media (max-width: 1080px) {
	.at-jmeno {
		font-size: 1.5em;
	}
	.majitel,.admin,.helper,.builder {
		margin-top: 50px;
	}

	.at-team img {
		height: 64px;
	}
	.at-team > div {
		padding: 13px;
		width: 250px;
		font-size: 18px;
	}
	
}


.czech-craft::before {
    background-image: url("https://czech-craft.eu/static/background.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover;
    background-size: cover;
    content: "";
    position: absolute;
    background-size: cover;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
	opacity: 1;
	filter: brightness(50%);
}

.craftlist::before {
    background-image: url("	https://craftlist.org/img/craftlist/background.jpg");
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover;
    background-size: cover;
    content: "";
    position: absolute;
    background-size: cover;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
}
.minecraft-list::before {
    background-image: url("		https://www.minecraft-list.cz/assets/images/background.webp");
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover;
    background-size: cover;
    content: "";
    position: absolute;
    background-size: cover;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
}
.minecraftservery::before {
    background: rgb(2,0,157);
	background: -moz-linear-gradient(172deg, rgba(2,0,157,1) 0%, rgba(24,153,255,1) 100%);
	background: -webkit-linear-gradient(172deg, rgba(2,0,157,1) 0%, rgba(24,153,255,1) 100%);
	background: linear-gradient(172deg, rgba(2,0,157,1) 0%, rgba(24,153,255,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#02009d",endColorstr="#1899ff",GradientType=1);
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-background-size: cover;
    background-size: cover;
    content: "";
    position: absolute;
    background-size: cover;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: -1;
}
</style>