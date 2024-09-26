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


.button {
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
.button {
	background-color: #3498db;
}



@media(min-width: 900px) {
	
	
	.at-team img {
		height: 112px;
	}
	.at-team > div {
		padding: 13px;
		width: 400px;
        height: 250px;
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
		margin-top: 200px;
	}

	.at-team img {
		height: 64px;
	}
	.at-team > div {
		padding: 13px;
		font-size: 18px;
        width: 400px;
        height: 250px;
	}
	
}
</style>