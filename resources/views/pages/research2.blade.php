@extends('layouts.main')

@section('title', 'Якість води')

@section('custom-css')
@endsection


@section("content")
<div class="chart-container col-4">
    <div class="pie-chart-container">
      <canvas id="canvas"></canvas>
    </div>
  </div>
<script>
var year = {{$year}};
    var user = {{$user}};
    var barChartData = {
        labels: year,
        datasets: [{
            label: 'User',
            backgroundColor: "pink",
            data: user,
            trendlineLinear: {
                style: "rgb(255 ,66 ,255, 0.3)",
                lineStyle: "dotted|solid",
                width: 2
            }
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '#ffa0a0',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly User Joined'
                }
            }
        });
    };
</script>
@endsection
@section('custom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
