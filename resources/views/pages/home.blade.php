@extends('layouts.main')

@section('title', 'Головна')

@section('custom-css')
@endsection

@section('content')
    <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h2>Вітаємо Вас на сайті Житомирського обласного лабораторного центру</h2>
                    <p>На сторінках веб-сайту ви знайдете корисну інформацію про завдання та основні напрямки діяльності
                        Установи згідно чинного законодавства України та нормативно-правових актів.</p>
                    <a href={{ route('about') }} class="btn-get-started ">Детальніше</a>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <div class="section-title">
            <h2>Дослідження якості води</h2>
        </div>
        <!-- ======= Графіки ======= -->
        <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                <canvas id="canvas" height="280" width="600"></canvas>
                <canvas id="canvas2" height="280" width="600"></canvas>
            </div>
        </section>
        <div class="section-title">
            <h2>Корисні посилання</h2>
        </div>
        {{-- корисні посилання --}}
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bx-health"></i></div>
                            <h4 class="title"><a href='https://moz.gov.ua/' target="_blank">МОЗ України</a></h4>
                            <p class="description">Міністерство охорони здоров'я України — центральний орган виконавчої
                                влади України у галузі охорони здоров'я</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="https://phc.org.ua/" target="_blank">ДУ "Центр громадського
                                    здоров'я МОЗ України"</a></h4>
                            <p class="description">Заклад охорони здоров’я, що відповідає за збереження і зміцнення
                                здоров’я населення, епідеміологічний нагляд і
                                біологічну безпеку</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-building-house"></i></div>
                            <h4 class="title"><a href="https://oz.zt.gov.ua/" target="_blank">Управління охорони
                                    здоров'я Житомирської ОДА</a></h4>
                            <p class="description">Управління охорони здоров'я Житомирської обласної державної
                                адміністрації</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="https://zt-dpss.gov.ua/" target="_blank">Головне управління
                                    Держпродспоживслужби в Житомирській області</a></h4>
                            <p class="description">Управління здійснює державний нагляд (контроль) за дотриманням законодавства про захист прав споживачів</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>

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
                        text: 'Загальна кількість досліджень за родовищами (з 2010 року)',
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
                        text: 'Відношення водойм за якістю води за родовищами (з 2010 року)',
                        fontSize: 22
                    }
                }
            });
        };
    </script>

@endsection
