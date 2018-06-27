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
        <div class="col-sm-8 my-auto">
            <canvas id="myBarChart" width="100" height="50"></canvas>
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
    const MULTILINEONEFILL = document.getElementById("myBarChart");
    console.log(MULTILINEONEFILL);
    let MultiLineOneFill = new Chart(MULTILINEONEFILL, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "My First dataset",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40],
                    spanGaps: false,
                },
                {
                    label: "My Second dataset",
                    fill: false,
                    lineTension: 0.3,
                    backgroundColor: "rgba(169,68,66,0.98)",
                    borderColor: "rgba(169,68,66,0.98)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(169,68,66,0.98)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(169,68,66,0.98)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [60, 79, 90, 61, 76, 56, 80],
                    spanGaps: false,
                }
            ]
        }
    });
</script>
@stop