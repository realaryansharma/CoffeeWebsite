<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts cdn -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Poppins:wght@300;500;600&family=Sacramento&display=swap"
        rel="stylesheet">
    <!-- External CSS -->

    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="js/script.js"></script>

    <title>Shopping Cart</title>
</head>

<body>
    <div class="container">
        <div class="info">
            <p>Name : @Aryan Sharma </p>
            <p>SAP ID : 500105117 </p> Roll No : 5</p>
        </div>

        <?php include './modules/header.php';?>

        <?php

            // if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
            //     $url = "https://";   
            // else  
            //     $url = "http://";   
            // // Append the host(domain name, ip) to the URL.   
            // $url.= $_SERVER['HTTP_HOST'];   
            
            // // Append the requested resource location to the URL   
            // $url.= $_SERVER['REQUEST_URI'];    

            // $url = explode("/",$url);


            if(isset($_GET["p"])) {
                include "./modules/".$_GET["p"].".php";
            } else {
                include "./home.php";
            }

        ?>
        
        <?php include './modules/footer.php';?>
       
    </div>
</body>

</html>