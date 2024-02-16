<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/home.css">
</head>

<body>
    
    <?php
        include_once './../components/header.php';
        if(isset($_SESSION["action"])){
            $action = $_SESSION["action"];
            switch ($action) {
                case 'register':
                    include_once './../pages/home.php';
                    break;
                case 'login':
                    include_once './../pages/task.php';
    
                default:
                
                    break;
            }

        }else{
            include_once './../pages/home.php';
        }

    ?>


<button>Add</button>

    
</body>

</html>