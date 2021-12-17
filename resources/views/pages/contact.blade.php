@extends('layouts.main')

@section('title', 'Контакти')

@section('custom-css')
@endsection

@section('content')

    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Наш адрес</h3>
                                <p>м.Житомир, вул. В.Бердичівська 64</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>Напишіть нам</h3>
                                <p>olc-zhitomir@ukr.net</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Зателефонуйте нам</h3>
                                <p>0412-43-18-09<br>0412 340 408</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    {{-- <form method="POST" action="{{ route('welcome.login') }}"> --}}
                    <form action="{{ route('send_application') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-group ">
                            <input type="text" name="user_name" class="form-control" id="name" placeholder="Ім'я"
                                required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3 form-group">
                                <input type="tel" id="phone" name="phone_number" pattern="[0-9]{10}"
                                    placeholder="Номер телефону" required
                                    oninvalid="this.setCustomValidity('Номер із 10-ти символів!')"
                                    oninput="setCustomValidity('')">
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="research_type_id" id="id_research" required>
                                @foreach ($research_types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Тема" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="3" placeholder="Повідомлення"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Зачекайте</div>
                            <div class="error-message">Виникла помилка</div>
                            <div class="sent-message">Повідомлення надіслано. Дякуємо!</div>
                        </div>
                        <div class="text-center"><button type="submit">Надіслати</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
        <div class="container-fluid p-0">
            <iframe
                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJg0M65GJjLEcRlEr7Nww4F-Q&key=AIzaSyBWRY3ipmLa_3faQjHj_DPOSVJSwMlbT8Y"
                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>

@endsection

@section('custom-js')
@endsection
