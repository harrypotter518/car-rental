$(document).ready(function() {
    /*Combination Chart*/

    var chart = c3.generate({
        bindto: '#chart4',
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
                ['data2', 200, 130, 90, 240, 130, 220],
                ['data3', 300, 200, 160, 400, 250, 250],
                ['data4', 200, 130, 90, 240, 130, 220],
                ['data5', 130, 120, 150, 140, 160, 150],
                ['data6', 90, 70, 20, 50, 60, 120],
            ],
            type: 'bar',
            colors: {
                data1: '#00C292',
                data2: '#4C5667',
                data3: '#03A9F3',
                data4: '#AB8CE4',
                data5: '#a3aebd',
                data6: '#FEC107'
            },
            types: {
                data3: 'spline',
                data4: 'line',
                data6: 'area',
            },
            groups: [
                ['data1', 'data2']
            ]
        }
    });
    //Donut chart
    google.charts.load("current", { packages: ["corechart"] });
    google.charts.setOnLoadCallback(drawChartDonut);

    function drawChartDonut() {
        var dataDonut = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 2],
            ['Sleep', 7]
        ]);

        var optionsDonut = {
            title: 'My Daily Activities',
            pieHole: 0.4,
            colors: ['#2ecc71', '#01C0C8', '#FB9678', '#5faee3', '#f4d03f']
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_Donut'));
        chart.draw(dataDonut, optionsDonut);
    }



});
