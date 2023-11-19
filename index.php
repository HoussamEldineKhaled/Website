<!DOCTYPE html>
<html lang="en">

<head>

    <title>Create Account</title>
    <link rel="stylesheet" href="LogSign.css">

</head>


<body>

    <div id="title">
        <h1 style="color: whitesmoke;">Create Your Account</h1>
    </div>


    <div class="forms">
        <form action="SignUp.php" method="POST" name="signup-form">

            <label for="un">User Name</label>
            <br>
            <input class="txtfield" type="text" name="username">
            <br>
            <label for="un">First Name</label>
            <br>
            <input class="txtfield" type="text" name="firstname">
            <br>
            <label for="un">Last Name</label>
            <br>
            <input class="txtfield" type="text" name="lastname">
            <br>
            <label for="pass">Password</label>
            <br>
            <input class="txtfield" type="password" name="pass">
            <br>
            <label for="sex">Sex</label>
            <br>
            <input class="sx" id="r-male" type="radio" name="sex" value="m">
            <label for="r-male">Male</label>
            <input class="sx" id="r-female" type="radio" name="sex" value="f">
            <label for="r-female">Female</label>
            <br>
            <br>
            <label for="Date">Date of Birth</label>
            <br>
            <input class="Date" type="date" name="birthday">
            <br>
            <br>
            <input class="bttn" type="submit" name="button" value="Sign Up" onclick="SignUp()">
            <button class="bttn" type="button" value="Cancel" onclick="Clear()">Cancel</button>
        </form>
        <br>
        <a href="login.php">Have an account? Click here to login!!!</a>
    </div>
    <script>
        function SignUp() {
            var mForm = document.querySelector("form[name='signup-form']");
            var un = mForm.elements["username"].value;
            var fn = mForm.elements["firstname"].value;
            var ln = mForm.elements["lastname"].value;
            var pw = mForm.elements["pass"].value;
            var sx = mForm.elements["sex"].value;
            var dt = mForm.elements["birthday"].value;

            console.log("un: " + un);
            console.log("fn: " + fn);
            console.log("ln: " + ln);
            console.log("pw: " + pw);
            console.log("sx: " + sx);
            console.log("dt: " + dt);


            mForm.submit();
        }

        function Clear() {
            var mForm = document.querySelector("form[name='signup-form']");
            var un = mForm.elements["username"].value = "";
            var fn = mForm.elements["firstname"].value = "";
            var ln = mForm.elements["lastname"].value = "";
            var pw = mForm.elements["pass"].value = "";
            var sx = mForm.elements["sex"].value = "m";
            var dt = mForm.elements["birthday"].value = "";
        }
    </script>








</body>

</html>