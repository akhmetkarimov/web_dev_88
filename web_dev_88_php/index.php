<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 88</title>
</head>
<body>

    <h1>Hello Php</h1>

    <form action="lesson.php">
        <input type="text" placeholder="Type your name" name="first-name">
        <input type="email" placeholder="Type your email" name="email">
        <button>Send</button>
    </form>

    <h1>POST</h1>
    
    <form action="lesson.php" method="POST">
        <input type="text" placeholder="Type your name" name="first-name">
        <input type="email" placeholder="Type your email" name="email">
        <button>Send</button>
    </form>

    <?php
        $str = 'Hello from PHP';
        echo "<h2>$str</h2>";
    ?>


</body>
</html>