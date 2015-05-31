<?php
    // Get file title from url
    $file = $_GET["file"];

    // Get the count file location
    $count_file = "projects/$file/count.txt";

    // Get the count from the file
    $hit_count = @file_get_contents($count_file);

    // Add 1 to the count
    $hit_count++;

    // Put the value back in the file
    @file_put_contents($count_file, $hit_count);

    // Get a random number either 0 or 1
    $random = rand(0, 1);

    // Send to either donate page or newsletter sign-up page
    if ($random == 0)
    {
        header("Location: donate.php?file=$file");
    }
    else if ($random == 1)
    {
        header("Location: newsletter.php?file=$file");
    }
?>