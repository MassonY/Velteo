/**
 * Created by Epulapp on 08/12/2016.
 */

$(document).ready(function(){
    google.charts.load('current', {packages: ['annotatedtimeline']});
    google.charts.setOnLoadCallback(drawUniqueStation);

    //alert(data[0].id);
});

function drawUniqueStation(){
    var data = new google.visualization.DataTable();
    data.addColumn('date', 'Date');
    data.addColumn('number', 'BikeAvailable');
    data.addColumn('number', 'Temperature');


    var Input = $("#dom-target").html();
    Input = jQuery.parseJSON(Input);

    console.log(Input);
    var array = [];
    if(Input != undefined) {
        jQuery.each(Input, function (i, val) {
            array.push([new Date(val.created_at), parseFloat(val.nb_bikeAvailable), parseFloat(val.temperature) - 273.15]);
        })
    }
    data.addRows(array);
    console.log(array);


    var options = {
        hAxis: {
            title: 'Time'
        },
        vAxis: {
            title: 'Number'
        },
        displayAnnotations: true
    };

    var chart = new google.visualization.AnnotatedTimeLine(document.getElementById('chart_div'));
    chart.draw(data, options);
}
