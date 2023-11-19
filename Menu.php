<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main Page</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            background-color: rgb(178, 216, 100);
        }

        .header {
            background-color: rgb(8, 159, 8);
            position: fixed;
            width: 100%;
            height: 35px;
            font-size: 22px;
        }

        a {
            text-decoration: none;
            color: whitesmoke;
            font-size: larger;
        }

        span {
            cursor: pointer;
            font-size: 30px;
            color: whitesmoke;
        }

        .DropDown {
            position: relative;
            display: inline-block;
            height: 100%;

        }

        .DropDownContent {
            background-color: rgb(7, 190, 7);
            position: absolute;
            display: none;
            width: 100px;
            z-index: 1;
            font-weight: normal;
            font-size: medium;
        }

        .DropDown:hover span {
            background-color: darkgreen;
        }

        .DropDownContent a:hover {
            background-color: green;
        }

        .DropDown:hover .DropDownContent {
            display: block;
        }

        .Parentdiv {
            display: inline-flex;
            width: 100%;
            height: 400px;
            align-items: center;
            margin-top: 19%;

        }

        .Childdiv {
            width: 50%;

        }

        h1 {
            text-align: center;
            font-size: 50px;
            color: green;
        }

        h2 {
            text-align: center;
            font-size: 30px;
            color: green;
        }

        img {
            height: 100%;
            width: 100%;

        }

        .header .LogOut {
            float: right;
            color: whitesmoke;
            height: 100%;
            border: none;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            background-color: rgb(1, 157, 1);
        }

        .LogOut:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body>
    <div class="header">

        <div class="DropDown">
            <span>Menu</span>
            <div class="DropDownContent">
                <a href="CV.php?username=<?php echo urlencode($_GET["username"]); ?>">My CV</a>
                <a href="Gallery.php?username=<?php echo urlencode($_GET["username"]); ?>">Gallery</a>
                <a href="Contact.php?username=<?php echo urlencode($_GET["username"]); ?>">Contact Us</a>
            </div>

        </div>
        <a href="LogOut.php" class="LogOut">Log out</a>





    </div>

    <div class="Parentdiv">
        <div class="Childdiv">
            <h1>Houssam Khaled</h1>
            <h2>Computer Science Student</h2>
        </div>

        <div id="Childdiv">
            <h2>Welcome aboard <?php echo htmlspecialchars($_GET["username"]); ?></h2>
            <img src="Pictures/Welcomefrog.jpg">

        </div>

    </div>
</body>

</html>