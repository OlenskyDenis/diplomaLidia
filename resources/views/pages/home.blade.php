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

                   <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-info">
                                <h4>Walter White</h4>
                            </div>
                            <div class="member-img">
                                <img src={{ asset('storage/assets/img/team/team-1.jpg') }} class="img-fluid" alt="">
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
                                <img src={{ asset('storage/assets/img/team/team-1.jpg') }} class="img-fluid" alt="">
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
                                <img src={{ asset('storage/assets/img/team/team-1.jpg') }} class="img-fluid" alt="">
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

        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Останні новини</h2>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src={{ asset('storage/assets/img/features-1.svg') }} class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src={{ asset('storage/assets/img/features-2.svg') }} class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Corporis temporibus maiores provident</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src={{ asset('storage/assets/img/features-3.svg') }} class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                        <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                            aut quia voluptatem hic voluptas dolor doloremque.</p>
                        <ul>
                            <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                            </li>
                            <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src={{ asset('storage/assets/img/features-4.svg') }} class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                            in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- корисні посилання --}}
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </main>

@endsection

@section('custom-js')
@endsection
