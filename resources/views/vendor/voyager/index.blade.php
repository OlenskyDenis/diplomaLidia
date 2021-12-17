@extends('voyager::master')

@section('content')
    <div class="container">
        <h2>Спрогнозувати якість води</h2>
        <form action={{ Route::is('predict') ? route('research.store') : route('predict') }} method="post" role="form"
            class="php-email-form">
            @csrf
            <div class="form-group ">
                <label class="form-check-label">ЛКП</label>
                <input type="text" value='@isset($request['lkp']){{ $request['lkp'] }}@endisset' name="lkp"
                        class="form-control" id="lkp" placeholder="ЛКП" required>
                </div>
                <div class="form-group ">
                    <label class="form-check-label">БСК5</label>
                    <input type="text" value='@isset($request['bsk5']){{ $request['bsk5'] }}@endisset' name="bsk5"
                            class="form-control" id="bsk5" placeholder="БСК5" required>
                    </div>
                    <div class="form-group ">
                        <label class="form-check-label">ХСК</label>
                        <input type="text" value='@isset($request['hsk']){{ $request['hsk'] }}@endisset' name="hsk"
                                class="form-control" id="hsk" placeholder="ХСК" required>
                        </div>
                        <div class="form-group ">
                            <label class="form-check-label">Розчинний кисень</label>
                            <input type="text" value='@isset($request['soluble_oxygen']){{ $request['soluble_oxygen'] }}@endisset'
                                    name="soluble_oxygen" class="form-control" id="soluble_oxygen" placeholder="Розчинний кисень"
                                    required>
                            </div>
                            <div class="form-group ">
                                <label class="form-check-label">Вміст кислотності</label>
                                <input type="text" name="ph" value='@isset($request['ph']){{ $request['ph'] }}@endisset'
                                        class="form-control" id="ph" placeholder="pH" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" @isset($request['roundworms']) checked @endisset class="form-check-input"
                                        name="roundworms" id="roundworms">
                                    <label class="form-check-label" for="roundworms">Аскариди</label>
                                </div>
                                <div class="form-group">
                                    <label class="form-check-label">Водойма</label>
                                    <select class="form-control" name="reservoir_id" id="id_reservoir" required>
                                        @foreach ($reservoirs as $type)
                                            @if (isset($request['reservoir_id']) && $type->id == $request['reservoir_id'])
                                                <option selected value="{{ $type->id }}">
                                                    {{ $type->name . '/ ' . $type->region . '/ ' . $type->city . '/ ' . $type->address }}
                                                </option>
                                            @else
                                                <option value="{{ $type->id }}">
                                                    {{ $type->name . '/ ' . $type->region . '/ ' . $type->city . '/ ' . $type->address }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-check-label">Тип дослідження</label>
                                    <select class="form-control" name="research_type_id" id="id_research" required>
                                        @foreach ($research_types as $type)
                                            @if (isset($request['research_type_id']) && $type->id == $request['research_type_id'])
                                                <option selected value="{{ $type->id }}">{{ $type->name }}</option>
                                            @else
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <label class="form-check-label">Ціна</label>
                                    <input type="text" value='@isset($request['price']){{ $request['price'] }}@endisset' name="price"
                                            class="form-control" id="price" placeholder="Ціна" required>
                                    </div>
                                    <div class="form-group ">
                                        <label class="form-check-label">Дата</label>
                                        <input type="date" value='@isset($request['data']){{ $request['data'] }}@endisset' name="data"
                                                class="form-control" id="data" placeholder="Дата" required>
                                        </div>
                                        @isset($conformity)
                                            <div class="form-group ">
                                                <label class="form-check-label">Якість води (0-не якісна, 1 - якісна)</label>
                                                <input type="text" value='{{ $conformity }}' name="conformity" class="form-control" id="conformity"
                                                    placeholder="Якість води" required>
                                                <label class="form-check-label">Точність прогнозування якості води: {{ $accuracy }}</label>
                                            </div>
                                        @endisset
                                        <button type="submit" class="btn btn-primary">{{ Route::is('predict') ? "Додати до бази" : "Спрогнозувати" }}</button>
                                    </form>
                                </div>

                            @endsection
