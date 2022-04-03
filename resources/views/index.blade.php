@extends('layouts.front.front')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('front/image/Bulk-SMS.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{--<h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Keep Your Pet Happy</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit diam sit diam erat</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>--}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('front/image/bulk-sms-services-provider.png') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            {{--<h3 class="text-white mb-3 d-none d-sm-block">Best Pet Services</h3>
                            <h1 class="display-3 text-white mb-3">Pet Spa & Grooming</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">Duo nonumy et dolor tempor no et. Diam sit diam sit diam erat</h5>
                            <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                            <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>--}}
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">

                <h1 class="display-4 mb-4"><span class="text-primary">Benefits </span> of  <span class="text-secondary">SMS Marketing</span></h1>
                <h5 class="text-muted mb-3">SMS marketing is an excellent way of communication between your company and consumers. Given below are some major benefits of using SMS marketing</h5>

                {{--<ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
                </ul>--}}
{{--                <a href="" class="btn btn-lg btn-primary mt-3 px-4">Learn More</a>--}}
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="{{ asset('front/image/SMS-Marketing-Guidelines-For-E-commerce-Success.jpg') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><span class="text-primary">Premium</span> SMS Service</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">Developer API</h3>
                        <p>SMS REST API for Application development. Easy Integration with your software.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">Long SMS Support</h3>
                        <p>You can send up to 800 Characters in one SMS. Per SMS 160 Characters.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">Bangla SMS </h3>
                        <p>You can send up to 670 Characters in one SMS. Per SMS 70 Characters.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">Support all Device</h3>
                        <p>You can use your SMS Web Interface from a PC, Tablet, or Smartphones.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">Scheduled SMS</h3>
                        <p>Setup your schedule & deliver SMS on a specific Date & Time.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
{{--                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>--}}
                        <h3 class="mb-3">SMS Template</h3>
                        <p>You can create your Own SMS template for sending bulk SMS.</p>
                        <a class="text-uppercase font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="{{ asset('front/image/shutterstock_335999603.jpg') }}" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>


                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Long SMS Support</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Emergency Services</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Unlimited User</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Developer API</h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid bg-light pt-5 pb-4">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Pricing Plan</h4>
                <h1 class="display-4 m-0">Choose the <span class="text-primary">Best Price</span></h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="{{ asset('front/img/price-1.jpg') }}" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Standard</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>0.25<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ SMS</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>No-Masking</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>6 Month Validity</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>40,000 SMS</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>10,000/-</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="{{ asset('front/img/price-2.jpg') }}" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-secondary mb-3">Basic</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>0.27<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ SMS</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Non-Masking</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>3 Month Validity</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>5,555SMS</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>1,500/-</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="{{ asset('front/img/price-1.jpg') }}" alt="">
                            <div class="position-absolute d-flex flex-column align-items-center justify-content-center w-100 h-100" style="top: 0; left: 0; z-index: 1; background: rgba(0, 0, 0, .5);">
                                <h3 class="text-primary mb-3">Premium</h3>
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>0.20<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ SMS</small>
                                </h1>
                            </div>
                        </div>
                        <div class="card-body text-center p-0">
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>Non-Masking</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>12 Month Validity</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>250,000 SMS</li>
                                <li class="list-group-item p-2"><i class="fa fa-check text-secondary mr-2"></i>50,000/-</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->





    <!-- Testimonial Start -->
    <div class="container-fluid my-5 p-0 py-5">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Testimonial</h4>
                <h1 class="display-4 m-0">Our Client <span class="text-primary">Says</span></h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/baler-kontho.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/bestway-group.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/cell-vision-group.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/chakribajar.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>

                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/lige-guard-ss.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/natun-shomoy.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/pacific-group.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>
                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/pba.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>

                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/provati-tv.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>

                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/purple-group.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>

                <div class="bg-white mx-3 p-4">
                    <div class="d-flex align-items-end mb-3 mt-n4 ml-n4">
                        <img class="img-fluid" src="{{ asset('front/our_client/watter-paper.jpg') }}" style="width: 120px; height: 80px;" alt="">
                        <div class="ml-3">
                            <h5>Client Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                    <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum sanct clita</p>
                </div>




            </div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection
