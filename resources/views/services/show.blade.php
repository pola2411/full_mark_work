@extends('layouts.front')


@section('content')
    <div class="fav">
        <a href="favourite.html"><span><img src="{{ asset('front/images/icons/heart-svgrepo-com.svg') }}"
                    alt="chat" /></span></a>
    </div>
    <div class="socialicons">
        <a href=""><span><img src="{{ asset('front/images/fac.png') }}" alt="chat" /></span></a>
        <a href=""><span><img src="{{ asset('front/images/1_Twitter3_colored_svg-64.webp') }} "
                    alt="chat" /></span></a>
        <a href=""><span><img src="{{ asset('front/images/icons/pinterest-svgrepo-com.svg') }}"
                    alt="chat" /></span></a>
        <a href=""><span><img src="{{ asset('front/images/icons/linkedin-linked-in-svgrepo-com.svg') }}"
                    alt="chat" /></span></a>
    </div>

    <!-- start content -->
    <section class="servdetails">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-8 description">
                    <div class="header">

                        <h2>{{ $data->title }}

                        </h2>
                        <p><span><a href="">المال والأعمال</a></span> / <span><a href="">إمساك
                                    الدفاتر</a></span></p>
                    </div>
                    <hr>
                    <div class="rate">
                        <p>لم يتم التقييم بعد</p>
                        <img src="{{ asset('front/images/icons/time-clock-svgrepo-com.svg') }}" alt="">
                    </div>
                    <div class="img">
                        <img src="{{ asset('front/images/services/' . $data->image) }}" alt="">
                    </div>
                    <div class="dis">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        <img src="{{ asset('front/images/icons/speech-bubble-with-exclamation-mark-svgrepo-com.svg') }}"
                                            alt="">
                                        <span>وصف الخدمة </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <p>{{ $data->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        <img src="../images/icons/plus-svgrepo-com.svg" alt="">
                                        <span>التطويرات المتوفرة </span>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">



                                        <form action="{{ route('services.extra') }}" method="POST">
                                            @csrf
                                            <div class="buy">
                                                <div class="extra">
                                                    @auth


                                                        <div>
                                                            <input type="checkbox" name="extra"
                                                                {{ $status == '1' ? 'checked' : '' }} />


                                                        </div>

                                                        <div>
                                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                                        </div>
                                                    @endauth
                                                    @guest
                                                        <div>
                                                            <input type="checkbox" disabled />
                                                        </div>

                                                    @endguest
                                                    <div>




                                                        <h6>{{ $data->another_title }} <sub>(days 2+)</sub></h6>
                                                    </div>
                                                    <div>
                                                        <p>{{ $data->another_price }} USD</p>
                                                    </div>
                                                </div>
                                                @auth
                                                    <button class="btn " type="submit">
                                                        @if ($status == '0')
                                                            اشترى الان ب {{ $data->another_price }} USD
                                                        @else
                                                            الغاء الان
                                                        @endif



                                                    </button>
                                                @endauth
                                                @guest
                                                    <button disabled class="btn">
                                                        يرجى تسجيل الدخول
                                                    </button>
                                                @endguest

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        <span class="span">خدمات اخرى مقدمة من imohamedzaki</span>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="otherserv">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-4">
                                                    <a href="">
                                                        <div class="img">
                                                            <img src="../images/services/download-8.jpg" alt="">
                                                        </div>
                                                        <h6>تصميمات معمارية وانشائية</h6>
                                                        <p>مخصص RATE USD</p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-4">
                                                    <a href="">
                                                        <div class="img">
                                                            <img src="../images/services/download-8.jpg" alt="">
                                                        </div>
                                                        <h6>تصميمات معمارية وانشائية</h6>
                                                        <p>مخصص RATE USD</p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-4">
                                                    <a href="">
                                                        <div class="img">
                                                            <img src="../images/services/download-8.jpg" alt="">
                                                        </div>
                                                        <h6>تصميمات معمارية وانشائية</h6>
                                                        <p>مخصص RATE USD</p>
                                                    </a>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-4">
                                                    <a href="">
                                                        <div class="img">
                                                            <img src="../images/services/download-8.jpg" alt="">
                                                        </div>
                                                        <h6>تصميمات معمارية وانشائية</h6>
                                                        <p>مخصص RATE USD</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 contact">
                    @auth
                         <form action="{{ route('create.order') }}" method="POST">
                        @csrf
                        <input type="hidden" name="transaction_id" id="transaction">
                        <input type="hidden" name="service_id" value="{{$data->id}}">
                        <input type="hidden" name="total" value="{{$total}}">
                        <input type="hidden" name="transaction_status" id="status">
                    </form>
                    @endauth

                    <div class="buy">

                        <div class="dropdown">
                            @auth

                                <div id="paypal-button-container" class="btn btn-warning">
                                    اشترى الان ب . {{ $total }} USD
                                </div>
                            @endauth
                            @guest
                                <button class="btn" disabled type="button">
                                    <a href="#">اشترى الان ب . {{ $total }} USD</a>
                                </button>

                            @endguest


                        </div>
                    </div>
                    <div class="info">
                        <a href="">
                            <div class="img">
                                <img src="{{ asset('front/images/instructor.png') }}" alt="">
                            </div>
                            <h6>{{ $data->name }}</h6>
                        </a>

                        <div class="offline" data-bs-toggle="tooltip" data-bs-placement="top" title="Offline"></div>
                        <div class="online" data-bs-toggle="tooltip" data-bs-placement="top" title="Online"></div>
                        <p>مستخدم جديد</p>
                        <button><a href="">اتصال</a></button>
                    </div>
                    <div class="safe">
                        <div class="img">
                            <img src="../images/icons/shield-fill-check-svgrepo-com.svg" alt="">
                        </div>
                        <div class="text">
                            <h6>حماية 100%</h6>
                            <p>نوفر طلبك او تستعيد اموالك</p>
                        </div>
                    </div>
                    <div class="details">
                        <ul>
                            <li>
                                <div class="dot"></div>
                                <p>تقوم بدفع التكاليف المطلوبة فقط ، بدون اسعار مخفية</p>
                            </li>
                            <li>
                                <div class="dot"></div>
                                <p>نحتفظ باموالك الى ان تكون سعيد بالخدمه الي تم توصليها لك</p>
                            </li>
                            <li>
                                <div class="dot"></div>
                                <p>نوفر طلبك او تستعيد اموالك</p>
                            </li>
                        </ul>
                        <a href="../footerpages/work.html">طريقة العمل</a>
                    </div>
                    <div class="relate">
                        <h6>مواضيع ذات صله </h6>
                        <div class="d-flex">
                            <div><a href="">بحث_علمي</a></div>
                            <div><a href="">research</a></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.ex.start_logofooter')
    @include('layouts.ex.start_footer')
    @include('layouts.ex.start_copyright')
@endsection
@push('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=test&currency=USD"></script>
    <script>
        paypal.Buttons({
            // Order is created on the server and the order id is returned
            createOrder: (data, actions) => {
                return actions.order.create({
                    "purchase_units": [{
                        "amount": {
                            "currency_code": "USD",
                            "value": "{{ $total }}",
                            "breakdown": {
                                "item_total": {
                                    /* Required when including the items array */
                                    "currency_code": "USD",
                                    "value": "{{ $total }}"
                                }
                            }
                        },
                        "items": [{
                            "name": "{{ $data->title }}",
                            /* Shows within upper-right dropdown during payment approval */
                            "description": "{{ $data->description }}",
                            /* Item details will also be in the completed paypal.com transaction view */
                            "unit_amount": {
                                "currency_code": "USD",
                                "value": "{{ $total }}"
                            },
                            "quantity": "1"
                        }, ]
                    }]
                });
            },
            // Finalize the transaction on the server after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];

                    if (transaction.status == 'COMPLETED') {
                        $('#transaction').val(transaction.id);
                        $('#status').val(transaction.status);
                        document.getElementsByTagName('form')[5].submit();



                    } else {


                    }

                });

                // Successful capture! For dev/demo purposes:


                // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');

            }
        }).render('#paypal-button-container');
        console.log(data);
    </script>
@endpush
