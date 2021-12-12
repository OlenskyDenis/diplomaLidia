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
                                <p>info@example.com<br>contact@example.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Зателефонуйте нам</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-group ">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Ім'я" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3 form-group">
                                <input type="tel" class="form-control" {{-- pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{3}" --}} name="tel" id="tel"
                                    placeholder="Номер телефону" required>
                            </div>
                            <div class="col-md-6 form-group mt-3">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <select class="form-control" name="id_research" id="id_research"
                                placeholder="Категорія питання" required>
                                <option value="other">Категорія питання</option>
                                @foreach ($research_types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Тема"
                                required>
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
