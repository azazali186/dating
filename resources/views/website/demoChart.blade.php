@extends('website.layouts.app')
@section('content')
    <!-- ================> Group section end here <================== -->

    <style>
        #chartData {
            height: 650px;
            /* min-width: 310px; */
        }
    </style>
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/modules/data.js"></script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/stock/modules/accessibility.js"></script>

    <div id="chartData"></div>

    <script>
        // Highcharts.function(data1) {
        var data1 = {{ json_encode(getChartData($sellerId)) }};
        Highcharts.stockChart("chartData", {
            rangeSelector: {
                selected: 1,
            },

            title: {
                text: "Analytics",
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                    'September',
                    'October', 'November', 'December'
                ]
            },
            series: [{
                name: "Views",
                data: data1,
                type: "areaspline",
                threshold: null,
                tooltip: {
                    valueDecimals: 2,
                },
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1,
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [
                            1,
                            Highcharts.color(Highcharts.getOptions().colors[0])
                            .setOpacity(0)
                            .get("rgba"),
                        ],
                    ],
                },
            }, ],
        });
        // }
        // );
    </script>
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
@endsection
