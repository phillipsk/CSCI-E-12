<?php
    $dir = opendir('img');
    $entries = array();
    $mtimes = array();

    if ($dir) {
        while ( ($entry = readdir($dir)) !== false ) {
            if ( stripos($entry, '.jpg') !== false ) {
                array_push($entries, $entry);
                $stats = stat("img/$entry");


                //var_dump($stats);

                $mtimes[$entry] = filemtime("img/$entry");


 //               var_dump($entry, filemtime("img/$entry"));

                //echo "$entry<br/>";
                //echo "<img src='img/$entry' />";
                //<audio controls>
                //<source src='img/$entry' />
                //</audio>
                //echo "$entry<br/>";
            }
        }
    }
    
    usort($entries, function ($a, $b) {
        return $mtimes[$a] - $mtimes[$b];
    });

//    var_dump($mtimes);

    //
    //$entries = [$entries[0], $entries[1], $entries[2]];


    echo implode(',', $entries);
?>
