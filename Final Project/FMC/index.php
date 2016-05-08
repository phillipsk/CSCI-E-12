<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/htmlhead.php"); ?>

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

<?php
include('includes/nav.php');
?>

<div id="parallax-first" class="parallax-background">
    <div class="parallax-content">
        <p id="good-worship"> Good Worship</p>
        <p id="great-wroship"> Great Worship</p>
    </div>
</div>
<div id="parallax-second" class="parallax-background">
    <div class="parallax-content">
        <p id="soften-up">Soften up with the Music</p>
    </div>
</div>
<div id="parallax-third" class="parallax-background">
    <div class="parallax-content">
        <p id="Praise">Now it's time to give God the Praise!</p>
    </div>
</div>

<?php include('includes/footer.php'); ?>

</body>
</html>
