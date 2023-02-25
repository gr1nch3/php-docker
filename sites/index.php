<!-- Show the index of projects in the parent folder on the web page -->
<?php
    $dir = "./"; // specify the directory you want to scan

    if (is_dir($dir)) {
        $files = scandir($dir); // get the list of files and directories
        echo "<h1>Directories with index page:</h1><br>";
        foreach ($files as $file) {
            // checkif the directory has index.html or index.php file
            if (is_dir($dir . $file) && (file_exists($file . "/index.php"))) {
                echo "<a href='$file/index.php'>$file</a><br>"; // create a clickable link to the index page
            }
        }
    }
?>