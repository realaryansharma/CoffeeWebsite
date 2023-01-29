<?php

    if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!=""){ 

        //Specifiying Credentials

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "coffee";

        // Create connection
        
        $con = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error) {
            echo "connection failed";
        }
        else {
            echo "connection connected";

            $email=$_POST["email"];
            $pass=$_POST["pass"];

            $sql = "SELECT * FROM users WHERE Email = '$email' AND Pass = '$pass'";
            $sql1 = "SELECT SUM(Id) FROM users";

            $result1 = mysqli_query($con, $sql1);

            // while ($rows = mysqli_fetch_array($result1)) {
            //     $sum = 'Total:'.$rows['total'];
            // }
            // return $iResult;

 
            echo("hy");
            $row = mysqli_fetch_array($result1);
            echo("$row[0]");
            print_r($row);

            
            $result = mysqli_query($con, $sql);
            
            $num = mysqli_num_rows($result);

            if($num)
                echo "Record Found";
            else
                echo "Record Not Found";
    
        }

    mysqli_close($conn);

    }
?>


        <div class="loginContainer">
            <div class="coffeeMug"></div>
            <div class="cupCoffee"></div>
            <div class="canCoffee"></div>
            <div class="mugCoffee"></div>
            <form action="#" class="logInForm" method="POST">
            <h2>Login</h2>
                <input type="email" id="email" placeholder="Email" class="inputBoxes addWid" onblur="checkEmail()" name="email">
                <input type="password" id="passWord" placeholder="Password" class="inputBoxes addWid" onblur="checkEmail()" name="pass">
                <div class="goInLine">
                    <input type="submit" placeholder="Password" class="logInSubmit" onblur="checkEmail()" name="submitBtn">
                    <a href="?p=signUp">Create Account</a>
                </div>
            </form>
        </div>
