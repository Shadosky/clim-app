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
