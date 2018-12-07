var ajax = new XMLHttpRequest();
var method = "GET";
var url = "api/getPetInfo.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
ajax.send();

ajax.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        console.log(data);
        var html = "";
        for (var a = 0; a < data.length; a++) {
            var id = data[a].id;
            var name = data[a].name;
            var type = data[a].type;
            var breed = data[a].breed;
            var yob = data[a].yob;
            var color = data[a].color;
            var url = data[a].pictureURL;
            var desc = data[a].description;
        }
        // alert(this.responseText);
    }
}