<html>
	<head>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="assets/classroomioDark.png">
		<title>Forums</title>
			<style>
				.notiCard {
					width:98%;
					margin:10px;
					padding:10px;
					background-color: rgb(200,200,200);
					border: 1px solid none;
					border-radius: 5px;
					box-shadow: 0 0 10px 2px rgba(175,175,175,0.5);
					
				}

				.notiCard h3{
					font-size: 25px;
					font-weight: 700;
				}

				.notiCard a{
					text-decoration: none; 
					color: #000000;
				}

				.notiCard a:checked{
					text-decoration: none; 
					color:#000;
				}	
			</style>
	</head>
	<body>
  
<nav>
            <ul class="topnav" id="dropdownClick">
                <li><a href="onlydiv.php" class="navbrrr"><img src="assets/classroomioDark.png" height=50px width=50px></a></li>
                <li><a href="notes.html">Notes</a></li>
                <li><a onclick="window.open('chat_room.php')" href="#">Chat Room</a></li>
                <li class="topnav-right"><a href="log_out.php">Log Out</a></li>
                <li class="dropdownIcon"><a href="javascript:void(0)" onclick="dropdownMenu()">&#9776;</a></li>
            </ul>
        </nav>
<script>
                function dropdownMenu() {
                    var idx=document.getElementById("dropdownClick");
                    if(idx.className==="topnav") {
                        idx.className += " responsive";
                        /*change topnav to topnav.responsive*/
                    }
                    else {
                        idx.className = "topnav";
                    }

                } 

                
</script>

		<div align="center" class="notiCard">
			<?php
			session_start();
			$head=$_GET['head'];
			$lines=file("form_values.txt");
			for($var=count($lines)-1;$var>=0;--$var)
				{
					$str=explode("?",$lines[$var]);
					if($head==$str[1])
						echo "<div height=100% width=100%>$str[0]<br>$str[1]<br>$str[2]</div>";
				}
			$l=file("comments.txt");
			for($a=0;$a<count($l);++$a)
			{
				$s=explode("?",$l[$a]);
				if($s[0]==$head)
				{
					$len=count($s);
					for($v=$len-1;$v>0;--$v)
						echo "<div class='notiCard'>".$s[$v]."</div>"."<br>";
				}
			}
			$_SESSION['head']=$head;
			?>
			<form action="comments.php" method="POST">
				<input type="text" name="comment" size=40 placeholder="Add Comment" style="text-align:center;" autofocus>
			</form>
		</div>
	</body>
</html>