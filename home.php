<!DOCTYPE html>
<html>

<head>
    <title>Banking System</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            background-image: url(home.jpg);
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-color: black;

        }

        nav {
            width: 100%;
            background-color:rgba(0, 0, 0, 0.6);
            overflow: hidden;
        }

        nav ul {
            list-style-type: none;
            float: right;
            margin-top: 7px;
        }

        nav ul li {
            display: inline-block;

        }

        nav ul li a {
            text-decoration: none;
            padding: 20px 35px;
            text-align: center;
            color: #fff;
            display: block;
            font-weight: 700;
        }

        nav ul li a:hover {
            color: #FAFA33;
        }

        .logo {
            float: left;
            padding: 10px;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 20px;

        }


        .content {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: linear-gradient(to bottom, white 0%, blue 100%);


            border: 10px;


            background-color: coral;

        }
    </style>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="home.php"> <img src="logo3.png" width="50" height="50"></a>
        </div>
    
        <ul>
            <li><a href="home.php">HOME</a></li>

            <li><a href="display.php">View Customers</a></li>

            <li><a href="transfermoney.php">Transfer Money </a></li>
            <li><a href="transactionhistory.php">View Transaction History</a></li>
        </ul>
        <div style="float:left;"><ul>
        <li><a href='#'>BANK OF WAKANDA </a></li>
        </ul></div>
    </nav>

    <section class="home">
        <div class="home-content">
            <h1>Welcome to <span style="color: #ff6f00;">Bank of Wakanda</span>!</h1>
            <p>The <span style="color: #ff6f00;">bank</span> you can <span style="color: #ff6f00;"> trust.</span></p>
        </div>
    </section>




    <div class="footer">
        <p>"We understand your world !"
    </p>

         <p>   Designed By Anshul Gupta
        </p>
    </div>
</body>

</html>