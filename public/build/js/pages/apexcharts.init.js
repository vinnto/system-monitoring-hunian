/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Apex Chart init js
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document
            .getElementById(chartId)
            .getAttribute("data-colors");
        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function (value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(
                        document.documentElement
                    ).getPropertyValue(newValue);
                    if (color) return color;
                    else return newValue;
                } else {
                    var val = value.split(",");
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(
                            document.documentElement
                        ).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        } else {
            console.warn("data-colors Attribute not found on:", chartId);
        }
    }
}

//  line chart datalabel
var lineChartDatalabelColors = getChartColorsArray("line_chart_datalabel");
if (lineChartDatalabelColors) {
    var options = {
        chart: {
            height: 380,
            type: "line",
            zoom: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        colors: lineChartDatalabelColors,
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: [3, 3],
            curve: "straight",
        },
        series: [
            {
                name: "High - 2018",
                data: [26, 24, 32, 36, 33, 31, 33],
            },
            {
                name: "Low - 2018",
                data: [14, 11, 16, 12, 17, 13, 12],
            },
        ],
        title: {
            text: "Average High & Low Temperature",
            align: "left",
            style: {
                fontWeight: "500",
            },
        },
        grid: {
            row: {
                colors: ["transparent", "transparent"], // takes an array which will be repeated on columns
                opacity: 0.2,
            },
            borderColor: "#f1f1f1",
        },
        markers: {
            style: "inverted",
            size: 6,
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            title: {
                text: "Month",
            },
        },
        yaxis: {
            title: {
                text: "Temperature",
            },
            min: 5,
            max: 40,
        },
        legend: {
            position: "top",
            horizontalAlign: "right",
            floating: true,
            offsetY: -25,
            offsetX: -5,
        },
        responsive: [
            {
                breakpoint: 600,
                options: {
                    chart: {
                        toolbar: {
                            show: false,
                        },
                    },
                    legend: {
                        show: false,
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(
        document.querySelector("#line_chart_datalabel"),
        options
    );

    chart.render();
}

//  line chart (perkembangan ketaatan)
var lineChartdashedColors = getChartColorsArray("line_chart_dashed");
if (lineChartdashedColors) {
    var options = {
        chart: {
            height: 380,
            type: "line",
            zoom: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        colors: ["#34c38f", "#f1b44c", "#f46a6a"],
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: [3, 3, 3],
            curve: "straight",
            dashArray: [0, 0, 0],
        },
        series: [
            {
                name: "Taat",
                data: [450, 1400, 1200, 1250, 1050, 1200, 1050],
            },
            {
                name: "Terindikasi",
                data: [800, 930, 900, 930, 1300, 1320, 1325],
            },
            {
                name: "Tidak Taat",
                data: [1050, 1100, 1100, 1350, 1400, 1450, 1200],
            },
        ],
        title: {
            text: "Semua Lokasi",
            align: "center",
            style: {
                fontWeight: "500",
            },
        },
        markers: {
            size: 4,
            hover: {
                sizeOffset: 6,
            },
        },
        xaxis: {
            categories: [
                "SEM 1 2023",
                "SEM 2 2023",
                "SEM 1 2024",
                "SEM 2 2024",
                "SEM 1 2025",
                "XXX",
                "XXX",
            ],
            title: {
                text: "Periode",
            },
        },
        yaxis: {
            title: {
                text: "Jumlah",
            },
            min: 0,
            max: 1500,
            tickAmount: 6,
        },
        tooltip: {
            y: [
                {
                    title: {
                        formatter: function (val) {
                            return val;
                        },
                    },
                },
                {
                    title: {
                        formatter: function (val) {
                            return val;
                        },
                    },
                },
                {
                    title: {
                        formatter: function (val) {
                            return val;
                        },
                    },
                },
            ],
        },
        grid: {
            borderColor: "#f1f1f1",
        },
        legend: {
            position: "bottom",
            horizontalAlign: "center",
            offsetY: 8,
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#line_chart_dashed"),
        options
    );

    chart.render();
}

//   spline_area
var lineChartsplineAreaColors = getChartColorsArray("spline_area");
if (lineChartsplineAreaColors) {
    var options = {
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: false,
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: "smooth",
            width: 3,
        },
        series: [
            {
                name: "series1",
                data: [34, 40, 28, 52, 42, 109, 100],
            },
            {
                name: "series2",
                data: [32, 60, 34, 46, 34, 52, 41],
            },
        ],
        colors: lineChartsplineAreaColors,
        xaxis: {
            type: "datetime",
            categories: [
                "2018-09-19T00:00:00",
                "2018-09-19T01:30:00",
                "2018-09-19T02:30:00",
                "2018-09-19T03:30:00",
                "2018-09-19T04:30:00",
                "2018-09-19T05:30:00",
                "2018-09-19T06:30:00",
            ],
        },
        grid: {
            borderColor: "#f1f1f1",
        },
        tooltip: {
            x: {
                format: "dd/MM/yy HH:mm",
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#spline_area"), options);

    chart.render();
}

// column chart
var columnChartColors = getChartColorsArray("column_chart");
if (columnChartColors) {
    var options = {
        chart: {
            height: 350,
            type: "bar",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "45%",
                endingShape: "rounded",
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            show: true,
            width: 2,
            colors: ["transparent"],
        },
        series: [
            {
                name: "Net Profit",
                data: [46, 57, 59, 54, 62, 58, 64, 60, 66],
            },
            {
                name: "Revenue",
                data: [74, 83, 102, 97, 86, 106, 93, 114, 94],
            },
            {
                name: "Free Cash Flow",
                data: [37, 42, 38, 26, 47, 50, 54, 55, 43],
            },
        ],
        colors: columnChartColors,
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
            ],
        },
        yaxis: {
            title: {
                text: "$ (thousands)",
                style: {
                    fontWeight: "500",
                },
            },
        },
        grid: {
            borderColor: "#f1f1f1",
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands";
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#column_chart"),
        options
    );

    chart.render();
}

// dumbbell column chart
var dumbbellColumnChartsColors = getChartColorsArray("dumbbell_column_charts");
if (dumbbellColumnChartsColors) {
    var options = {
        series: [
            {
                data: [
                    {
                        x: "2008",
                        y: [2800, 4500],
                    },
                    {
                        x: "2009",
                        y: [3200, 4100],
                    },
                    {
                        x: "2010",
                        y: [2950, 7800],
                    },
                    {
                        x: "2011",
                        y: [3000, 4600],
                    },
                    {
                        x: "2012",
                        y: [3500, 4100],
                    },
                    {
                        x: "2013",
                        y: [4500, 6500],
                    },
                    {
                        x: "2014",
                        y: [4100, 5600],
                    },
                ],
            },
        ],
        chart: {
            height: 350,
            type: "rangeBar",
            zoom: {
                enabled: false,
            },
        },
        color: dumbbellColumnChartsColors,
        plotOptions: {
            bar: {
                isDumbbell: true,
                columnWidth: 3,
                dumbbellColors: dumbbellColumnChartsColors,
            },
        },
        legend: {
            show: true,
            showForSingleSeries: true,
            position: "top",
            horizontalAlign: "left",
            customLegendItems: ["Product A", "Product B"],
        },
        fill: {
            type: "gradient",
            gradient: {
                type: "vertical",
                gradientToColors: ["#00E396"],
                inverseColors: true,
                stops: [0, 100],
            },
        },
        grid: {
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: false,
                },
            },
        },
        xaxis: {
            tickPlacement: "on",
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#dumbbell_column_charts"),
        options
    );

    chart.render();
}

// Range Area Charts
var rangeAreaChartColors = getChartColorsArray("range_area_chart");
if (rangeAreaChartColors) {
    var options = {
        series: [
            {
                name: "New York Temperature",
                data: [
                    {
                        x: "Jan",
                        y: [-2, 4],
                    },
                    {
                        x: "Feb",
                        y: [-1, 6],
                    },
                    {
                        x: "Mar",
                        y: [3, 10],
                    },
                    {
                        x: "Apr",
                        y: [8, 16],
                    },
                    {
                        x: "May",
                        y: [13, 22],
                    },
                    {
                        x: "Jun",
                        y: [18, 26],
                    },
                    {
                        x: "Jul",
                        y: [21, 29],
                    },
                    {
                        x: "Aug",
                        y: [21, 28],
                    },
                    {
                        x: "Sep",
                        y: [17, 24],
                    },
                    {
                        x: "Oct",
                        y: [11, 18],
                    },
                    {
                        x: "Nov",
                        y: [6, 12],
                    },
                    {
                        x: "Dec",
                        y: [1, 7],
                    },
                ],
            },
        ],
        chart: {
            height: 350,
            type: "rangeArea",
        },
        colors: rangeAreaChartColors,
        stroke: {
            curve: "straight",
        },
        title: {
            text: "New York Temperature (all year round)",
        },
        markers: {
            hover: {
                sizeOffset: 5,
            },
        },
        dataLabels: {
            enabled: false,
        },
        yaxis: {
            labels: {
                formatter: function (val) {
                    return val + "°C";
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#range_area_chart"),
        options
    );

    chart.render();
}

// Dumbbell Timeline Chart (Horizontal)
var dumbbellColumnChartsColors = getChartColorsArray(
    "dumbbell_timeline_charts"
);
if (dumbbellColumnChartsColors) {
    var options = {
        series: [
            {
                data: [
                    {
                        x: "Operations",
                        y: [2800, 4500],
                    },
                    {
                        x: "Customer Success",
                        y: [3200, 4100],
                    },
                    {
                        x: "Engineering",
                        y: [2950, 7800],
                    },
                    {
                        x: "Marketing",
                        y: [3000, 4600],
                    },
                    {
                        x: "Product",
                        y: [3500, 4100],
                    },
                    {
                        x: "Data Science",
                        y: [4500, 6500],
                    },
                    {
                        x: "Sales",
                        y: [4100, 5600],
                    },
                ],
            },
        ],
        chart: {
            height: 390,
            type: "rangeBar",
            zoom: {
                enabled: false,
            },
        },
        colors: dumbbellColumnChartsColors,
        plotOptions: {
            bar: {
                horizontal: true,
                isDumbbell: true,
                dumbbellColors: dumbbellColumnChartsColors,
            },
        },
        title: {
            text: "Paygap Disparity",
        },
        legend: {
            show: true,
            showForSingleSeries: true,
            position: "top",
            horizontalAlign: "left",
            customLegendItems: ["Female", "Male"],
        },
        fill: {
            type: "gradient",
            gradient: {
                gradientToColors: ["#36BDCB"],
                inverseColors: false,
                stops: [0, 100],
            },
        },
        grid: {
            xaxis: {
                lines: {
                    show: true,
                },
            },
            yaxis: {
                lines: {
                    show: false,
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#dumbbell_timeline_charts"),
        options
    );

    chart.render();
}

// Funnel Charts
var funnelChartColors = getChartColorsArray("funnel_charts");
if (funnelChartColors) {
    var options = {
        series: [
            {
                name: "Funnel Series",
                data: [1380, 1100, 990, 880, 740, 548, 330, 200],
            },
        ],
        chart: {
            type: "bar",
            height: 390,
        },
        plotOptions: {
            bar: {
                borderRadius: 0,
                horizontal: true,
                barHeight: "80%",
                isFunnel: true,
            },
        },
        dataLabels: {
            enabled: true,
            formatter: function (val, opt) {
                return opt.w.globals.labels[opt.dataPointIndex] + ":  " + val;
            },
            dropShadow: {
                enabled: true,
            },
        },
        colors: funnelChartColors,
        title: {
            text: "Recruitment Funnel",
            align: "middle",
        },
        xaxis: {
            categories: [
                "Sourced",
                "Screened",
                "Assessed",
                "HR Interview",
                "Technical",
                "Verify",
                "Offered",
                "Hired",
            ],
        },
        legend: {
            show: false,
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#funnel_charts"),
        options
    );

    chart.render();
}

// column chart with datalabels
var columnChartDatalabelColors = getChartColorsArray("column_chart_datalabel");
if (columnChartDatalabelColors) {
    var options = {
        chart: {
            height: 350,
            type: "bar",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    position: "top", // top, center, bottom
                },
            },
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val + "%";
            },
            offsetY: -22,
            style: {
                fontSize: "12px",
                colors: ["#304758"],
            },
        },
        series: [
            {
                name: "Inflation",
                data: [
                    2.5, 3.2, 5.0, 10.1, 4.2, 3.8, 3, 2.4, 4.0, 1.2, 3.5, 0.8,
                ],
            },
        ],
        colors: columnChartDatalabelColors,
        grid: {
            borderColor: "#f1f1f1",
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
            position: "top",
            labels: {
                offsetY: -18,
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            crosshairs: {
                fill: {
                    type: "gradient",
                    gradient: {
                        colorFrom: "#D8E3F0",
                        colorTo: "#BED1E6",
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    },
                },
            },
            tooltip: {
                enabled: true,
                offsetY: -35,
            },
        },
        fill: {
            gradient: {
                shade: "light",
                type: "horizontal",
                shadeIntensity: 0.25,
                gradientToColors: undefined,
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [50, 0, 100, 100],
            },
        },
        yaxis: {
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function (val) {
                    return val + "%";
                },
            },
        },
        title: {
            text: "Monthly Inflation in Argentina, 2002",
            floating: true,
            offsetY: 330,
            align: "center",
            style: {
                color: "#444",
                fontWeight: "500",
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#column_chart_datalabel"),
        options
    );

    chart.render();
}

// Bar chart
var barChartColors = getChartColorsArray("bar_chart");
if (barChartColors) {
    var options = {
        chart: {
            height: 350,
            type: "bar",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: true,
            },
        },
        dataLabels: {
            enabled: false,
        },
        series: [
            {
                data: [380, 430, 450, 475, 550, 584, 780, 1100, 1220, 1365],
            },
        ],
        colors: barChartColors,
        grid: {
            borderColor: "#f1f1f1",
        },
        xaxis: {
            categories: [
                "South Korea",
                "Canada",
                "United Kingdom",
                "Netherlands",
                "Italy",
                "France",
                "Japan",
                "United States",
                "China",
                "Germany",
            ],
        },
    };

    var chart = new ApexCharts(document.querySelector("#bar_chart"), options);

    chart.render();
}

// Mixed chart
var mixedChartColors = getChartColorsArray("mixed_chart");
if (mixedChartColors) {
    var options = {
        chart: {
            height: 350,
            type: "line",
            stacked: false,
            toolbar: {
                show: false,
            },
        },
        stroke: {
            width: [0, 2, 4],
            curve: "smooth",
        },
        plotOptions: {
            bar: {
                columnWidth: "50%",
            },
        },
        colors: mixedChartColors,
        series: [
            {
                name: "Team A",
                type: "column",
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30],
            },
            {
                name: "Team B",
                type: "area",
                data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43],
            },
            {
                name: "Team C",
                type: "line",
                data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
            },
        ],
        fill: {
            opacity: [0.85, 0.25, 1],
            gradient: {
                inverseColors: false,
                shade: "light",
                type: "vertical",
                opacityFrom: 0.85,
                opacityTo: 0.55,
                stops: [0, 100, 100, 100],
            },
        },
        labels: [
            "01/01/2003",
            "02/01/2003",
            "03/01/2003",
            "04/01/2003",
            "05/01/2003",
            "06/01/2003",
            "07/01/2003",
            "08/01/2003",
            "09/01/2003",
            "10/01/2003",
            "11/01/2003",
        ],
        markers: {
            size: 0,
        },
        xaxis: {
            type: "datetime",
        },
        yaxis: {
            title: {
                text: "Points",
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            y: {
                formatter: function (y) {
                    if (typeof y !== "undefined") {
                        return y.toFixed(0) + " points";
                    }
                    return y;
                },
            },
        },
        grid: {
            borderColor: "#f1f1f1",
        },
    };

    var chart = new ApexCharts(document.querySelector("#mixed_chart"), options);

    chart.render();
}

//  Radial chart
var radialChartColors = getChartColorsArray("radial_chart");
if (radialChartColors) {
    var options = {
        chart: {
            height: 370,
            type: "radialBar",
        },
        plotOptions: {
            radialBar: {
                dataLabels: {
                    name: {
                        fontSize: "22px",
                    },
                    value: {
                        fontSize: "16px",
                    },
                    total: {
                        show: true,
                        label: "Total",
                        formatter: function (w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return 249;
                        },
                    },
                },
            },
        },
        series: [44, 55, 67, 83],
        labels: ["Computer", "Tablet", "Laptop", "Mobile"],
        colors: radialChartColors,
    };

    var chart = new ApexCharts(
        document.querySelector("#radial_chart"),
        options
    );

    chart.render();
}

// pie chart
var pieChartColors = getChartColorsArray("pie_chart");
if (pieChartColors) {
    var options = {
        chart: {
            height: 320,
            type: "pie",
        },
        series: [44, 55, 41, 17, 15],
        labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
        colors: pieChartColors,
        legend: {
            show: true,
            position: "bottom",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: false,
            fontSize: "14px",
            offsetX: 0,
        },
        responsive: [
            {
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240,
                    },
                    legend: {
                        show: false,
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#pie_chart"), options);

    chart.render();
}

// Donut chart
var donutChartColors = getChartColorsArray("donut_chart");
if (donutChartColors) {
    var options = {
        chart: {
            height: 320,
            type: "donut",
        },
        series: [44, 55, 41, 17, 15],
        labels: ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"],
        colors: donutChartColors,
        legend: {
            show: true,
            position: "bottom",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: false,
            fontSize: "14px",
            offsetX: 0,
        },
        responsive: [
            {
                breakpoint: 600,
                options: {
                    chart: {
                        height: 240,
                    },
                    legend: {
                        show: false,
                    },
                },
            },
        ],
    };

    var chart = new ApexCharts(document.querySelector("#donut_chart"), options);

    chart.render();
}
