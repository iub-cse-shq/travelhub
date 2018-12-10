<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>User Info</title>
        <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }


    </script>
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
    padding: 20px;
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
        <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/admin/queries">Queries</a>
        <a href="/admin/hotelinfo">Hotelinfo</a>
        <a href="/admin/addHotels">Addhotel</a>
        <a href="/admin/bookingdetails">See booking details</a>

    </div>
       
    

    <div id="header">
                <div id="content">
                    <label>Hello USER!!</label>
                    <a href="/logout" style="position: relative; left: 420px; color: black; top:5px;"><img src="{{url('images/Logout.png ')}}" style="height:35px; width:35px"></a>
                    <span style="font-size:30px;cursor:pointer;position:relative;right:900px " onclick="openNav() " >&#9776;</span>
                    
                </div>
            </div>
    <h2 style="text-align: center; margin-top: 20px;">User Informations</h2>
        <center>
            <form method="post" action="/profile">
                 <input type="hidden" name="_method" value="put">
                <input type="hidden" name="user_id" value="{{$user->user_id}}"><br>
                 {{csrf_field()}}
                <div id="body">
                    <div id="content">
                        <table align="center">
                            <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Contact No</th>
                            <th>Email</th>
                            <th colspan="2">Operations</th>
                            </tr>
                            

                                <tr>
                                    <td align="center">
                                        {{$user->user_id}}
                                    </td>
                                    <td align="center">
                                        {{$user->FirstName}}
                                    </td>
                                    <td align="center">
                                        {{$user->LastName}}
                                    </td>
                                    <td align="center">
                                        {{$user->Username}}
                                    </td>
                                    <td align="center">
                                        {{$user->Password}}
                                    </td>
                                    <td align="center">
                                       {{$user->ContactNo}} 
                                    </td>
                                    <td align="center">
                                       {{$user->Email}}
                                    </td>


                                </tr>
                        </table>
                
                         <h2>Type the new Password</h2>
                        
                        <input type="text" placeholder="Password" name="Password"><br>
                        <button type="submit" name="update" onclick="return confirm('Are you sure you want to update??')">Update</button>
                    </div>
                </div>
        </center>
    </body>
    </form>

    </html>
