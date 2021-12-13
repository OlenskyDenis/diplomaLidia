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

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-info">
                            <h4>Walter White</h4>
                        </div>
                        <div class="member-img">
                            <img src={{ asset('storage/assets/py/my_plot.png') }} class="img-fluid" alt="">
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
