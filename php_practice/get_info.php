<?php
$birthday = $_POST['birthday'];
$youbi = date("l", strtotime($birthday)); 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8"/>
    <title>PHP practice</title>
</head>
<body>
    <h1>PHP practice</h1>
    <p><?php echo htmlspecialchars($youbi); ?></p>
</body>
</html>

