<!DOCTYPE html>
<html lang="en">

<head>

    <title>Log In</title>
    <link rel="stylesheet" href="LogSign.css">

</head>

<body>
    <div id="title">
        <h1 style="color: whitesmoke;">Log Into Your Account</h1>
    </div>


    <div class="forms">
            <form action="Logging.php" method="POST" name="login-forum">
                <label for="un">User Name</label>
                <br>
                <input id="un" class="txtfield" type="text" name="username">
                <br>
                <label for="pass">Password</label>
                <br>
                <input id="pw" class="txtfield" type="password" name="pass">
                <br>
                <br>
                <input class="bttn" type="submit" value="Log In" onclick="LogIn()">
                <button class="bttn" type="button" onclick="Clear()">Cancel</button>
            </form>
            
            <br>
            <a href="index.php">Don't have an account?Sign Up here!!!</a>
        </div>
            <script>
                function LogIn() {
                    var un = document.getElementById("un").value;
                    var pw = document.getElementById("pw").value;

                    if (un == "" || pw == "") {
                        alert("Fill in the Username and password to login");
                    } else {
                        document.getElementById("login-forum").submit();
                    }
                }

                function Clear() {
                    document.getElementById("un").value = "";
                    document.getElementById("pw").value = "";
                }
            </script>

        

</body>

</html>