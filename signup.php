<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .b1{
            
            text-align: center;
            margin-top: 20px;
            padding-top: 50px;
            padding-bottom: 30px;
           
        }
        body { 
            margin: auto;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: auto;
    background: linear-gradient(315deg, rgb(21, 195, 181) 3%, rgb(58, 192, 183) 38%, rgb(105, 214, 207) 68%, rgb(19, 129, 120) 98%);
    animation: gradient 15s ease infinite;
    background-size: 400% 400%;
    background-attachment: fixed;
            }
            .loop-wrapper {
            margin: 0 auto;
            position: relative;
            display: block;
            margin-top: 118px;
            width: 100%;
            height: 100px;
            overflow: hidden;
            border-bottom: 3px solid #fff;
            color: #b87575;
            background-color: black;
            }
            .mountain {
            position: absolute;
            right: -900px;
            bottom: -20px;
            width: 2px;
            height: 2px;
            box-shadow: 
            0 0 0 50px #4DB6AC,
            60px 50px 0 70px #4DB6AC,
            90px 90px 0 50px #4DB6AC,
            250px 250px 0 50px #4DB6AC,
            290px 320px 0 50px #4DB6AC,
            320px 400px 0 50px #4DB6AC
            ;
            transform: rotate(130deg);
            animation: mtn 20s linear infinite;
            }
            .hill {
            position: absolute;
            right: -900px;
            bottom: -50px;
            width: 400px;
            border-radius: 50%;
            height: 20px;
            box-shadow: 
                0 0 0 50px #4DB6AC,
                -20px 0 0 20px #4DB6AC,
                -90px 0 0 50px #4DB6AC,
                250px 0 0 50px #4DB6AC,
                290px 0 0 50px #4DB6AC,
                620px 0 0 50px #4DB6AC;
            animation: hill 4s 2s linear infinite;
            }
            .tree, .tree:nth-child(2), .tree:nth-child(3) {
            position: absolute;
            height: 100px; 
            width: 35px;
            bottom: 0;
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/tree.svg) no-repeat;
            }
            .rock {
            margin-top: -17%;
            height: 2%; 
            width: 2%;
            bottom: -2px;
            border-radius: 20px;
            position: absolute;
            background: #ddd;
            }
            .truck, .wheels {
            transition: all ease;
            width: 85px;
            margin-right: -60px;
            bottom: 0px;
            right: 50%;
            position: absolute;
            background: #eee;
            }
            .truck {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/truck.svg) no-repeat;
            background-size: contain;
            height: 60px;
            }
            .truck:before {
            content: " ";
            position: absolute;
            width: 25px;
            box-shadow:
                -30px 28px 0 1.5px #fff,
                -35px 18px 0 1.5px #fff;
            }
            .wheels {
            background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/130015/wheels.svg) no-repeat;
            height: 15px;
            margin-bottom: 0;
            }

            .tree  { animation: tree 3s 0.000s linear infinite; }
            .tree:nth-child(2)  { animation: tree2 2s 0.150s linear infinite; }
            .tree:nth-child(3)  { animation: tree3 8s 0.050s linear infinite; }
            .rock  { animation: rock 4s   -0.530s linear infinite; }
            .truck  { animation: truck 4s   0.080s ease infinite; }
            .wheels  { animation: truck 4s   0.001s ease infinite; }
            .truck:before { animation: wind 1.5s   0.000s ease infinite; }


            @keyframes tree {
            0%   { transform: translate(1350px); }
            50% {}
            100% { transform: translate(-50px); }
            }
            @keyframes tree2 {
            0%   { transform: translate(650px); }
            50% {}
            100% { transform: translate(-50px); }
            }
            @keyframes tree3 {
            0%   { transform: translate(2750px); }
            50% {}
            100% { transform: translate(-50px); }
            }

            @keyframes rock {
            0%   { right: -200px; }
            100% { right: 2000px; }
            }
            @keyframes truck {
            0%   { }
            6%   { transform: translateY(0px); }
            7%   { transform: translateY(-6px); }
            9%   { transform: translateY(0px); }
            10%   { transform: translateY(-1px); }
            11%   { transform: translateY(0px); }
            100%   { }
            }
            @keyframes wind {
            0%   {  }
            50%   { transform: translateY(3px) }
            100%   { }
            }
            @keyframes mtn {
            100% {
                transform: translateX(-2000px) rotate(130deg);
            }
            }
            @keyframes hill {
            100% {
                transform: translateX(-2000px);
            }
            }
        

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
label
{
    font-size: larger;
    text-align: left;
}
    </style>
</head>
<body>
    <div class="b1">
        <form action="signup.php" method="post">
            <label for="First name">Name</label><br>
            <input type="text" placeholder="Enter the First name" id="name" name="name" required><br><br>
            
            <label for="" id="name">Gender</label>
            <input type="radio" name="gender" value="male" id="male">
            <label for="">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="">Female</label>
            <input type="radio" name="gender" value="others" id="others">
            <label for="">Others</label><br>
            <br>
            <br>
            <label for="mail">Email</label><br>
            <input type="email" id="mail" name="mail"><br><br>
            <label for="">Blood Group</label><br>
                <select name="bgroup" id="bgroup">
                    <option value="">Select blood group</option>
                    <option value="A+">A <sup>+</sup></option>
                    <option value="A-">A <sup>-</sup></option>
                    <option value="B+">B <sup>+</sup></option>
                    <option value="B-">B <sup>-</sup></option>
                    <option value="O+">O <sup>+</sup></option>
                    <option value="O-">O <sup>-</sup></option>
                    <option value="AB+">AB <sup>+</sup></option>
                    <option value="AB-">AB <sup>-</sup></option>
                </select> <br> 
             <br>   
            <label for="phone"  >Contact No</label><br>
            <input type="text" id="phn no" size="10" id="phone" name="phone"><br>
        <br>
            
            <label for="pin">pincode</label><br>
            <input type="text" size="6" name="pin" id="pin">
        <br><br>
       
        
        <input type="checkbox" required>
        <label for="">I am interested for blood donation and I accept the terms and Conditions </label><br><br>
        <button type="submit" onclick="save()">SUBMIT</button> 
        </form>
    </div>
    <script>
        function save(){
            alert("Registration successful");
        }
    </script>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
     </div>

    <div class="loop-wrapper">
        <div class="mountain"></div>
        <div class="hill"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="tree"></div>
        <div class="rock"></div>
        <div class="truck"></div>
        <div class="wheels"></div>
      </div> 
<?php
$conn = new mysqli('localhost', 'root', '', 'bbank');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $gender=$_POST["gender"];
    $mail = $_POST["mail"];
    $bgroup=$_POST["bgroup"];
    $phone=$_POST["phone"];
    $pin=$_POST["pin"];
    
    $sql = "INSERT INTO users (name, gender,mail,bgroup,phone,pin) VALUES ('$name','$gender', '$mail', '$bgroup','$phone','$pin')";
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
</body>
</html>