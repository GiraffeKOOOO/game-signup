<!DOCTYPE html>
<html>
<head>
	<title>game-signup</title>
	<link rel="stylesheet" type="text/css" href="css/theme.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="sidemenuanims.js"></script>
    <script src="scripts/modal.js"></script>
    <script type="text/javascript"> 
            function display_c(){
            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)
            }

            function display_ct() {
                var x = new Date()
                var x1= "TIME IS: " + x.getHours( )+ ":" +  x.getMinutes();
                document.getElementById('ct').innerHTML = x1;
                display_c();
            }
        </script>
</head>
<body onload=display_ct();>
	<div id="main-container">

		<h1 id="select">SELECT A GAME</h1>

        <h3 id="select"><span id='ct'></span></h3>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>ENTER YOUR NAME</p>
            <form action="scripts/getUserName.php" method="post">
                <input type="text" name="userName" id="userName">
                <button type="submit" id="submitUserName">SUBMIT</button>
            </form>
        </div>

</div> 

        <div class="div_with_spans" id="select">
             <!-- Trigger/Open The Modal -->
            <span class='span_centered'>
                <?php
                session_start();

                if(!isset($_SESSION['userName'])){
                    echo "username not set";
                } else {
                    echo $_SESSION['userName'];
                }
                ?>
                <span class='span_next'><button id='myBtn'><i class='fas fa-pencil-alt'></i></button></span></span>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
            modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
            modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                }
            }
        </script>
        

			<div id="image-container1">
                <span id="table">
                    <table id="text-over">
                        <tr>
                            <td>Game:</td>
                            <td>Nidhogg</td>
                        </tr>
                        <tr>
                            <td>Game mode:</td>
                            <td>1 vs 1</td>
                        </tr>
                        <tr>
                            <td>Start time:</td>
                            <td>21:00</td>
                        </tr>
                        <tr>
                            <td>Signup deadline:</td>
                            <td>20:30</td>
                        </tr>
                    </table>
                </span>
                <span class="sidemenu" id="sidemenuid1">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
                    <p>enter your username below</p>
                    <input type="text" name="user-name" placeholder="Your username" id="username-field">
                    <input type="submit" value="submit" id="submit-btn">
                </span>
                <div id="button-container">
                    <button class="signup-btn" onclick="openNav1()"><span>Sign Up</span></button>
                </div>
		    </div>



        <?php

        include 'scripts/db.php';

        $query_schedule = "SELECT * FROM schedule";
        $query_schedule_result = mysqli_query($conn, $query_schedule);
        $divCounter = mysqli_num_rows($query_schedule_result);


        $game_id = array();
        $game_name = array();
        $game_mode = array();
        $game_start_time = array();
        $game_deadline = array();
        $game_background_string = array();

        while ($row = mysqli_fetch_array($query_schedule_result)){
            $game_id[] = $row['game_id'];
            $game_name[] = $row['game_name'];
            $game_mode[] = $row['game_mode'];
            $game_start_time[] = $row['start_time'];
            $game_deadline[] = $row['deadline'];
            $game_background_string[] = $row['background_string'];
        }

        for($i=0; $i < $divCounter; $i++){

            echo "<div class='image-container'>
                <span id='table'>
                    <table class='text-over'>
                        <tr>
                            <td>Game:</td>
                            <td>$game_name[$i]</td>
                        </tr>
                        <tr>
                            <td>Game mode:</td>
                            <td>$game_mode[$i]</td>
                        </tr>
                        <tr>
                            <td>Start time:</td>
                            <td>21:00</td>
                        </tr>
                        <tr>
                            <td>Signup deadline:</td>
                            <td>20:30</td>
                        </tr>
                    </table>
                </span>
                <span class='sidemenu' id='sidemenuid$i'>
                    <a href='javascript:void(0)' class='closebtn' onclick='closeNav1()'>&times;</a>
                    <p>enter your username below</p>
                    <input type='text' name='user-name' placeholder='Your username' id='username-field'>
                    <input type='submit' value='submit' id='submit-btn'>
                </span>
                <div id='button-container'>
                        <button class='signup-btn' onclick='openNav$i()'><span>Sign Up</span></button>
                </div>
            </div>";

        }

        ?>


	</div>
</body>
</html>
