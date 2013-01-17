<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="">
<meta name="author" content="">
<meta property="og:title" content="DefWiz StartUP"/>
<meta property="og:type" content="school"/>
<meta property="og:image" content="http://definingwizard.com/wp-content/uploads/2012/10/icon-series.031.png"/>
<meta property="og:url" content="http://www.definingwizard.com/tstart/startupTeams5.php"/>
<meta property="og:site_name" content="DEFINING WIZARD"/>
<meta property="fb:admins" content="pjpdub"/>
<meta property="fb:app_id" content="483629355014712"/>
<title>Go DEFWIZ StartUP</title>
<link rel="stylesheet" href="demo.css" type="text/css" media="screen">
<link rel="stylesheet" href="demo-print.css" type="text/css" media="print">
<style>
    html, body {
        margin: 0px;
        padding: 0px;
    }

    h1 a {
        text-decoration: none;
        color: #3b5998;
    }

    h1 a:hover {
        text-decoration: underline;
    }

    #begin {
        text-align:center;
        margin: 10px;
        width: 400px;
        float:left;
    }

    #begin p {
        font-weight:700;
        font-size:15px;

    }

    #myteamfontsize {
        font-size:25px;
        margin: 10px;
    }

    div {
        display: inline;
    }

    #background {
        position: absolute;
        width: 100%;
        height: 100%;
        background-image:url("dwlogo.jpg");
        background-size:cover;
        opacity: 0.9;
    }

    #holder {
        margin: 5px;
        position: static;
    }

    #teamheader {
        display: inline-block;
        margin-top:5px;
        text-align:left;
        width: 50%;
    }

    .button {
        font: 1em Arial, Helvetica, sans-serif;
        color: #EEE;
        background: #444;
        text-align: center;
        margin: 4px;
        padding: 4px;
        height: auto;
        width: 10pc;
        border: 3px outset;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"
        type="text/javascript"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.21/themes/base/jquery-ui.css"
      type="text/css" media="all" />
<script src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
<script src="raphael.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript" runat="server" src="facebook-platform/php/jsonwrapper/JSON/JSON.php"></script>
<script type="text/javascript" charset="utf-8">

//    <!-- #INCLUDE FILE="fb_app.asp" -->
    var choices = "";

    window.onload = function () {
        var need_components = document.getElementById('need');
        var myNeed_ = need_components.value;
        var myNeed = $("#need");

        var r = Raphael("holder", 300, 300);
        var targets = r.set();
        targets.push(r.circle(60, 50, 10),
                r.circle(60, 75, 10),
                r.circle(60, 100, 10),
                r.circle(60, 125, 10),
                r.circle(60, 150, 10),
                r.circle(60, 175, 10),
                r.circle(60, 200, 10),
                r.circle(60, 225, 10),
                r.circle(60, 250, 10));
        targets.attr({fill: "#000", stroke: "#fff", "stroke-dasharray": "- ", opacity: .2});
        var labels = r.set();
        labels.push(r.text(80, 50, "Programmers"),
                r.text(80, 75, "Engineers"),
                r.text(80, 100, "Product Managers"),
                r.text(80, 125, "Program Managers"),
                r.text(80, 150, "Designers"),
                r.text(80, 175, "Co-Founder"),
                r.text(80, 200, "Business Manager"),
                r.text(80, 225, "Writers"),
                r.text(80, 250, "Educators"));
        labels.attr({font: "16px Fontin-Sans, Arial", fill: "#fff", "text-anchor": "start"});
        var movers = r.set();
        movers.push(r.circle(10, 50, 10),
                r.circle(10, 75, 10),
                r.circle(10, 100, 10),
                r.circle(10, 125, 10),
                r.circle(10, 150, 10),
                r.circle(10, 175, 10),
                r.circle(10, 200, 10),
                r.circle(10, 225, 10),
                r.circle(10, 250, 10));
        movers.attr({fill: "#000", stroke: "#fff", "fill-opacity": 0});
        movers[0].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(0, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000,
                    function() {
                        if (choices.indexOf('Programmers') > -1) {//if deselecting, remove choice
                            choices = choices.replace(/Programmers/gi, "");
                            document.getElementById('need').value = choices;
                        } else {
                            choices = choices+"Programmers";
                            document.getElementById('need').value = choices;
                        }
                    });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[1].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.1, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Engineers') > -1) {
                    choices = choices.replace(/Engineers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Engineers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[2].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.2, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Product Managers') > -1) {
                    choices = choices.replace(/Product Managers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Product Managers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[3].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.3, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Program Managers') > -1) {
                    choices = choices.replace(/Program Managers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Program Managers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[4].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.4, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Designers') > -1) {
                    choices = choices.replace(/Designers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Designers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[5].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.5, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Co-Founder') > -1) {
                    choices = choices.replace(/Co-Founder/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Co-Founder";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[6].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.6, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Business Managers') > -1) {
                    choices = choices.replace(/Business Managers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Business Managers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[7].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.7, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Writers') > -1) {
                    choices = choices.replace(/Writers/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Writers";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });
        movers[8].click(function () {
            this.cx = this.cx || 60;
            this.animate({cx: this.cx, "stroke-width": this.cx / 100, fill: this.cx - 100 ? "hsb(.8, .75, .75)" : "#000", "fill-opacity": +!!(this.cx - 100)}, 1000, function() {
                if (choices.indexOf('Educators') > -1) {
                    choices = choices.replace(/Educators/gi, "");
                    document.getElementById('need').value = choices;
                } else {
                    choices = choices+"Educators";
                    document.getElementById('need').value = choices;
                }
            });
            this.cx = this.cx == 60 ? 10 : 60;
        });

    };

</script>


<script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>

</head>
<body class=" hasGoogleVoiceExt">
<!--<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        // init the FB JS SDK
        FB.init({
            appId      : '483629355014712', // App ID from the App Dashboard
            appsecret  : '06cb76e4d561a46ff05a6acbd832e864',
            pageId 	   : '5MEO1R',
            $msg 	   : 'Nice script for posting to Facebook from PHP program',
            title	   : 'DW-StartUP',
            uri 	   : 'http://www.definigwizard.com',
            desc	   : 'Find your StartUP Today!',
            pic		   : 'http://definingwizard.com/wp-content/uploads/2012/10/icon-series.031.png',
            action_name: 'Go to DefiningWizard',
            action_link: 'http://www.definingwizard.com/tstart/startupTeams5.php',
            channelUrl : 'http://www.definingwizard.com/channel.html', // Channel File for x-domain communication
            status     : 'true', // check the login status upon init?
            cookie     : 'true', // set sessions cookies to allow your server to access the session?
            xfbml      : 'true',  // parse XFBML tags on this page?

        });

        FB.api('/me', function(response) {
            console.log(response.name);
        });


        function publish(){
            FB.ui(
                    {
                        method: 'feed',
                        name: 'The Defining Wizard Project',
                        caption: 'The Ultimate Tutoring Company - Connecting Students and Tutors',
                        description: document.getElementById('pitch').value,
                        link: 'http://definingwizard.com',
                        picture: 'http://definingwizard.com/wp-content/uploads/2012/10/icon-series.031.png'
                    },
                    function(response) {
                        if (response && response.post_id) {
                            alert('Post was published.');
                            document.getElementById('target').submit();
                        } else {
                            alert('Post was not published.');
                            document.getElementById('target').submit();
                        }
                    }

            );
            return window.document.getElementById('target').submit();
        };

        // Load the SDK's source Asynchronously
        // Note that the debug version is being actively developed and might
        // contain some type checks that are overly strict.
        // Please report such bugs using the bugs tool.
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=483629355014712";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));


    };
</script>   -->
<div id="background">
    <div id="begin">
        <script language="javascript" type="text/javascript" src="include/jquery-1.5.1.min.js"></script>
        <script language="javascript" type="text/javascript" src="include/jquery.validationEngine-en.js"></script>
        <script language="javascript" type="text/javascript" src="include/jquery.validationEngine.js"></script>
        <link rel="stylesheet" type="text/css" href="include/validationEngine.jquery.css" />
        <form id="target"  action="/gdform.php" method="post">
            <input type="hidden" name="subject" value="Newsletter Registration 2" />
            <input type="hidden" name="redirect" value="/">
            <input type="hidden" name="need" id="need" value="">
            <p>To the right, select <em>at most</em>  3 people you need on your team to start your business, then submit</p>
            <b>First name: </b><input type="text" name="fname" id="fname"><br>
            <b>Last name : </b><input type="text" name="lname" id="lname"><br>
            <b>Email     : </b><input type="email" name="email" id="email" value="support@definingwizard.com"><br>
            <b>Description: </b><br>
            <textarea name="pitch" id="pitch" rows="6" cols="20">Consider this your 30 second pitch!  Make sure to mention what your skills are, as well. </textarea>
            <br><br>
            <b>Register for Newsletter and Replies: </b><br>
            <input type="radio" name="newletter1" id="newsyes" value="yesnews">
            <label for="yes">YES</label> <br>
            <input type="radio" name="newletter2" id="newsno" value="nonews">
            <label for="no">NO</label> <br><br>

            <b>Startup Method: </b><br>
            <input type="radio" name="bootstrap" id="bootstrap" value="bootstrap">
            <label for="bootstrap">Bootstrap (use own funds)</label> <br>
            <input type="radio" name="funded" id="funded" value="funded">
            <label for="funded">Funded (venture capitalist/angel funded)</label> <br><br>

            <input type="submit" value="Submit" class="button">

        </form>


        <script language="javascript" type="text/javascript">
            $(document).ready(function() {
                $(".button").click(function(event) {
                    $("#target").validationEngine();
                    event.preventDefault();
                    if($("#target").validationEngine({returnIsValid:true})) {
                        alert( $("#target").serialize());
                        $.ajax({
                            type: $("#target").attr("method"),
                            url: $("#target").attr("action"),
                            data: $("#target").serialize(),
                            success: function(data) {

                                $("#target").append("<p>Successfully sent out this request to save the world!</p>" +
                                        "<p>Check <a href='https://www.facebook.com/defwizard'> our facebook page</a> and share your project with your network</p>" +
                                        "<p>Your Super Team is one step closer assimulation!</p>");
                            }
                        });
                    }
                });
            });
        </script>

        <?
//        require_once ('facebook-platform/php/facebook.php');

        function check_email($emailAddress) {
            if (preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $emailAddress)){
                $emailArray = explode("@",$emailAddress);
                if (checkdnsrr($emailArray[1])){
                    return true;
                }
            }
            return false;
        }
        function send_email() {
            $need;
            $message = "\nName: " . $_POST['fname'] .
                "\nEmail: " . $_POST['email'] .
                "\nPitch: " . $_POST['pitch'] .
                "\nLooking For: " . $_POST['need'];

            $message .= "\n\nBrowser Info: " . $_SERVER["HTTP_USER_AGENT"] .
                "\nIP: " . $_SERVER["REMOTE_ADDR"] .
                "\n\nDate: " . date("Y-m-d h:i:s");

            $siteEmail = 'pwilliamsjr@gmail.com,'.$_POST['email'];
            $emailTitle = 'Request from definingwizard.com';
            $thankYouMessage = "Thank you for contacting us, we'll get back to you shortly.";

            /*if(isset($_POST['email'])) {
                alert("Hello");
                if ( !check_email( trim($_POST['email']) )) {
                    'Please enter a valid email address<br />';
                }
                else send_email();
                exit;
            }*/

            if(! mail($siteEmail, $emailTitle, $message, 'From: ' . $_POST['fname'] . ' <' . $_POST['email'] . '>' . $thankYouMessage))
                'Mail can not sent.';

            /*$facebook = new Facebook(array(
                'appId' => $appid,
                'secret' => $appsecret,
                'cookie' => false,
            ));

            if(true){
                echo "
            <script type=\"text/javascript\">
            function publish(){
                    FB.ui(
                            {
                                method: 'feed',
                                name: 'The Defining Wizard Project',
                                caption: 'The Ultimate Tutoring Company - Connecting Students and Tutors',
                                description: document.getElementById('pitch').value,
                                link: 'http://definingwizard.com',
                                picture: 'http://definingwizard.com/wp-content/uploads/2012/10/icon-series.031.png'
                            },
                            function(response) {
                                if (response && response.post_id) {
                                    alert('Post was published.');
                                    document.getElementById('target').submit();
                                } else {
                                    alert('Post was not published.');
                                    document.getElementById('target').submit();
                                }
                            }
                            document.getElementById('target').submit();
                    );
                    return false;
                }
            </script>
        ";

            }*/
        }
        ?>



    </div>

    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fdefwizard&amp;width=292&amp;height=62&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=false&amp;appId=483629355014712" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>

    <div id="teamheader">
        <b id="myteamfontsize">My Team Requires: </b> <br>
        <em>Click left circles to start building your team.</em>  <br>
        <em>Who do you need?</em>


    </div>

    <div id="holder">
    </div>

    <p id="copy">Demo of **SWAG</p>
</div>
</body>
</html>
<?=$_SERVER['PHP_SELF'];?>