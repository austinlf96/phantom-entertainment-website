<?php

    // GLOBAL VARIABLES
    $pages = array(array());
    $results = 0;

    // SEARCH FOR KEYWORD
    $searchFor = $_POST['data'];

    // PULL DIRECTORY OF DATA FILES
    $directory = glob("data/*.php");
    for($x = 0; $x < count($directory); $x++)
    {
        $openFile = fopen($directory[$x], "r");
        $logFile = fread($openFile, filesize($directory[$x]));
        $pageInfo = explode("[INFO]", $logFile);
        $logFile = strtolower(strip_tags($logFile));
        fclose($openFile);

        $tempFile = explode("/", $directory[$x]);
        $linkFile = explode(".", $tempFile[1]);
        $keywords = substr_count($logFile, $searchFor);

        if($keywords > 0)
        {
            $pages[$results][0] = $keywords;
            $pages[$results][1] = $linkFile[0];
            $pages[$results][2] = $pageInfo[1];
            $results++;
        }
    }

    if($results > 0)
    {
        $highRank = array();
        $lowRank = array();
        for($x = 0; $x < count($pages); $x++)
        {
            $searchInfo = "<a href='page.php?title=" . $pages[$x][1] . "&extra=none' class='text-info'>" . $pages[$x][2] . "</a>"; 
            if($pages[$x][0] > 4)
            {
                array_push($highRank, $searchInfo);
            } else {
                array_push($lowRank, $searchInfo);
            }
        }

        echo "<h5 class='mb-3'>Search Results : <small>We found " . count($pages) . " page(s) that match your search...</small></h5>";
        for($x = 0; $x < count($highRank); $x++)
        {
            echo "<div class='alert alert-secondary'><span class='fas fa-star-exclamation mr-3 text-info'></span>" . $highRank[$x] . "</div>";
        }
        for($x = 0; $x < count($lowRank); $x++)
        {
            echo "<div class='alert alert-secondary'><span class='fas fa-search mr-3 text-info'></span>" . $lowRank[$x] . "</div>";
        }
    } else {
        echo "<h5 class='mb-3'>Search Results : <small>No results found...</small></h5>";
    }

?>