	<html>
	<head>
		<title>Chat Room</title>
		<script src="change_color.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="icon" href="assets/classroomioDark.png">
		<style>
		
		body{
			background-image: url('assets/ab.c.jpg');
		}
		/*
		.button1 {
				background-color: white; 
				color: black; 
				border: 2px solid #4CAF50;
				border-radius:10px;	
			}
		.button1:hover {
				background-color:#4CAF50 ; 
				color: white;
				transition-duration:2s;
			}*/
		.signin-button {
    		display: block;
    		background-color: #ff9532;
    		font-size: 1rem;
    		border:none;
    		color:#fff; 
    		border-radius:5px; 
    		padding:20px;
		}

		iframe{
			background-color:#f0fff0;
    		opacity:0.9;
    		box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
    		-webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
    		-moz-box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
    		padding: 40px  10px 10px 10px; 
    		border-radius:10px;

    		
		}
		.signin-card {
			background-color:#f0fff0;
			opacity:0.9;
			width:78%;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
			-webkit-box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
			-moz-box-shadow: 2px 2px 2px rgba(0,0,0,0.5);
			padding: 10px  10px 10px 10px; 
			border-radius:10px; 
			margin:10px;  
		}	
		</style>
	</head>
	<body>
		<div style="margin-left:20%">
			<iframe src="chat_room_details.php" width="75%" height="80%" align="middle"></iframe>
			<form action="chat_room_input.php" method="POST">
				<input type="text" size="100%" name="chat" class="signin-card" placeholder="Add your text here" autofocus/>
				<input type="submit" class="signin-button" value="Comment" />
			</form>
		</div>
	</body>
</html>