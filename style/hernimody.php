<?php require('style.php'); ?>
<style>

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
	z-index: 10;
}

.at {
	padding: 20px 0;
}

.at h2 {
	margin-top: 0;
}

.at-team > div {
	padding: 10px;
	position: relative;
	margin: 5px;
	background-color: rgb(0, 0, 0,0.2);
	color: white;
	text-align: center;
	transition: all ease 0.3s;
	width: 100px;
	z-index: 15;
	max-width: 20em;
}
.at-team > div:hover {
	transform: scale(1.02);
}

.at-team h3 {
	margin-bottom: 8px;
	font-weight: 600;
}

.at-team img {
	width: 50px;
	margin-top: 20px;
}


.majitel,.admin,.helper,.builder {
	padding: 12px;
}

.majitel {
	background-color: rgba(244, 65, 65, .5);
}
.admin {
	background-color: rgba(66, 134, 244, .5);
}
.helper {
	background-color: rgba(59, 211, 42, .5);
}




@media(min-width: 900px) {
	
	
	.at-team img {
		width: 170px;
	}
	.at-team > div {
		padding: 13px;
		width: auto;
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
	.at-team > div {
		width: 60vw;
		margin-top: 4em;
    }

    .at-team img {
        width: 12em;
        margin-top: 20px;
    }
}
</style>