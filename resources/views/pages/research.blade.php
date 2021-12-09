@extends('layouts.main')

@section('title', 'Якість води')

@section('custom-css')
@endsection

@section('content')
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src={{ asset("storage/assets/img/kolb.jpeg") }} class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check2-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat
                            nulla pariatur.</li>
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

@endsection

@section('custom-js')
@endsection
