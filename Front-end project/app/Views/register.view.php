<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/all.min.css">

    <title>Login</title>
    <style>
        body {
            background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(../../public/images/Backlog.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 97.4vh;
        }

        .loge-in {
            margin: auto;
            width: 400px;
            height: 500px;
            padding: 60px 35px 35px 35px;
            border-radius: 40px;
            background: #d7d9db;
            box-shadow: 12px 12px 30px#59595a,
                -12px -12px 30px #444444;
        }

        .LLOGO {
            background-image: linear-gradient(rgba(241, 197, 224, 0.6), rgba(241, 197, 224, 0.6)), url(../../public/images/logo.jpeg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 110px;
            height: 110px;
            border-radius: 50%;
            margin: 0 auto;
            box-shadow: 0px 0px 0px #5f5f5f,
                0px 0px 0px 5px #ecf0f3,
                8px 8px 15px #a7aaaf,
                -8px -8px 15px #ffffff;
        }

        .LLlogin {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            font-family: 'Lobster', cursive;
            padding-top: 16px;
            color: gray;
        }

        .fileds {
            width: 100%;
            padding: 75px 5px 5px 5px;
        }

        .fileds input {
            border: none;
            outline: none;
            background: none;
            font-size: 18px;
            color: #555;
            padding: 20px 10px 20px 5px;
        }

        .username,
        .password {
            margin-bottom: 30px;
            border-radius: 25px;
            padding-left: 15px;
            box-shadow: inset 8px 8px 8px #cbced1,
                inset -8px -8px 8px #ffffff;
        }

        input[type="submit"] {
            padding: 10px 17px;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            border: 2px solid gray;
            box-shadow: 3px 3px 8px #b1b1b1,
                -3px -3px 8px #ffffff;
            outline: none;
            justify-items: center;
            font-size: large;
            font-weight: 700;
            background-color: pink;
            color: grey;
            margin-left: 100px;
            width: 50%;
            transition: .5s;
        }

        input[type="submit"]:hover {
            background-color: gray;
            color: pink;
        }

        input[type="submit"]:active {
            background-color: rgb(94, 93, 93);
            color: white;
        }
    </style>
</head>

<body>
    <form id="register" action="/register" method="post" class="loge-in">
        <div class="LLOGO"></div>
        <div class="LLlogin">Register</div>
        <div class="fileds">
            <div class="username"> <i class="fas fa-user"></i>
                <input type="text" name="username" id="name" class="user-input" placeholder=" User name">
            </div>
            <div class="password"> <i class="fas fa-lock"></i>
                <input type="password" name="password" id="pass" class="pass-input" placeholder=" Password">
            </div>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
    <!-- <script src="js/login.js"></script> -->
</body>

</html>