<?php

    if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!="")   {

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

            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $email=$_POST["email"];
            $pass=$_POST["pass"];

            $sql = "INSERT INTO `users` (`Fname`, `Lname`, `Email`, `Pass`) VALUES ('$fname', '$lname', '$email', '$pass')";
            
            $result = mysqli_query($con, $sql);

            if($result)
                echo "New record created successfully";
            else
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
        }

    mysqli_close($conn);

    }
?>

        <div class="loginContainer">
            
            <div class="coffeeMug"></div>
            <div class="cupCoffee"></div>
            <div class="canCoffee"></div>
            <div class="mugCoffee"></div>
            
            <form action="#" class="logInForm signUpForm" method="POST">

                <h2>Sign Up</h2>

                <div class="goInLine">
                    <input type="text" placeholder="First Name" class="inputBoxes firstBox" onblur="checkEmail()" name="fname">
                    <input type="text" placeholder="Last Name" class="inputBoxes" onblur="checkEmail()" name="lname">
                </div>

                <input type="email" id="email" placeholder="Email" class="inputBoxes" onblur="checkEmail()" name="email">
                <input type="password" id="passWord" placeholder="Password" class="inputBoxes" onblur="checkEmail()" name="pass">
                
                <div class="goInLine">
                    <input type="submit" placeholder="Password" class="logInSubmit" onblur="checkEmail()" name="submitBtn">
                </div>
            
            </form>
        </div>
        
        </footer>

    </div>