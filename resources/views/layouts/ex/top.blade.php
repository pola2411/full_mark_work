<section class="top fixed-top bg-white">
      <div class="container">
        <div class="logo">
          <img src="{{asset('front/images/logo.png')}}" alt="logo" />
        </div>

        <div class="search">
            <form action="{{route('search')}}">
                @csrf
          <input type="search" name='search' class="form-control" />
          <img src="{{asset('front/images/icons/search.svg')}} " alt="search" />
        </form>
        </div>

        <div class="user">
           @guest




          <button class="login" id="login">تسجيل الدخول</button>
          <!-- Modal -->
          <div class="modal loginmodel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="loginheader">
                  <h5 class="d-block text-center">تسجيل الدخول</h5>
                  <button
                    type="button"
                    class="btn-close p-2"
                    id="closelogin"
                  ></button>
                </div>
                <div class="loginbody">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input id="email" type="email"   placeholder="اسم المستخدم/البريد الالكترونى" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password"  placeholder="كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <button type="submit" class="btn btn-green d-block w-100 text-center">
                      تسجيل الدخول
                    </button>
                    <div class="check">
                      <div class="input">
                        <input type="checkbox" />احفظ البيانات
                      </div>
                      <span class="back"
                        ><a href="#">استعادة الرقم السرى</a></span
                      >
                    </div>
                    <div class="or">
                      <div></div>
                      <span>او</span>
                      <div></div>
                    </div>
                  </form>

                  <div class="otherlogin">
                    <div>
                      <a href="#"
                        ><img src="{{asset('front/images/fac.png')}}" alt="fac" />تسجيل الدخول
                        بإستخدام : Facebook</a
                      >
                    </div>
                    <div>
                      <a href="#"
                        ><img
                          src="{{asset('front/images/social_media_social_media_logo_google_plus-64.webp')}} "
                          alt="fac"
                        />تسجيل الدخول بإستخدام : Google</a
                      >
                    </div>
                    <div>
                      <a href="#"
                        ><img
                          src="{{asset('front/images/1_Twitter3_colored_svg-64.webp')}} "
                          alt="fac"
                        />تسجيل الدخول بإستخدام : Twitter</a
                      >
                    </div>
                  </div>
                  <a href="#" id="member">هل انت عضو ؟</a>
                </div>
              </div>
            </div>
          </div>

          <button class="register" id="register">تسجيل</button>
          <!-- Modal -->
          <div class="modal registermodel">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="loginheader">
                  <h5 class="d-block text-center">تسجيل</h5>
                  <button
                    type="button"
                    class="btn-close p-2"
                    id="closeregister"
                  ></button>
                </div>
                <div class="loginbody">
                  <form method="POST" action="{{route('register')}}">
                    @csrf
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"placeholder="اسم المستخدم" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="اسم المستخدم/البريد الالكترونى" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password"      placeholder="كلمة المرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password"    placeholder=" تأكيد كلمة المرور" class="form-control" name="password_confirmation" required autocomplete="new-password">





                    <button type="submit" class="btn btn-green d-block w-100 text-center">
                      تسجيل
                    </button>

                    <div class="or">
                      <div></div>
                      <span>او</span>
                      <div></div>
                    </div>
                  </form>

                  <div class="otherlogin">
                    <div>
                      <a href="#"
                        ><img src="{{asset('front/images/fac.png')}}" alt="fac" />تسجيل الدخول
                        بإستخدام : Facebook</a
                      >
                    </div>
                    <div>
                      <a href="#"
                        ><img
                          src="{{asset('front/images/social_media_social_media_logo_google_plus-64.webp')}}"
                          alt="fac"
                        />تسجيل الدخول بإستخدام : Google</a
                      >
                    </div>
                    <div>
                      <a href="#"
                        ><img
                          src="{{asset('front/images/1_Twitter3_colored_svg-64.webp')}}"
                          alt="fac"
                        />تسجيل الدخول بإستخدام : Twitter</a
                      >
                    </div>
                  </div>
                  <a href="#" id="alreadymember">مشترك بالفعل</a>
                </div>
              </div>
            </div>
          </div>
          @endguest
          @auth
          <a class="btn btn-danger" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          <i class="mdi mdi-logout text-primary"></i>
          تسجيل خروج
       </a>
       <a href="{{route('services.create')}}" class="btn btn-primary">اضافه خدمه</a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
       </form>


          @endauth

        </div>
      </div>
    </section>
