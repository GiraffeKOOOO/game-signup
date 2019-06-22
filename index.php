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
    <?php

    ?>
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
                <button type="submit">SUBMIT</button>
            </form>
        </div>

</div> 

        <div class="div_with_spans" id="select">
             <!-- Trigger/Open The Modal -->
            <span class='span_centered'>

                <?php
                session_start();
                $cookie_name = $_COOKIE[$cookie_name];

                if(isset($_COOKIE[$cookie_name])){
                    echo $cookie_name;
                } else {
                     echo 'name not set';
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

            <div id="image-container2">
                <span id="table">
                    <table id="text-over">
                        <tr>
                            <td>Game:</td>
                            <td>Counter-Strike: Global Offensive</td>
                        </tr>
                        <tr>
                            <td>Game mode:</td>
                            <td>Gun Game</td>
                        </tr>
                        <tr>
                            <td>Start time:</td>
                            <td>22:00</td>
                        </tr>
                        <tr>
                            <td>Signup deadline:</td>
                            <td>21:30</td>
                        </tr>
                    </table>
                </span>
                <span class="sidemenu" id="sidemenuid2">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
                    <p>enter your username below</p>
                    <input type="text" name="user-name" placeholder="Your username" id="username-field">
                    <input type="submit" value="submit" id="submit-btn">
                </span>
                <div id="button-container">
                    <button class="signup-btn" onclick="openNav2()"><span>Sign Up</span></button>
                </div>
            </div>

            <div id="image-container3">
                <span id="table">
                    <table id="text-over">
                        <tr>
                            <td>Game:</td>
                            <td>Team Fortress 2</td>
                        </tr>
                        <tr>
                            <td>Game mode:</td>
                            <td>Capture Point</td>
                        </tr>
                        <tr>
                            <td>Start time:</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>Signup deadline:</td>
                            <td>13:40</td>
                        </tr>
                    </table>
                </span>
                <span class="sidemenu" id="sidemenuid3">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
                    <p>enter your username below</p>
                    <input type="text" name="user-name" placeholder="Your username" id="username-field">
                    <input type="submit" value="submit" id="submit-btn">
                </span>
                <div id="button-container">
                    <button class="signup-btn" onclick="openNav3()"><span>Sign Up</span></button>
                </div>
            </div>

            <div id="image-container4">
                <span id="table">
                    <table id="text-over">
                        <tr>
                            <td>Game:</td>
                            <td>Golf With Your Friends</td>
                        </tr>
                        <tr>
                            <td>Game mode:</td>
                            <td>Free For All</td>
                        </tr>
                        <tr>
                            <td>Start time:</td>
                            <td>18:00</td>
                        </tr>
                        <tr>
                            <td>Signup deadline:</td>
                            <td>17:50</td>
                        </tr>
                    </table>
                </span>
                <span class="sidemenu" id="sidemenuid4">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
                    <p>enter your username below</p>
                    <input type="text" name="user-name" placeholder="Your username" id="username-field">
                    <input type="submit" value="submit" id="submit-btn">
                </span>
                <div id="button-container">
                    <button class="signup-btn" onclick="openNav4()"><span>Sign Up</span></button>
                </div>
            </div>

	</div>
</body>
</html>
