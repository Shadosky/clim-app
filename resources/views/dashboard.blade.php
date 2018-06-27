<?php
/**
 * Created by PhpStorm.
 * User: kevingiroux
 * Date: 26/06/2018
 * Time: 16:59
 */
?>
@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-sm-8 my-auto" style="margin: auto;">
            <canvas id="myChart" width="100" height="50"></canvas>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem; margin: auto;">
                <div class="card-header">Clim ON</div>
                <div class="card-body">
                    <p class="card-text"><i class="fas fa-snowflake fa-7x"></i></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem; margin: auto;">
                <div class="card-header">Clim OFF</div>
                <div class="card-body">
                    <p class="card-text"><i class="fab fa-hotjar fa-7x"></i></p>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["On", "Off"],
            datasets: [{
                label: '# of Votes',
                data: [{{$result['a']}}, {{$result['b']}}],
                backgroundColor: [
                    'rgba(23, 162, 184, 0.2)',
                    'rgba(255, 193, 7, 0.2)'
                ],
                borderColor: [
                    'rgba(17, 116, 132, 1)',
                    'rgba(183, 139, 12, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@stop