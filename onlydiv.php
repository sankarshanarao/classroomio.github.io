<!DOCTYPE html>
    <html>
    <head>
        <title>Dashboard - Classroom.io</title>
        <link rel="stylesheet" type="text/css" href="styles.css" />
        <link rel="icon" href="assets/classroomioDark.png">
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

            .fileToUpload {
                color: #000;
                background-color: aquamarine;
                font-size:15px;
                font-weight: 900;
                border: 2px solid green;
                padding:10px;
                border-radius: 20px;
                margin:10px;
            }
            
            .homeworkContainer {
                padding:20px;
                border:2px solid green;
                border-radius:20px;
                line-height: 20px;
                margin:20px;
            }
            .qouteWord {
                border:2px solid green;
                border-radius: 20px;
                margin:20px;
                padding:20px;
                font-family: cursive;
                font-weight: 700;
            }
            
            .proPicHolder:hover {
                border:10px solid grey;
                padding:0;
                border-radius:5px;
                
            }
            .proPicHolder img:hover {
                border-radius:0;
                opacity: 0.5;
                
            }
            
            @media screen and (max-width:750px){
                [class*="col"] {
                    width:100%;
                }
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
        
        
        <div class="dashboardContainer">
        <div class="row">
            <div class="col3">
                <div class="personaHolder">
                    <div class="proPicHolder">
                        <img src ="<?php include('image_print.php');?>" height=100% width=100%>
                    </div>
                    <div class="infoHolder">
                        <p><?php 
							echo $_SESSION['name']."<br>"; 
							echo $_SESSION['university'];
							?>
						</p>
                    </div>
                </div>
            </div>
            
            <div class="col6">
                <div class="notsNPosts" id="threads">
					<div id="forum" >
						<?php include('demo_iframe.php') ?>
							<form action="fin_php.php" method="POST">
								Input:
								<input style="width:95%;margin-left:20px;margin-right:20px;" type="text" size="100%" name="INP" autofocus/>
								<textarea style="width:95%;margin-left:20px;margin-right:20px;height:40%;" rows="20" cols="20" name="content"></textarea>
								<input type="submit" class="myButt"/>
							</form>
					</div>
                </div>  
            </div>
            
            <div class="col3">
                <div class="randomBox">
                    <div class="qouteWord">
					   <?php include("quote_word.php"); ?>
                    </div>
                    
					<button onclick="window.open('chat_room.php')" style="margin:auto;">Chat Room</button>
					<div class="homeworkContainer">
					Upload Homework
					<form action="upload.php" method="post" enctype="multipart/form-data">
						Select image to upload<br>
						<input type="file" name="file" id="fileToUpload" class='fileToUpload'>
						<input type="submit" value="Upload" name="submit" class="fileToUpload" >
					</form>
					</div>
				</div>
            </div>
        </div>
		</div>        
        
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

    </body>
</html>
