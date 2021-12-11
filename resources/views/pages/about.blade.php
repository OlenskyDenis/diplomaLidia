@extends('layouts.main')

@section('title', 'Про центр ')

@section('custom-css')
@endsection

@section('content')

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src={{ asset('storage/assets/img/about.jpg') }} class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3> Щиро вітаємо Вас на офіційному веб-сайті Державної Установи “Житомирський
                        обласний лабораторний центр Міністерства охорони здоров’я України”
                    </h3>
                    <p class="fst-italic">
                        На сторінках веб-сайту ви знайдете корисну інформацію про завдання
                        та основні напрямки діяльності Установи згідно чинного законодавства України та
                        нормативно-правових актів.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> Послуги та тарифи досліджень
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Актуальні новини центру
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Діяльність та основні напрямки діяльності
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Установчі документи
                        </li>
                        <li><i class="bi bi-check2-circle"></i> Інформація про керівництво та працівників</li>
                    </ul>
                    <p>
                        Завдяки веб-сайту громадяни мають можливість звернутись до
                        Установи із запитаннями, які їх хвилюють.
                    </p>
                    <p>
                        Ви завжди можете надіслати нам свої зауваження, коментарі та
                        побажання стосовно роботи нашого веб-сайту та матеріалів розміщених на ньому.

                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Структурних підрозділів по області</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Показників для аналізів</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Років роботи</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Співробітників</p>
                </div>

            </div>

        </div>
    </section>




    <!-- Підрозділи центру -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Підрозділи центру</h2>
                {{-- <p>Випробувальний центр ДУ «Житомирський обласний лабораторний центр МОЗ України ( далі - ВЦ ) акредитований
                    на проведення випробувань у відповідності з вимогами згідно ДСТУ ISO/ IEC 17025:2006, що засвідчує
                    атестат про акредитацію № 2Н 1432 виданий Національним агентством з акредитації України.
                    <br />
                    Основною функцією ВЦ є проведення випробувань в закріпленій сфері акредитації, оформлення результатів
                    випробувань і видачі їх замовнику.
                </p> --}}
            </div>

            <div class="testimonials-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img//activity/san-gig.jpg') }} class="testimonial-img" alt="">
                        <h3>Санітарно-гігієнічна лабораторія</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                            випробування харчової продукції / випробування питної води, води поверхневих водойм, води
                            басейнів, стічної води, ґрунту,
                            показників
                            атмосферного повітря, повітря закритих приміщень, викидів зі стаціонарних джерел, виробничого
                            середовища / випробування товарів промислової групи
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img//activity/bakteria.jpg') }} class="testimonial-img" alt="">
                        <h3>Бактеріологічна лабораторія</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                            мікробіологічні випробування харчової продукції / мікробіологічні випробування питної води, води
                            поверхневих водойм, води басейнів
                            / мікробіологічні випробування товарів промислової групи
                            / дослідження об’єктів на стерильність
                            / дослідження змивів з об’єктів навколишнього середовища
                            / дослідження біологічного матеріалу
                            / дослідження повітря житлових та громадських приміщень на мікробіологічні показники
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img//activity/magnit.jpg') }} class="testimonial-img" alt="">
                        <h3>Лабораторія електромагнітних полів та інших фізичних факторів</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            радіологічні випробування харчової продукції, води поверхневих водойм, води басейнів, стічної
                            води, ґрунту /
                            радіологічні випробування будівельних матеріалів і будівельних сумішей, деревини, металобрухту,
                            торфу, торфобрикетів, радіоактивних відходів з невідомим радіоактивним складом та невідомою
                            питомою активністю /
                            інструментальні дослідження виробничого середовища, житлових та громадських приміщень,території
                            житлової забудови
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img//activity/virus.jpg') }} class="testimonial-img" alt="">
                        <h3>Вірусологічна лабораторія</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            молекулярно-генетичні дослідження ГМО (кількісний та якісний метод) /
                            дослідження біологічного матеріалу /
                            дослідження води питної, води поверхневих водойм
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img//activity/virus.jpg') }} class="testimonial-img" alt="">
                        <h3>Лабораторія паразитології</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            випробування питної води, води поверхневих водойм, води басейнів, стічної води, ґрунту, харчової
                            продукції / дослідження побутового пилу на наявність алергенних кліщів
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                    <div class="testimonial-item swiper-slide">
                        <img src={{ asset('storage/assets/img/activity/osob.jpg') }} class="testimonial-img" alt="">
                        <h3>Лабораторія особливо-небезпечних інфекцій</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            дослідження біологічного матеріалу
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    {{-- основні напрямки діяльності --}}
    <section class="services">
        <div class="container">

            <div class="section-title">
                <h2>Основні напрямки діяльності</h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bx-pie-chart-alt-2"></i></div>
                        <h4 class="title">Здійснення досліджень</h4>
                        <p class="description">Здійснення мікробіологічних, вірусологічних, паразитологічних, санітарно-
                            гігієнічних та інших
                            досліджень</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bx-error"></i></div>
                        <h4 class="title">Здійснення медико-санітарних заходів</h4>
                        <p class="description">Здійснення медико-санітарних заходів з метою недопущення поширення
                            інфекційної хвороби міжнародного значення
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bxs-factory"></i></div>
                        <h4 class="title">Дослідження на підприємствах</h4>
                        <p class="description">Проведення лабораторних досліджень в організаціях з метою оцінки умов для
                            провадження ними діяльності</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bxs-check-circle"></i></div>
                        <h4 class="title">Дезінфекційні заходи</h4>
                        <p class="description">Проведення профілактичних та поточних дезінфекційних заходів</p>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box icon-box-green">
                        <div class="icon"><i class="bx bxs-vial"></i></div>
                        <h4 class="title">Випробування продукції</h4>
                        <p class="description">Проведення випробувань продукції та сировини за показниками безпечності
                            для здоров’я</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box icon-box-blue">
                        <div class="icon"><i class="bx bx-body"></i></div>
                        <h4 class="title">Оцінка впливу зовнішніх факторів на людину</h4>
                        <p class="description">Проведення оцінки безпечності впливу на людину фізичних, хімічних,
                            біологічних факторів середовища</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><i class="bx bx-first-aid"></i></div>
                        <h4 class="title">Зберігання медичних препаратів</h4>
                        <p class="description">Зберігання, облік, розподіл, доставка медичних і ветеринарних
                            препаратів</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box icon-box-cyan">
                        <div class="icon"><i class="bx bxl-baidu"></i></div>
                        <h4 class="title">Розведення і реалізація лабораторних тварин</h4>
                        <p class="description">Розведення і реалізація лабораторних тварин</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

@endsection

@section('custom-js')
@endsection
