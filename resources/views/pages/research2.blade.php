@extends('layouts.main')

@section('title', 'Якість води')

@section('custom-css')
@endsection


@section('content')
    <div class="col-md-12">
        <form method="POST" action={{ route('research')}}>
            @csrf <!-- {{ csrf_field() }} -->
            <label>Charge</label>
        <select id="name" name="agent_id" id="name" class="form-control">
            @foreach ($reserv as $type)
                <option value="{{ $type->id }}">
                    {{ $type->name }}
                </option>
            @endforeach

        </select>
        <input type="submit" value="Submit">
        </form>
    </div>

    <div class="col-md-12"><br>
        <label>Price</label>
        <input type="text" class="form-control" id="Price" name="Price" disabled>
    </div>

@endsection
@section('custom-js')
    <script>
        $(document).ready(function() {
            $("#name").change(function() {
                $.ajax({
                    url: '/graph',
                    type: 'POST',
                    dataType: "json",
                    success: function(data) {
                        alert(data.val1);
                    }
                });
                var value = this.value;
                $('#Price').val(value);

            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
@endsection
