<div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Machakos Home Property<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.html">Home</a>
                  </li>
                  
                
                  @if (Route::has('login'))
                  @auth
                  <li>
                  <x-app-layout>

                  </x-app-layout>
                  </li>
                  @else
                  <li><a class="btn-outline-primary" href="{{ route('login') }}">Login</a></li>
                  <li><a class="btn-outline-success" href="{{ route('register') }}">Register</a></li>
                  @endauth
                  @endif

                </ul>
              </nav>
            </div>
          </div>
          </div>
          </div>
          </div>
          </div>

          </div>
        </div>
      </div>
</div>