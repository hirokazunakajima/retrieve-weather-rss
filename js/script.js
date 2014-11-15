/*
*   Yahoo RSS -> https://developer.yahoo.com/weather/documentation.html
*   WOEID ->
*   Vancouver : 9807
*   Edmonton : 8676
*   Calgary : 8775
*   Winnipeg : 2972
*   Toronto : 4118
*   Montreal : 3534
*   Quebec city: 3444
*
*/

$(document).ready(loadWeather);
$(".refresh").click(loadWeather);
$('[name=city]').change(loadWeather);


var getData = function()
{
    var locCode='9807'; // default
    var city = 'Vancouver';

    locCode = $('[name=city]').val();
    city = $('[name=city] option:selected').text();

    var dataObj  ={
        locationCode:locCode,
        location:city
    }
    return dataObj;
}


function loadWeather() {

    $(".loader").html("").append("<img src ='img/loader.gif'/>");

    var locationCode = getData().locationCode;
    var location = getData().location;
    var source = "http://weather.yahooapis.com/forecastrss?w=" +locationCode+ "&u=c";

    $.ajax({

        url: "dynamic_proxy.php",
        data: { src: source },
        success: function (response) {
            console.log(response);

            var $condition = $(response).find("yweather\\:condition");

            if ($condition.length === 0) {
                $condition = $(response).find("condition");
            }

            var temp = $condition.attr("temp");
            var text = $condition.attr("text");

            $("#temperature").text(temp);
            $("#description").text(text);

        }
    });
}

