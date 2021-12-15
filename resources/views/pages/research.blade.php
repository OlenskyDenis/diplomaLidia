@extends('layouts.main')

@section('title', 'Якість води')

@section('custom-css')
@endsection

@section('content')
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src={{ asset('storage/assets/img/norma.jpg') }} class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Аналіз ґрунтових вод родовищ Житомирського регіону</h3>
                    <p class="fst-italic mt-4">
                        Якість води – це поєднання хімічного і біологічного складу та фізичних властивостей води, що
                        зумовлює її придатність для конкретних видів водокористування. Встановлені значення показників
                        якості води (фізичні, хімічні та біологічні) називаються нормами якості води і відповідають певним
                        стандартам.
                    </p>
                </div>
                <div class="col-lg-12 mt-3 pt-lg-0">
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Лактозопозитивні кишкові палички (ЛКП) – мікробне забруднення
                            водойм, при яких небезпечно вживати
                            воду або навіть перебувати у ній.
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Біохімічне споживання кисню (БСК5) – біохімічне споживання
                            кисню в річковій воді вимірюється у
                            мг О2/л, що відображає споживання кисню для окислення легкоокислюваних органічних речовин
                            впродовж 5
                            діб (БСК5).
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Хімічне споживання кисню (ХСК) - кількість кисню у мг/дм3
                            (або іншого окисника у розрахунку на
                            кисень), яка необхідна для повного окиснення органічних речовин, що містяться в пробі води; такі
                            елементи як, С, H, S, P та інші (крім азоту), які присутні в органічній речовині, окиснюються до
                            CO2, H2O, P2O5, SO3.
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Розчинний кисень (РК) - вміст розчиненого кисню в природній
                            воді коливається в межах від 0 до 14
                            мгО2/дм3.
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Вміст кислотності (pH) – вміст у воді речовин, здатних
                            вступати в реакцію з гідроксид-іонами
                            (ОН-).
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    <div class="section-title">
        <h2>Графіки досліджень</h2>
    </div>

    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <canvas id="canvas" height="280" width="600"></canvas>

            <canvas id="canvas2" height="280" width="600"></canvas>

            <div class="row">
                <div class="col-lg-8 col-md-8 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-info">
                            <h4>Кореляція</h4>
                        </div>
                        <div class="member-img">
                            <img src={{ asset('storage/assets/py/corr.png') }} class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et
                                dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae
                                perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea
                                non est corporis in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-info">
                            <h4>Walter White</h4>
                        </div>
                        <div class="member-img">
                            <img src={{ asset('storage/assets/py/linetrend.png') }} class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et
                                dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae
                                perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea
                                non est corporis in.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-info">
                            <h4>Walter White</h4>
                        </div>
                        <div class="member-img">
                            {{-- <img src={{ asset('storage/assets/img/team/team-1.jpg') }} class="img-fluid" alt=""> --}}
                            @foreach ($images as $img)
                                <img src="{{ $img }}" />

                            @endforeach
                            {{-- <img src="{{ $corr }}" />
                            <img src="{{ $elbow }}" />
                            <img src="{{ $clustDot }}" />
                            <img src="{{ $clustScat }}" />
                            <img src="{{ $countByDate }}" />
                            <img src="{{ $trendLines }}" />
                            <img src="{{ $depGood }}" /> --}}
                        </div>
                        <div class="member-info">
                            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et
                                dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis repudiandae
                                perferendis qui. Neque non quidem sit sed pariatur quia modi ea occaecati. Incidunt ea
                                non est corporis in.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('custom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        var deposits = <?= $deposits ?>;
        var count = <?= $count ?>;
        var barChartData = {
            labels: deposits,
            datasets: [{
                label: 'Кількість досліджень',
                backgroundColor: "gray",
                data: count
            }]
        };
        var deposits2 = <?= $deposits2 ?>;
        var countGood = <?= $countGood ?>;
        var countBad = <?= $countBad ?>;
        var barChartData2 = {
            labels: deposits2,
            datasets: [{
                    label: 'Водойми з якісною водою',
                    //  backgroundColor: "gray",
                    data: countGood,
                    backgroundColor: "blue",
                },
                {
                    label: 'Водойми з не якісною водою',
                    data: countBad,
                    backgroundColor: "red"
                }
            ]
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
                            borderColor: '#c1c1c1',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Загальна кількість досліджень за родовищами',
                        fontSize: 22
                    }
                }
            });

            var ctx = document.getElementById("canvas2").getContext("2d");
            window.myBar2 = new Chart(ctx, {
                type: 'bar',
                data: barChartData2,
                options: {
                    elements: {
                        rectangle: {
                            borderWidth: 2,
                            borderColor: '#c1c1c1',
                            borderSkipped: 'bottom'
                        }
                    },
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Відношення водойм за якістю води за родовищами',
                        fontSize: 22
                    }
                }
            });
        };
    </script>

@endsection
