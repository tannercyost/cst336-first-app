function getCounties() {        
    $.ajax({
    
        type: "GET",
        
        url: "https://www.showdeolabs.com/cors?url=http://itcdland.csumb.edu/~milara/ajax/countyList.php?state=" + $("#state").val(),
 
        success: function(data,status) {
            fetchedData = JSON.parse(data);
            console.log(fetchedData);
            $("#county").html("<option> Select a County </option>");
            console.log(fetchedData.length);
            for (var i=0; i <= fetchedData.length; i++) {
                $("#county").append("<option>" + fetchedData[i]["county"] + "</option>" );
            }
        },
        
        complete: function(data,status) {
            //optional, used for debugging purposes
            // console.log(status);
        }
    });
}

function getCity() {  
    $.ajax({
        
        type: "GET",
        
        url: "https://www.showdeolabs.com/cors?url=http://itcdland.csumb.edu/~milara/ajax/cityInfoByZip.php?zip=" + $("#zipCode").val(),

        success: function(data,status) {
        fetchedData = JSON.parse(data);
        console.log(fetchedData);
        if (fetchedData == false) {
            $("#zipcodestatus").html("That zip code was not recognized.");
            $("#zipcodestatus").css("color", "red");
        }
        else {
                $("#zipcodestatus").html("");
                $("#city").html(fetchedData['city']);
                $("#areaCode").html(fetchedData['areaCode']);
                $("#latitude").html(fetchedData['latitude']);
                $("#longitude").html(fetchedData['longitude']);
            }
        },
        
        complete: function(data,status) {
            //optional, used for debugging purposes
            //console.log(status);
        }
    });
}


function checkPasswords() {
    if ($("#password1").val() == $("#password2").val()) {
        $("#passwordStatus").html("Passwords ok.");
        $("#passwordStatus").css("color", "green");
    }
    else {
        $("#passwordStatus").html("Error - entered passwords do not match.");
        $("#passwordStatus").css("color", "red");
    }
}

function checkUsername() {
    $.ajax({
        type: "GET",
        url: "checkusername.php",
        
        success: function(data,status) {
            if (data == "Ok") {
                $("#usernamestatus").html("That username is available.");
                $("#usernamestatus").css("color", "green");
            }
            else {
                $("#usernamestatus").html("That username is NOT available, try again.");
                $("#usernamestatus").css("color", "red");
            }
        },
        
        complete: function(data,status) {
        //optional, used for debugging purposes
        //console.log(status);
        }
    });
}