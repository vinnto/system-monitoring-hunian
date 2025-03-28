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
        }
    }
}

//  subscribe modal

setTimeout(function () {
    $("#subscribeModal").modal("show");
}, 2000);

// stacked column chart (hasil penilaian ketaatan)

var linechartBasicColors = getChartColorsArray("stacked-column-chart");
if (linechartBasicColors) {
    var options = {
        chart: {
            height: 360,
            type: "bar",
            stacked: true,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: true,
            },
        },
        plotOptions: {
            bar: {
                horizontal: true,
                columnWidth: "15%",
                endingShape: "rounded",
                borderRadius: 0,
            },
        },
        dataLabels: {
            enabled: false,
        },
        series: [
            {
                name: "Taat",
                data: [35, 40, 30, 45],
            },
            {
                name: "Terindikasi Tidak Taat",
                data: [25, 20, 40, 30],
            },
            {
                name: "Tidak Taat",
                data: [40, 40, 30, 25],
            },
        ],
        xaxis: {
            categories: [
                "Rusunami Bandar Kemayoran",
                "Rusunami Sentraland Cengkareng",
                "Menara Swasana NPK",
                "Menara Samawa NPK",
            ],
            labels: {
                formatter: function (val) {
                    return val + "%";
                },
            },
            min: 0,
            max: 100,
        },
        yaxis: {
            title: {
                text: undefined,
            },
        },
        colors: ["#2E93fA", "#FF9800", "#CED4DC"],
        legend: {
            position: "bottom",
        },
        fill: {
            opacity: 1,
        },
        title: {
            text: "2025 Semester 1",
            align: "center",
            style: {
                fontSize: "16px",
                fontWeight: 500,
            },
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val + "%";
                },
            },
        },
    };

    var chart = new ApexCharts(
        document.querySelector("#stacked-column-chart"),
        options
    );

    chart.render();
}

// Radial chart
var radialbarColors = getChartColorsArray("radialBar-chart");
if (radialbarColors) {
    var options = {
        chart: {
            height: 200,
            type: "radialBar",
            offsetY: -10,
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                dataLabels: {
                    name: {
                        fontSize: "13px",
                        color: undefined,
                        offsetY: 60,
                    },
                    value: {
                        offsetY: 22,
                        fontSize: "16px",
                        color: undefined,
                        formatter: function (val) {
                            return val + "%";
                        },
                    },
                },
            },
        },
        colors: radialbarColors,
        fill: {
            type: "gradient",
            gradient: {
                shade: "dark",
                shadeIntensity: 0.15,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 65, 91],
            },
        },
        stroke: {
            dashArray: 4,
        },
        series: [67],
        labels: ["Series A"],
    };

    var chart = new ApexCharts(
        document.querySelector("#radialBar-chart"),
        options
    );

    chart.render();
}
