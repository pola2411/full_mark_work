@extends('layouts.front')


@section('content')

@include('layouts.ex.start_header')
@include('layouts.ex.start_category')

<section class="services">
    <div class="icons">
      <img src="{{asset('front/images/border-all.svg')}}" alt="all" class="all" />
      <img src="{{asset('front/images/card-list.svg')}}" alt="list" class="list" />
    </div>
    <div class="container">
      <h2>الخدمات</h2>

      <div class="row one">

        @foreach ($data as $item)


        <div class="col-md-3 parent">
          <div class="info">
            <div class="data">
              <a href="#">
                <span class="img">
                  <img src="images/profile.png" alt="profile" />
                </span>
                <span class="name">{{$item->name}}</span>
              </a>
            </div>

            <div class="all">
              <div class="star">
                <img src="images/star.png" alt="star" />
                <span>{{$item->id}}</span>
              </div>
              <div class="zero">{{$item->name}}</div>
            </div>
          </div>

          <div class="oneservice">
            <a href="{{route('services.show',$item->id)}}">
              <div class="img">
                <img
                  src="{{asset('front/images/services/'.$item->image)}}"
                  alt="online"
                />
              </div>
              <p>
                {{$item->title}}
              </p>
            </a>
          </div>
          <hr />
          <h6>مخصص RATE USD</h6>
        </div>
        @endforeach

      </div>

      <div class="second">
        <div class="col">
          <div class="row">
            <div class="oneservice col-md-4">
              <a href="#">
                <div class="img">
                  <img
                    src="images/services/10-online-research-tools-every-online-learner-know-300x207.jpg"
                    alt="online"
                  />
                </div>
              </a>
            </div>
            <div class="info col-md-8">
              <h5>بحث علمي باللغتين العربية والانجليزية بنسبة اقتباس</h5>
              <p>
                كاقوم بكتابة ابحاث علمية باللغة العربية والانجليزية بنسبة
                اقتباس بين 5% حتى 15% ويطابق كافة المعايير العلمية المطلوبة من
                توثيق ومراجع وما خلافه.تحتسب القيمة بحسب عدد صفحات البحث.كل
                صفحة تحسب من 3...5
              </p>

              <div class="last">
                <div class="data">
                  <a href="#">
                    <span class="img">
                      <img src="images/profile.png" alt="profile" />
                    </span>
                    <span class="name">Mohamed Ahmed</span>
                  </a>
                </div>

                <div class="all">
                  <div class="star">
                    <img src="images/star.png" alt="star" />
                    <span>0</span>
                  </div>
                  <div class="zero">(0)</div>
                </div>
              </div>
            </div>
          </div>
          <h6>مخصص RATE USD</h6>
        </div>
        <div class="col">
          <div class="row">
            <div class="oneservice col-md-4">
              <a href="#">
                <div class="img">
                  <img
                    src="images/services/10-online-research-tools-every-online-learner-know-300x207.jpg"
                    alt="online"
                  />
                </div>
              </a>
            </div>
            <div class="info col-md-8">
              <h5>بحث علمي باللغتين العربية والانجليزية بنسبة اقتباس</h5>
              <p>
                كاقوم بكتابة ابحاث علمية باللغة العربية والانجليزية بنسبة
                اقتباس بين 5% حتى 15% ويطابق كافة المعايير العلمية المطلوبة من
                توثيق ومراجع وما خلافه.تحتسب القيمة بحسب عدد صفحات البحث.كل
                صفحة تحسب من 3...5
              </p>

              <div class="last">
                <div class="data">
                  <a href="#">
                    <span class="img">
                      <img src="images/profile.png" alt="profile" />
                    </span>
                    <span class="name">Mohamed Ahmed</span>
                  </a>
                </div>

                <div class="all">
                  <div class="star">
                    <img src="images/star.png" alt="star" />
                    <span>0</span>
                  </div>
                  <div class="zero">(0)</div>
                </div>
              </div>
            </div>
          </div>
          <h6>مخصص RATE USD</h6>
        </div>
      </div>
      <form action="{{route('more.servise')}}">
        @csrf
      <button> المزيد</button>
    </form>


      <div class="endserv">
        <h3>جديد الموقع</h3>

      </div>
    </div>
  </section>




@include('layouts.ex.start_wait')
@include('layouts.ex.start_logofooter')
@include('layouts.ex.start_footer')
@include('layouts.ex.start_copyright')
@endsection
