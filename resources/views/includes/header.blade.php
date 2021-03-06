  <header id="header" class="fixed-top d-flex align-items-center {{ Route::is('home') ? 'header-transparent' : ' ' }}">
      <div class="container d-flex justify-content-between align-items-center">

          <div class="logo">
              <a href={{ route('home') }}><img src={{ asset('storage/assets/img/Logotypv4.png') }} alt=""
                      class="img-fluid"></a>
          </div>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href={{ route('home') }} class='{{ Route::is('home') ? 'active' : ' ' }}'>Головна</a>
                  </li>
                  <li><a href={{ route('about') }} class='{{ Route::is('about') ? 'active' : ' ' }}'>Про центр</a>
                  </li>
                  <li><a href={{ route('research') }} class='{{ Route::is('research') ? 'active' : ' ' }}'>Якість води</a>
                  </li>
                  <li><a href={{ route('services') }} class='{{ Route::is('services') ? 'active' : ' ' }}'>Послуги
                          та тарифи</a></li>
                  <li><a href={{ route('contact') }}
                          class='{{ Route::is('contact') ? 'active' : ' ' }}'>Контакти</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>

      </div>
  </header>
