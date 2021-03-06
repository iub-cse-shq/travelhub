<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Us</title>
</head>
    <style>

        @charset "utf-8";
* {
    margin: 0;
    padding: 0;
}

body {
    background: #f9f9f9;
    font-family: "Lato", sans-serif;
}

#header {
    width: 100%;
    height: 50px;
    background: #00a2d1;
    color: #f9f9f9;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    font-size: 35px;
    text-align: center;
}

#header a {
    color: #fff;
    text-decoration: blink;
}

#body {
    margin-top: 50px;
}

table {
    width: 80%;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bolder;
    color: #999;
    margin-bottom: 80px;
}

table a {
    text-decoration: none;
    color: #00a2d1;
}

table,
td,
th {
    border-collapse: collapse;
    border: solid #d0d0d0 1px;
    padding: 10px;
}

table td input {
    width: 97%;
    height: 35px;
    border: dashed #00a2d1 1px;
    padding-left: 15px;
    font-family: Verdana, Geneva, sans-serif;
    box-shadow: 0px 0px 0px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td input:focus {
    box-shadow: inset 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
}

table td button {
    border: solid #f9f9f9 0px;
    box-shadow: 1px 1px 1px rgba(1, 0, 0, 0.2);
    outline: none;
    background: #00a2d1;
    padding: 9px 15px 9px 15px;
    color: #f9f9f9;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    border-radius: 3px;
    width: 49.5%;
}

table td button:active {
    position: relative;
    top: 1px;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;

}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }
    .sidenav a {
        font-size: 18px;
    }
}


    </style>


<body>
    <center>

        <div id="header">
            <div id="content">
                <label>Contact Us</label>
                <a href="/login" style="position: relative; left: 420px; color: black; top:5px;">Login</a>
            </div>
            <a href="/home1" style="color: blue">Home</a>
            
        </div>
        <div id="body">
            <div id="content">
                <form class="login-form" method="post">
                    {{csrf_field()}}

                    <table align="center">
                        <tr>
                            <td><input type="text" name="FirstName" placeholder="First Name" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="LastName" placeholder="Last Name" required /></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="Email" placeholder="Email" required /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Comment" placeholder="Comment" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="Login" style="position:relative; left: 270px; height:40px" ><strong>Sumbit</strong></button></td>
                        </tr>
                        <tr>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </center>
</body>

</html>
