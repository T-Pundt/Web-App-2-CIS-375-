<?php
    $firstName = filter_input(INPUT_POST, 'first_name');
    $lastName = filter_input(INPUT_POST, 'last_name');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
    <h1>Welcome To The PHP Page</h1>
    <p>Welcome: <?php echo htmlspecialchars($firstName); echo" ";  echo htmlspecialchars($lastName); ?> </p>

</body>
</html>
