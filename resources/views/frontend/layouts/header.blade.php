  <!-- menu -->
  <div class="mil-menu-frame">
      <!-- frame clone -->
      <div class="mil-frame-top">
          <a href="/" class="mil-logo"><img src="{{ asset('img/logos/navbarlogodark.png') }}" alt="Logo" width="250"
                  height="auto"></a>
          <div class="mil-menu-btn">
              <span></span>
          </div>
      </div>
      <!-- frame clone end -->
      <div class="container">
          <div class="mil-menu-content">
              <div class="row">
                  <div class="col-xl-5">

                      <nav class="mil-main-menu" id="swupMenu">
                          <ul>
                              <li class="mil-has-children {{ Request::is('/') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/') }}">Bosh sahifa</a>
                              </li>
                              <li class="mil-has-children {{ Request::is('about') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/about') }}">Biz haqimizda</a>
                              </li>
                              <li class="mil-has-children {{ Request::is('bizning-jamoa') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/bizning-jamoa') }}">Bizning jamoa</a>
                              </li>
                              <li class="mil-has-children {{ Request::is('bizning-filiallar') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/bizning-filiallar') }}">Bizning filiallar</a>
                              </li>
                              <li class="mil-has-children {{ Request::is('jobs') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/jobs') }}">Bo'sh ish o'rinlari</a>
                              </li>
                              <li class="mil-has-children {{ Request::is('application') ? 'mil-active' : '' }}">
                                  <a href="{{ url('/application') }}">Anketa to'ldirish</a>
                              </li>
                          </ul>
                      </nav>


                  </div>
                  <div class="col-xl-7">

                      <div class="mil-menu-right-frame">
                          <div class="mil-animation-in">
                              <div class="mil-animation-frame">
                                  <div class="mil-animation mil-position-1 mil-scale" data-value-1="2" data-value-2="2">
                                  </div>
                              </div>
                          </div>
                          <div class="mil-menu-right">
                              <div class="row">
                                  <div class="col-lg-6 mil-mb-60">
                                      <h6 class="mil-muted mil-mb-30">Filial lavozimlari</h6>
                                      <ul class="mil-menu-list">
                                          @foreach ($branchPositions as $position)
                                          <li><a href="{{ route('position.detail', $position->slug) }}"
                                                  class="mil-light-soft">{{ $position->title }}</a></li>
                                          @endforeach
                                      </ul>
                                  </div>
                                  <div class="col-lg-6 mil-mb-60">
                                      <h6 class="mil-muted mil-mb-30">Ofis lavozimlari</h6>
                                      <ul class="mil-menu-list">
                                          @foreach ($officePositions as $position)
                                          <li><a href="{{ route('position.detail', $position->slug) }}"
                                                  class="mil-light-soft">{{ $position->title }}</a></li>
                                          @endforeach
                                      </ul>
                                  </div>
                              </div>


                              <!-- <div class="mil-divider mil-mb-60"></div> -->
                              <!-- <div class="row justify-content-between">

                                  <div class="col-lg-12 mil-mb-60">

                                      <h6 class="mil-muted mil-mb-30">Qo'qon shahar</h6>

                                      <p class="mil-light-soft mil-up">Alisher Naoviy ko'chasi 25-uy
                                          <br><span class="mil-no-wrap">+998 73 249 2929</span>
                                      </p>

                                  </div>
                              </div> -->
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- menu -->