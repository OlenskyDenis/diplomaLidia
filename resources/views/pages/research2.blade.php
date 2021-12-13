@extends('layouts.main')

@section('title', 'Якість води')

@section('custom-css')
@endsection

@section("content")
<img src='my_plot.png'/>
@endsection
@section('custom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
