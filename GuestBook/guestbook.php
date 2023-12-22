<!DOCTYPE html>
<html>
<head>
    <title>Le Nom Des Fleurs</title>
    <meta name="author" content="Thomas Guillory" />
    <meta name="Description" content="GuestBook" />

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../screen.css">
</head>
<body>
    <div class="center-container">
    <h1>Guestbook</h1>
</div>

<h4>Add Text</h4>
    <form action="guestbook.php" method="post">
        <input type="text" name="userText" placeholder="Enter text" style="left:auto; position:relative;">
        <button type="submit" name="submit">Submit</button>
    </form>

    <hr>
    <!-- PHP code to display and delete stored text -->
    <?php

    $file = 'guestbook.txt';
    if (file_exists($file)) {
        // $storedText = file_get_contents($file);
        $textArray = file($file, FILE_IGNORE_NEW_LINES);
        
        echo '<ul>';
        foreach ($textArray as $index => $text) {
            if (!empty($text)) {
                echo '<li> '
          . htmlspecialchars($text) . '
                      </li>';
            }
        }
        echo '</ul>';
    } else {
        echo 'No text available.';
    }


    ?>
    
    <!-- PHP code to handle form submission -->
    <?php
    if (isset($_POST['submit'])) {
        $text = $_POST['userText'] . PHP_EOL;

        file_put_contents($file, $text, FILE_APPEND);
        header("Location: guestbook.php"); // Redirect to refresh the page and display updated text
    }
    ?>
</body>
</html>
