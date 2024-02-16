<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tasks</title>
    <link rel="stylesheet" href="../KOdile/styles/chat.css">
</head>

<body>
<?php
                if (isset($_SESSION['data'])) {
                    $user = json_encode($_SESSION['data']);
                } else {
                    $res['error'] = 'Vous devez vous connectez pour accéder a la section message';
                    $_SESSION["res"] = $res;
                    header("Location: ../../KOdile");
                }
?>
    <div id="container">
     tasks
    </div>

</body>

</html>