<!DOCTYPE html>
<html lang="en">

<head>
    <title>Galary</title>
    <link rel="stylesheet" href="Style.css">
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
        <a href="LogOut.php" class="LogOut" style="text-decoration: none;">Log out</a>
    </div>
    <h1 style="color:darkgreen;float:right">Enjoy the gallery <?php echo urlencode($_GET["username"]); ?> :D</h1>




    <div class="ParentDiv">

        <?php
            $filePic = file_get_contents("galleryList.json");
            $array = json_decode($filePic , true);


            if($filePic){
                
                foreach($array as $imgName){
                echo "<div class='ChildDiv'> 
                <a href= ''>
                    <img src='Pictures/".$imgName."'class='animal'>
                </a>
                </div>";
                }

            }
        ?>


    </div>

    

</body>

</html>