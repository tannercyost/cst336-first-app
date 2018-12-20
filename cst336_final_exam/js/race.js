$(function() {

    createModal();

    $("button.add").on("click", function(e) {
        console.log(e);
        $("#modalBox").css("display", "block");
    })

    $("button.saveRace").on("click", function(e) {

        var pageData = {
            "raceId": $("#raceId").val(),
            "date": $("#date").val(),
            "time": $("#time").val(),
            "password": $("#password").val(),
            "location": $("#location").val(),
            "status_id": 1,
        };
        var now = new Date();
        if (date >= now) {
            pageData["status_id"] = 1;
        } else {
            pageData["status_id"] = 0;
        }

        $.ajax({
            type: "POST",
            url: "index.php",
            dataType: "json",
            contentType: "application/json",
            data: JSON.stringify(pageData),
            success: function(data, status) {
                console.log("Got data", data);
            },
            error: function(err) {
                console.log("Didn't get data", err);
            },
            complete: function() {
                // Do this last
                $("#modalBox").css("display", "none");
                location.reload();
            }
        });
    })

    // Make a global variable
    var raceData;

    $.ajax({
        type: "GET",
        url: "index.php",
        dataType: "json",
        success: function(data, status) {
            raceData = data;
            console.log("Got data", raceData);
            
            for (var p in raceData) {
                var race = raceData[p];
                console.log(race);
                $("#pages table tbody").append(
                    $("<tr>")
                    .append($("<td>")
                        .html(race.raceid))
                    .append($("<td>")
                        .html(race.date))
                    .append($("<td>")
                        .html(race.time))
                    .append($("<td>")
                        .html(race.location))
                    .append(
                        $("<button class='edit action'>")
                        .append($("<img>")
                            .attr("src", "img/racing-actions-edit.png")))                    
                        .append(
                        $("<button class='cancel action'>")
                        .append($("<img>")
                            .attr("src", "img/racing-actions-cancel.png")))
                    )
                    
            }

        },
        error: function(err) {
            console.log("Didn't get data", err);
        }
    });

})

function createModal() {
    // Get the modal

    // Get the button that opens the modal
    var btn = document.getElementById("openButton");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        $("#modalBox").css("display", "none");
    }

    var modal = document.getElementById('modalBox');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            $("#modalBox").css("display", "none");
        }
    }
}
