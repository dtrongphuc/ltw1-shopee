<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Thống Kê</title>


    <script>
        window.onload = function() {
            const test = async () => {
                try {
                    response = await axios.get('/api/statisticalmonth')
                    data = response.data;
                    var chart = new CanvasJS.Chart("chart-day", {
                        theme: "light1", // "light1", "light2", "dark1", "dark2"
                        animationEnabled: true,

                        axisX: {
                            interval: 1,
                            intervalType: "number",
                            valueFormatString: "T #"
                        },
                        axisY: {
                            includeZero: true,
                            valueFormatString: "#0[Ngàn VND]"
                        },
                        data: [{
                            type: "line",
                            markerSize: 12,
                            // xValueFormatString: "MM",
                            // yValueFormatString: "$###.#",
                            dataPoints: [{
                                    x: 1,
                                    y: data[0],
                                    markerColor: "#6B8E23"
                                },
                                {
                                    x: 2,
                                    y: data[1],
                                    markerColor: "#6B8E23"
                                },
                                {
                                    x: 3,
                                    y: data[2],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 4,
                                    y: data[3],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 5,
                                    y: data[4],
                                    markerColor: "#6B8E23"
                                },
                                {
                                    x: 6,
                                    y: data[5],
                                    markerColor: "#6B8E23"
                                },
                                {
                                    x: 7,
                                    y: data[6],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 8,
                                    y: data[7],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 9,
                                    y: data[8],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 10,
                                    y: data[9],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 11,
                                    y: data[10],
                                    markerColor: "6B8E23"
                                },
                                {
                                    x: 12,
                                    y: data[11],
                                    markerColor: "6B8E23"
                                }
                            ]
                        }]
                    });
                    chart.render();

                } catch (error) {
                    console.log(error);
                }
            }
            test();
        }
    </script>
</head>

<body>
    <div class="box-content showLeft" id="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="./admin">ADMIN</a>
            </div>
            <ul class="list-item">
                <li class="item ">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./admin">Quản lý sản phẩm</a>
                </li>
                <li class="item active">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./chartstatistical">Quản lý thống kê</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./usermanagement">Quản lý người dùng</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./ordermanagement">Quản lý Đơn Hàng</a>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="header-right">
                <div style="cursor: pointer;">
                    <span><i class="fa fa-bars" id="btnReposiveLeft"></i></span>

                </div>
                <div class="dropdown show dropdown-content">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thành Phú
                        <img style="margin-left: 10px;" class="avatar" src="../images/av.png" />
                    </a>

                    <div class="dropdown-menu " style="top: 8px !important;" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="box-content-right">
                    <p class="title">Thống Kê</p>

                </div>
                @if(isset($statisticalToday))
                <div class="date-Statistics d-flex justify-content-between">
                    <div class="total-item d-flex align-items-center" style="border-radius: 12px;">
                        <div class=" icon-statistics d-flex justify-content-center align-items-center mr-2">
                            <i class="fas fa-sort-amount-up-alt" style="font-size: 34px;"></i>
                        </div>
                        <div class="detail-Statistics" style="flex: 1;">
                            <div class="tittle-Statistics">
                                <span>Sản Phẩm Bán Được</span>
                            </div>
                            <div class="Statistics">
                                <span>{{$statisticalToday->getQuantityProduct()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="total-item d-flex align-items-center" style="border-radius: 12px;">
                        <div class=" icon-statistics d-flex justify-content-center align-items-center mr-2">
                            <i class="fas fa-sort-amount-up-alt" style="font-size: 34px;"></i>
                        </div>
                        <div class="detail-Statistics" style="flex: 1;">
                            <div class="tittle-Statistics" style="font-size: 14px;">
                                <span>Tổng Tiền Kiếm Được</span>
                            </div>
                            <div class="Statistics">
                                <span>{{$statisticalToday->getTotalOrder()}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="total-item d-flex align-items-center" style="border-radius: 12px;">
                        <div class=" icon-statistics d-flex justify-content-center align-items-center mr-2">
                            <i class="fas fa-sort-amount-up-alt" style="font-size: 34px;"></i>
                        </div>
                        <div class="detail-Statistics" style="flex: 1;">
                            <div class="tittle-Statistics" style="font-size: 14px;">
                                <span>Đơn Hàng Chưa Xác Nhận</span>
                            </div>
                            <div class="Statistics">
                                <span>{{$statisticalToday->getOrderWatting()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="chart-round d-flex justify-content-between">
                    <div class="chart-round-item">
                        <div class="tittle-chart">
                            <span>Doanh Thu Theo Quý</span>
                        </div>
                        <div id="chart-Quarter1"></div>
                    </div>

                    <div class="chart-round-item">
                        <div class="tittle-chart">
                            <span>Doanh Thu Theo Năm</span>
                        </div>
                        <div id="chart-Quarter2"></div>
                    </div>
                </div>

                <div class="chart-column">
                    <div class="tittle-chart" style="padding-left: 41% !important;">
                        <span>Doanh Thu Theo Tháng</span>
                    </div>
                    <div id="chart-day" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#btnReposiveLeft").click(function() {
                if ($("#box-content").hasClass("showLeft")) {
                    $("#box-content").removeClass("showLeft");
                } else {
                    $("#box-content").addClass("showLeft");
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- // const test = async () => {
        //     try {
        //         response = await axios.get('/api/statisticalMonth')
        //         data = response.data;
                
        //         console.log(data[0]);

        //     } catch (error) {
        //         console.log(error);
        //     }
        // }

        // test(); -->

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            const test = async () => {
                try {
                    let response = await axios.get('/api/statisticalquarter')
                    let datastatis = response.data;
                    //let quy1 = datastatis[0];
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Quý 1', parseFloat(datastatis[0])],
                        ['Quý 2', parseFloat(datastatis[1])],
                        ['Quý 3', parseFloat(datastatis[2])],
                        ['Quý 4', parseFloat(datastatis[3])]
                    ]);
                    // Optional; add a title and set the width and height of the chart
                    var options = {
                        'width': 500,
                        'height': 400,
                        sliceVisibilityThreshold: 0
                    };

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('chart-Quarter1'));
                    chart.draw(data, options);
                } catch (error) {
                    console.log(error);
                }
            }
            test();
        }
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script type="text/javascript">
        var analytics = <?php echo $year; ?>

        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable(
                analytics
            );
            var options = {
                'width': 500,
                'height': 400
            };
            var chart = new google.visualization.PieChart(document.getElementById('chart-Quarter2'));
            chart.draw(data, options);
        }
    </script>


</body>

</html>