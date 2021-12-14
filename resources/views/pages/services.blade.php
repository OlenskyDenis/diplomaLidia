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
            <ul id="myTab" role="tablist" id="types"
                class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
                @foreach ($research_types as $type)
                    <li class="nav-item flex-sm-fill {{ $type->id == 1 ? 'active' : ' ' }}">
                        <a id="home-tab" data-toggle="tab" href="#v{{ $type->id }}" role="tab" aria-selected="true"
                            class="nav-link border-0 text-uppercase font-weight-bold">{{ $type->name }}</a>
                    </li>
                @endforeach
            </ul>
            <div>
                <input type="text" name="search" id="search" class="form-control" />
           </div>
            <div class="tab-content">
                @foreach ($research_types as $type)

                    <div class="tab-pane fade {{ $type->id == 1 ? 'active in ' : ' ' }}" id="v{{ $type->id }}">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Назва дослідження</th>
                                    <th scope="col">Ціна, грн</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($pricelist as $item)
                                    @if ($item->research_type_id == $type->id)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
             $('#search').keyup(function(){
                  search_table($(this).val());
             });
             function search_table(value){
                  $('table tr').each(function(){
                       var found = 'false';
                       $(this).each(function(){
                            if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                            {
                                 found = 'true';
                            }
                       });
                       if(found == 'true')
                       {
                            $(this).show();
                       }
                       else
                       {
                            $(this).hide();
                       }
                  });
             }
        });
   </script>
@endsection
