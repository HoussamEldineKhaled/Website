<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-color: rgb(178, 216, 100);
        }

        .header {
            background-color: rgb(8, 159, 8);
            width: 100%;
            height: 40px;
            font-size: 22px;
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

        .DropDown:hover .DropDownContent {
            display: block;
        }

        .DropDown:hover span {
            background-color: darkgreen;
        }

        .DropDownContent a:hover {
            background-color: green;
        }

        .header .title {
            display: inline-block;
            margin-left: 37%;



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

        .table {
            width: 100%;
            height: 250px;
            align-items: center;
            margin: auto;
            margin-top: 250px;
        }

        table {
            height: 100%;
            width: 100%;
            text-align: center;
        }

        table,
        th,
        tr {
            border: 3px solid black;

        }
    </style>
</head>

<body>
    <div class="header">

        <div class="DropDown">
            <span>Menu</span>
            <div class="DropDownContent">
                <a href="CV.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">My CV</a>
                <a href="Gallery.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">Gallery</a>
                <a href="Contact.php?username=<?php echo urlencode($_GET["username"]); ?>" style="color: whitesmoke; text-decoration:none">Contact Us</a>
            </div>

        </div>

        <h2 class="title">Contacts</h2>

        <a href="LogOut.php" class="LogOut" style="text-decoration: none;">Log out</a>


    </div>
    <h1 style="color:darkgreen;float:right;">Need help <?php echo urlencode($_GET["username"]); ?> ? Contact us!!!</h1>


    <div class="table">
        <table>
            <tr>
                <th>Emails</th>
                <th>Phone numbers</th>
                <th>LinkedIn</th>
            </tr>
            <tr>
                <th>houssam.khaled@lau.edu</th>
                <th>00000000</th>
                <th>www.linkedin.com/in/houssam-el-dine-khaled-091617260</th>
            </tr>
            <tr>
                <th>JohnnyCage@gmail.com</th>
                <th>111111111111</th>
                <th>No idea what his linked in is</th>
            </tr>
            <tr>
                <th>KingFrog@hotmail.com</th>
                <th>222222222222</th>
                <th>A Frog does not have a linked in</th>
            </tr>
        </table>
    </div>

</body>

</html>