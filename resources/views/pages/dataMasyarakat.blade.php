@extends('layouts.app')

@section('title', 'Data Masyarakat')

@section('content')
<div class="custom-background py-5">
    <div class="dynamic-container">
        <div class="card py-3" style="border-radius: 12px">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: 600">Demokrasi Berdasar Pekerjaan</h5>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <h6 style="font-weight: 600">Grafik Pekerjaan</h6>
                </div>
                <div class="d-flex justify-content-center">
                    <div id="pieChart"></div>
                </div>
                <h6 style="font-weight: 600">Tabel Pekerjaan</h6>
                <div class="table-responsive">
                    <table class="table  table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" colspan="2" rowspan="2" class="text-center align-middle"
                                    style="background: #475669;color:white;">Kelompok</th>
                                <th scope="col" style="background: #475669;color:white;" colspan="2">Jumlah</th>
                                <th scope="col" style="background: #475669;color:white;" colspan="2">Laki-laki</th>
                                <th scope="col" style="background: #475669;color:white;" colspan="2">Perempuan</th>
                            </tr>
                            <tr class="text-center">
                                <th scope="col" style="background: #475669;color:white;">n</th>
                                <th scope="col" style="background: #475669;color:white;">%</th>
                                <th scope="col" style="background: #475669;color:white;">n</th>
                                <th scope="col" style="background: #475669;color:white;">%</th>
                                <th scope="col" style="background: #475669;color:white;">n</th>
                                <th scope="col" style="background: #475669;color:white;">%</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $row)
                            <tr>
                                <td class="d-flex justify-content-center align-items-center py-3">
                                    @if($row['color'] != '')
                                    <div class=""
                                        style="background-color: {{ $row['color'] }}; width: 15px; height: 15px; border-radius: 50%;">
                                    </div>
                                    @endif
                                </td>
                                <td>
                                    {{ $row['group'] }}
                                </td>
                                <td class="text-end">
                                    {{ $row['n'] }}
                                </td>
                                <td class="text-end">
                                    {{ number_format($row['n_percent'], 2) }}%
                                </td>
                                <td class="text-end">
                                    {{ $row['male_n'] }}
                                </td>
                                <td class="text-end">
                                    {{ number_format($row['male_percent'], 2) }}%
                                </td>
                                <td class="text-end">
                                    {{ $row['female_n'] }}
                                </td>
                                <td class="text-end">
                                    {{ number_format($row['female_percent'], 2) }}%
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="d-flex justify-content-center align-items-center py-3">
                                    <div class=""
                                        style="background-color: #fff; width: 15px; height: 15px; border-radius: 50%;">
                                    </div>
                                </td>
                                <td>
                                    BELUM MENGISI
                                </td>
                                <td class="text-end">
                                    0
                                </td>
                                <td class="text-end">
                                    0,00%
                                </td>
                                <td class="text-end">
                                    0
                                </td>
                                <td class="text-end">
                                    0,00%
                                </td>
                                <td class="text-end">
                                    0
                                </td>
                                <td class="text-end">
                                    0,00%
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.49.1/apexcharts.min.js"
    integrity="sha512-qiVW4rNFHFQm0jHli5vkdEwP4GPSzCSp85J7JRHdgzuuaTg31tTMC8+AHdEC5cmyMFDByX639todnt6cxEc1lQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const names = {!! json_encode($names) !!};
    const colors = {!! json_encode($colors) !!};
    const values = {!! json_encode($values) !!};

    var options = {
        series: values,
        chart: {
            width: 500,
            type: 'pie',
        },
        labels: names,
        responsive: [
            {
            breakpoint: 1200,
            options: {
                chart: {
                    width: 700
                },
                legend: {
                    position: 'bottom'
                }
            }
        },
    ],
        colors: colors,
        legend:{
            show:false
        }
    };

    var chart = new ApexCharts(document.querySelector("#pieChart"), options);
    chart.render();
</script>
@endsection
