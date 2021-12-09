@extends('layouts.main')

@section('title', 'Послуги та тарифи')

@section('custom-css')
    <style>
        #myTab li {
            margin: 2px;
            border: 1px solid blue;
        }
        table{
            margin-top: 10px;

        }

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="p-5 bg-white rounded shadow mb-5">
            <!-- Rounded tabs -->
            <ul id="myTab" role="tablist"
                class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
                <li class="nav-item flex-sm-fill">
                    <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"
                        class="nav-link border-0 text-uppercase font-weight-bold active">Пестициди</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Дослідження на
                        COVID19</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Відділення
                        дезінфектології</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Повітря</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Вода</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"
                        class="nav-link border-0 text-uppercase font-weight-bold">Полімери</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Вірусологічна
                        лабораторія</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Паразитологічна
                        лабораторія</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Бактеріологічна
                        лабораторія</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Харчові продукти</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Лабораторія
                        електромагнітних полів та інших фізичних факторів</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Атестація робочих
                        місць</a>
                </li>
                <li class="nav-item flex-sm-fill">
                    <a id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                        aria-selected="false" class="nav-link border-0 text-uppercase font-weight-bold">Інше</a>
                </li>
            </ul>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            {{-- <div id="myTabContent" class="tab-content">
                <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade px-4 py-5 show active">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade px-4 py-5">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade px-4 py-5">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur
                        sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div> --}}
            <!-- End rounded tabs -->
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
