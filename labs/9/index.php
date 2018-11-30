<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
		<script language="javascript" type="text/javascript" src="functions.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            #form1 {
                width: 30%;
                margin: auto;
                padding: 30px;
            }
            #header {
                text-align: center;
            }
            #cityInfo {
                text-align: center;
                font-size: 1.5em;
            }
            #passwordStatus, #usernamestatus, #zipcodestatus {
                font-size: 1.5em;
            }
            #submitButton {
                margin: auto;
                text-align: center;
            }
            
        </style>
    </head>
    <body>
        <div id="form1">
            <span id="header">
                <h1>Sign Up Form</h1>
            </span>
        <form>
            <br/>First Name: <input type="text" class="form-control" name="firstName">
            <br/>Last Name: <input type="text" class="form-control" name="lastName">
            <br/>Email: <input type="text" class="form-control" name="email">
            <br/>Street Address: <input type="text" class="form-control" name="email">

            <br/>Zip: <input type="text" class="form-control" id="zipCode" onchange="getCity()"> <span id="zipcodestatus"></span><br/>
            <div id="cityInfo">
            City: <span id="city"></span><br />
            Area Code: <span id="areaCode"></span><br />
            Latitude: <span id="latitude"></span><br />
            Longitude: <span id="longitude"></span><br />
            </div>
                    
            <br/>State: <input type="text" class="form-control" id="state" onchange="getCounties()">
            <br/>County: <select id="county" class="form-control form-control-lg"></select>
            <br/>Username: <input type="text" class="form-control" id="username" onchange="checkUsername()"> <span id="usernamestatus"></span>
            <br/>Password: <input type="password" class="form-control" id="password1">
            <br/>Confirm Password: <input type="password" class="form-control" id="password2"> <span id="passwordStatus"></span><br/>
            <br/><input type="button" class="btn btn-primary" id="submitButton" value="Submit Information" onclick="checkPasswords()">
        </form></div>
    </body>
</html>