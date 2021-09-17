@extends('admin.layout.base')

@section('head-title')
<title>Dashboard</title>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item active" aria-current="page"><span>Dashboard</span></li>
@endsection

@section('content')

<div class="row my-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        {{-- <div class="page-title my-3">
            <h2>Visitor Website</h2>
        </div> --}}

       


    </div>
</div>
<style>
    .visited{ list-style-type: "💻"; }
</style>
@endsection

{{-- @push('css')
<link href="{{ asset('admin/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('admin/assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js-external')
<script src="{{ asset('admin/plugins/apex/apexcharts.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@push('js-internal')
<script>
    $(window).on("load", function () {

        var $primary = '#5A8DEE';
        var $success = '#39DA8A';
        var $danger = '#FF5B5C';
        var $warning = '#FDAC41';
        var $info = '#00CFDD';
        var $label_color = '#475f7b';
        var $primary_light = '#E2ECFF';
        var $danger_light = '#ffeed9';
        var $gray_light = '#828D99';
        var $sub_label_color = "#596778";
        var $radial_bg = "#e7edf3";

        var analyticsBarChartOptions = {
            chart: {
                    height: 260,
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '50%',
                        endingShape: 'rounded'
                    },
                },
                legend: {
                    horizontalAlign: 'right',
                    offsetY: -10,
                    markers: {
                        radius: 50,
                        height: 8,
                        width: 8
                    }
                },
                dataLabels: {
                    enabled: false
                },
                colors: [$primary, $primary_light],
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        type: "vertical",
                        inverseColors: true,
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 70, 100]
                    },
                },
                series: [{
                    name: '{{ date("Y")}}',
                    data: [<?php echo grafik_kunjungan_by_month('1',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('2',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('3',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('4',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('5',date("Y"));?>,
                    <?php echo grafik_kunjungan_by_month('6',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('7',date("Y"));?>, 
                    <?php echo grafik_kunjungan_by_month('8',date("Y"));?>,
                    <?php echo grafik_kunjungan_by_month('9',date("Y"));?>,
                    <?php echo grafik_kunjungan_by_month('10',date("Y"));?>,
                    <?php echo grafik_kunjungan_by_month('111',date("Y"));?>,
                    <?php echo grafik_kunjungan_by_month('12',date("Y"));?>]
                }, {
                    name: '{{ date("Y",strtotime("-1 year"))}}',
                    data: [<?php echo grafik_kunjungan_by_month('1',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('2',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('3',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('4',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('5',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('6',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('7',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('8',date("Y",strtotime("-1 year")));?>, 
                        <?php echo grafik_kunjungan_by_month('9',date("Y",strtotime("-1 year")));?>,
                        <?php echo grafik_kunjungan_by_month('10',date("Y",strtotime("-1 year")));?>,
                        <?php echo grafik_kunjungan_by_month('11',date("Y",strtotime("-1 year")));?>,
                        <?php echo grafik_kunjungan_by_month('12',date("Y",strtotime("-1 year")));?>]
                }],
            xaxis: {
                    categories: ['January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: $gray_light
                        }
                    }
                },
                yaxis: {
                    //min: 0,
                    //max: 300,
                    tickAmount: 3,
                    labels: {
                        style: {
                            color: $gray_light
                        }
                    }
                },
                legend: {
                    show: false
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "" + val + " Visitor"
                        }
                    }
                }
        }

        var analyticsBarChart = new ApexCharts(
                document.querySelector("#visitor"),
                analyticsBarChartOptions
        );
        analyticsBarChart.render();


        var ctx = document.getElementById('lastChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo implode(',', $elements); ?>] ,
                datasets: [{
                    label: ' {{ date('Y ') }}',
                    data: [<?php echo implode(',', $jumlah); ?>],
                    backgroundColor: [
                        'rgba(98, 110, 212, 0.1)',
                    ],
                    borderColor: [
                        'rgba(98, 110, 212, 1)'
                    ],
                    borderWidth: 3,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        labels: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                var label = context.dataset.label || '';

                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += new Intl.NumberFormat().format(context.parsed.y) + " Visitor";
                                }
                                return label;
                            }
                        }
                    },
                },
                animations: {
                    radius: {
                        duration: 400,
                        easing: 'linear',
                        loop: (context) => context.active
                    }
                },
                hoverRadius: 12,
                    hoverBackgroundColor: 'white',
                    interaction: {
                        mode: 'nearest',
                        intersect: false,
                        axis: 'x'
                    },
            }
        });
    });
</script>
@endpush --}}