<html>
    <head>
        <title>Blue Screen</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fjalla+One&display=swap" rel="stylesheet">
        <meta content="width=device-width" name="viewport">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
                setTimeout(
                function(){
                    $('#s-a').replaceWith($('#s-b'));
                    $('#s-b').show();
                },
                3000
                );
            });
            $(window).load(function(){
                setTimeout(
                function(){
                    $('#aa').replaceWith($('#bb'));
                    $('#bb').show();
                },
                5000
                );
            });
            $(window).load(function(){
                setTimeout(
                function(){
                    $('#bb').replaceWith($('#cc'));
                    $('#cc').show();
                },
                8000
                );
            });
            function openNav() {
            document.getElementById("navigation").style.width = "250px";
            }

            function closeNav() {
            document.getElementById("navigation").style.width = "0";
            }
    </script>
    </head>
<body>
    <div id="navigation" class="sidenav">
        <a href="javascript:void(0)" class="close" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
    </div>
    <div class="ascreen" style="background-image: url('images/abg.png'); background-repeat: no-repeat; background-size: cover; background-position: center;" id="aa">
        <span style="font-size:50px;cursor:pointer; color: rgb(62, 242, 255); margin-left: 50px;" onclick="openNav()">&#9776;</span>
        <div class="acon-a" id="s-a">
            <p class="a">
                Competitive And Active<br>We Live To Code<br> And
            </p>
        </div>
        <div class="acon-b" id="s-b">
            <p class="b">
                We Are
            </p>
        </div>
    </div>
    <div class="load" id="bb">
        <div class="con-load">
        </div>
    </div>
    <div class="blue" id="cc">
        <img src="images/blue.png" style="width: 111%;height: 100%; margin-left: auto;margin-right: auto;">
        <div class="label">
            <p>
                Team Blue Screens
            </p>
        </div>
    </div>
</body>
</html>
