<?php

$array = ['http://fellowshipmission.church/mp3/My%20History%20with%20God%20removes%20the%20Mysteries%20of%20My%20Future.mp3','http://fellowshipmission.church/mp3/Bible%20Study%20Building%20History%20with%20God.mp3'];

foreach ($array as $element) {
    print "<audio controls>";
    print "<source src='$element' />";
    print "</audio><br/>";
}
?>
