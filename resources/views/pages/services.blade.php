@extends('layouts.main')

@section('title', 'Послуги та тарифи')

@section('custom-css')
    <style>
        #myTab li {
            margin: 2px;
            border: 1px solid blue;
        }

        table {
            margin-top: 10px;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="p-5 bg-white rounded shadow mb-5">
            <ul id="myTab" role="tablist"
                class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">

                @foreach ($research_types as $type)
                    <li class="nav-item flex-sm-fill">
                        <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"
                            class="nav-link border-0 text-uppercase font-weight-bold">{{ $type->name }}</a>
                    </li>
                @endforeach

            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Назва дослідження</th>
                        <th scope="col">Ціна, грн</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pricelist as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
