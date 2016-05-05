<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Fellowship Mission Church</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Tech Ministry: Serving God and His Ministries">
    <meta name="author" content="Tech Ministry">
    <!--below lines for carousel-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include ("includes/htmlhead.php"); ?>

</head>

<body>
<!--
TODO:
use JS to dump audio files into a audio-player
link nav bar universally across all pages, i.e. code it once and have it appear on multiple pages
utilize php includes?
    audio player
video player
bible study teaching series
parralax background image on index.html
1 CSS sheet with page specific css
prayer line form validation
-->

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome to Fellowship Mission Church</a>
        </div>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>&lt;!&ndash; /.navbar-collapse &ndash;&gt;-->
    </div><!-- /.container-fluid -->
</nav>

<div id="parallax-first" class="parallax-background">
        <div class="parallax-content">
This is early in the morning
</div>
</div>
<div id="parallax-second" class="parallax-background">
        <div class="parallax-content">
Why am I up so early?
        </div>
</div>
<div id="parallax-third" class="parallax-background">
        <div class="parallax-content">
Now it's time for coffee
        </div>
</div>

<footer>

</footer>

</body>
</html>