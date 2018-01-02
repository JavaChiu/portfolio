function getWeather() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(requestWeather);
    } else {
        document.getElementById("city").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function requestWeather(position) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            //this.responseText;
            var weather = JSON.parse(this.responseText);
            document.getElementById("city").innerHTML = weather.name + ", " + weather.sys.country;
            document.getElementById("description").innerHTML = weather.weather[0].main;
            document.getElementById("degree").innerHTML = (weather.main.temp - 273.15).toFixed(1) + String.fromCharCode(176) + "C";
            document.getElementById("icon").src = "http://openweathermap.org/img/w/" + weather.weather[0].icon + ".png";
            //document.getElementById("citation").innerHTML = weather[0].title;
        }
    };
    var url = "http://api.openweathermap.org/data/2.5/weather?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude + "&appid=2c036e5e900438c4e810fc0eeb177602";
    xhttp.open("GET", url, true);
    xhttp.send();
}

function convertDegree() {
    var current = document.getElementById("degree").innerHTML;
    var len = current.length;
    var newNum;
    if (current.endsWith("C")) {
        current = current.substring(0, len - 2);
        newNum = (current * 9 / 5) + 32;
        document.getElementById("degree").innerHTML = newNum.toFixed(1) + String.fromCharCode(176) + "F";
    } else if (current.endsWith("F")) {
        current = current.substring(0, len - 2);
        newNum = (current - 32) * 5 / 9;
        document.getElementById("degree").innerHTML = newNum.toFixed(1) + String.fromCharCode(176) + "C";
    }

}
