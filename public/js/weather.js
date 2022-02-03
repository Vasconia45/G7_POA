$("document").ready(inicio);

function inicio(){
    let button = $("#weatherButton");
    button.on("click", showCities);
}

function showCities(){
    let selectCities = $("#select");
    selectCities.text("");
    let placeholder =$("<option>Select a City:</option>");
    selectCities.append(placeholder);
    

    $.get('https://opendata.euskadi.eus/contenidos/prevision_tiempo/met_forecast/opendata/met_forecast.xml', function(data){ 
            $(data).find("cityForecastDataList").each(function(){
                if($(this).parent().attr("forecastDay") == "today"){
                    $(data).find($(this).children()).each(function(){
                        let cityName = $(this).attr("cityName");
                        let option = $("<option></option>");
                        option.append(cityName);
                        selectCities.append(option);
                    });
                }
            }); 
    });
    selectCities.on("change",showInfo);
}

function showInfo(){

    let city = $(this).val();
    $("tempMax").text("");
    $("tempMin").text("");
    $("#description").text("");

    $.get('https://opendata.euskadi.eus/contenidos/prevision_tiempo/met_forecast/opendata/met_forecast.xml', function(data){
        $(data).find("cityForecastDataList").each(function(){
            if($(this).parent().attr("forecastDay") == "today"){
                $(data).find($(this).children()).each(function(){
                    let cityName = $(this).attr("cityName");
                    if(cityName == city){
                        let tempMax = "Temperatura Maxima: " + $(this).children("tempMax").text();
                        $("#tmpMax").text(tempMax);
                        let tempMin = "Temperatura Minima: " + $(this).children("tempMin").text();
                        $("#tmpMin").text(tempMin);
                        let src = "https://opendata.euskadi.eus"+ $(this).children("symbol").children("symbolImage").text();
                        $("#imgWeather").attr("src",src);
                        let description = $(this).children("symbol").children("descriptions").children("es").text();
                        $("#description").text(description);
                    }
                });
            }
        });
    });
}