@extends('layouts.front.front')
@section('content')

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
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>40,000 SMS</li>
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>10,000/-</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Get Now</a>
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
                                <li class="list-group-item p-2"><i class="fa fa-times text-danger mr-2"></i>1,500/-</li>
                            </ul>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="" class="btn btn-secondary btn-block p-3" style="border-radius: 0;">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0">
                        <div class="card-header position-relative border-0 p-0 mb-4">
                            <img class="card-img-top" src="{{ asset('front/img/price-3.jpg') }}" alt="">
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
                            <a href="" class="btn btn-primary btn-block p-3" style="border-radius: 0;">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

@endsection
