<!DOCTYPE html>
<?php /*
<title>{{ config('app.name', 'Laravel') }}</title>
    {{ Html::style('public/assest/css/bootstrap.min.css')}}
    {{ Html::style('public/assest/font-awesome/css/font-awesome.css')}}

    {{ Html::style('public/assest/css/animate.css')}}
    {{ Html::style('public/assest/css/style.css')}}
    */ ?>

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:58:20 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<link rel="icon" href="{{env('APP_URL')}}public/fav-icon.png" sizes="32x32" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{ Html::style('public/assest/css/bootstrap.min.css')}}
    {{ Html::style('public/assest/font-awesome/css/font-awesome.css')}}
    {{ Html::style('public/assest/css/plugins/sweetalert/sweetalert.css')}}
    {{ Html::style('public/assest/css/animate.css')}}
    {{ Html::style('public/assest/css/style.css')}}
    {{ Html::style('public/assest/datapicker/zebra_datepicker.min.css')}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=Nuosu+SIL&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .Zebra_DatePicker{ z-index:99999 !important; }
        .Zebra_DatePicker_Icon{ top: 9px!important; }
           input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
        </style>


</head>
<?php
    $result  = DB::table('users')->where('id', '=', Auth::user()->id)->first();
    $companyDetails  = DB::table('users')->where('id', '=', Auth::user()->id)->first();
    $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
    $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
    if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
      $url = trim($uri, '/');
  

    ?>
<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        {{Html::image($result->image,'', ['class'=>'','height'=>'100','width'=>'100'])}}
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="text-muted text-xs block">{{$result->name}} </span>
                        </a>
                    </div>
                    <div class="logo-element">
                    {{Html::image($result->image,'', ['class'=>'','height'=>'20'])}}
                    </div>
                </li>
               
                <li <?php if($url=='vendor/dashboard') { ?> class="active" <?php } ?>>
                    <a href="{{ route('vendor.home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                 <li <?php if($url=='vendor/product-list') { ?> class="active" <?php } ?>>
                    <a href="{{ route('vendor.list.product') }}"><i class="fa fa-users"></i> <span class="nav-label">Learning Management</span></a>
                </li>
               
                <li <?php if($url=='vendor/employee-list') { ?> class="active" <?php } ?>>
                    <a href="{{ route('vendor.list.employee') }}"><i class="fa fa-users"></i> <span class="nav-label">User Management</span></a>
                </li>
                <li <?php if($url=='user/update-profile') { ?> class="active" <?php } ?>>
                    <a href="{{ route('employee.updateProfile') }}"><i class="fa fa-user-o"></i> <span class="nav-label">Profile Update</span></a>
                </li>
               
               
                <li class="">
                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span>
                                    </a>

                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
           
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to {{$companyDetails->name}}</span>
                </li>
                <li>
                {{Html::image($companyDetails->image,'', ['class'=>'','height'=>'40','width'=>'40'])}}
                </li>
               


                <li>
                <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                    </a>
                   
                </li>
               
            </ul>

        </nav>
        </div>
<form id="logout-form" action="{{ route('vendor.logout') }}" method="POST" class="d-none">

        
                                        @csrf
                                    </form>
                                    
        @include('vendor.layouts.adminError')
            @yield('body')
      
        <!--    <div class="footer">-->
        <!--    <div class="float-right">-->
        <!--       <strong>Version</strong> 1.0-->
        <!--    </div>-->
        <!--    <div>-->
        <!--        <strong>Copyright</strong> AHC Company-->
        <!--    </div>-->
        <!--</div>-->
        </div>
        
    </div>

    <!-- Mainly scripts -->
    {{Html::script('public/assest/js/jquery-3.1.1.min.js')}}
    {{Html::script('public/assest/js/popper.min.js')}}
    {{Html::script('public/assest/js/bootstrap.js')}}
    {{Html::script('public/assest/js/plugins/metisMenu/jquery.metisMenu.js')}}
    {{Html::script('public/assest/js/plugins/slimscroll/jquery.slimscroll.min.js')}}

    <!-- Flot -->
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.tooltip.min.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.spline.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.resize.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.pie.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.symbol.js')}}
    {{Html::script('public/assest/js/plugins/flot/jquery.flot.time.js')}}

    <!-- Peity -->
    {{Html::script('public/assest/js/plugins/peity/jquery.peity.min.js')}}
    {{Html::script('public/assest/js/demo/peity-demo.js')}}

    <!-- Custom and plugin javascript -->
    {{Html::script('public/assest/js/inspinia.js')}}
    {{Html::script('public/assest/js/plugins/pace/pace.min.js')}}

    <!-- jQuery UI -->
    {{Html::script('public/assest/js/plugins/jquery-ui/jquery-ui.min.js')}}

    <!-- Jvectormap -->
    {{Html::script('public/assest/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}
    {{Html::script('public/assest/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}

    <!-- EayPIE -->
    {{Html::script('public/assest/js/plugins/easypiechart/jquery.easypiechart.js')}}

    <!-- Sparkline -->
    {{Html::script('public/assest/js/plugins/sparkline/jquery.sparkline.min.js')}}

    <!-- Sparkline demo data  -->
    {{Html::script('public/assest/js/demo/sparkline-demo.js')}}
    {{Html::script('public/assest/js/plugins/sweetalert/sweetalert.min.js')}}

   
    <script>
        $(document).ready(function() {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
//                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var data2 = [
                [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
                [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
                [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
                [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
                [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
                [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
                [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
                [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
            ];

            var data3 = [
                [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
                [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
                [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
                [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
                [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
                [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
                [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
                [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
            ];


            var dataset = [
                {
                    label: "Number of orders",
                    data: data3,
                    color: "#1ab394",
                    bars: {
                        show: true,
                        align: "center",
                        barWidth: 24 * 60 * 60 * 600,
                        lineWidth:0
                    }

                }, {
                    label: "Payments",
                    data: data2,
                    yaxis: 2,
                    color: "#1C84C6",
                    lines: {
                        lineWidth:1,
                            show: true,
                            fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.2
                            }, {
                                opacity: 0.4
                            }]
                        }
                    },
                    splines: {
                        show: false,
                        tension: 0.6,
                        lineWidth: 1,
                        fill: 0.1
                    },
                }
            ];


            var options = {
                xaxis: {
                    mode: "time",
                    tickSize: [3, "day"],
                    tickLength: 0,
                    axisLabel: "Date",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 10,
                    color: "#d5d5d5"
                },
                yaxes: [{
                    position: "left",
                    max: 1070,
                    color: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: 'Arial',
                    axisLabelPadding: 3
                }, {
                    position: "right",
                    clolor: "#d5d5d5",
                    axisLabelUseCanvas: true,
                    axisLabelFontSizePixels: 12,
                    axisLabelFontFamily: ' Arial',
                    axisLabelPadding: 67
                }
                ],
                legend: {
                    noColumns: 1,
                    labelBoxBorderColor: "#000000",
                    position: "nw"
                },
                grid: {
                    hoverable: false,
                    borderWidth: 0
                }
            };

            function gd(year, month, day) {
                return new Date(year, month - 1, day).getTime();
            }

            var previousPoint = null, previousLabel = null;

            $.plot($("#flot-dashboard-chart"), dataset, options);

            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
</body>

</html>




