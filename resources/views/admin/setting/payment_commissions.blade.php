@extends('admin.layouts.app')
@section('content')
<section id="main-content" class="main-content">
    <div class="container-fluid">
        <div class="row mt-0 gy-4">
            <div class="col-12 payment-card-blocks">
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/wallet.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="wallet" />
                            <label for="wallet">Wallet</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/stripe.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="stripe" />
                            <label for="stripe">Stripe</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/PayPal.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="paypal" />
                            <label for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/ceredit-card.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="credit-card" />
                            <label for="credit-card">Credit Card</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/debit-card.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="debit" />
                            <label for="debit">Debit card</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
                <div class="card position-relative">
                    <div class="card-wrap d-flex align-items-center flex-row">
                        <div class="card-icons">
                            <img src="{{asset('admin/assets/images/icons/cash-payment.svg')}}" alt="" class="img-fluid"/>
                        </div>
                        <div class="content">
                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                        </div>
                        <div class="switch-toggle ms-auto">
                            <input type="checkbox" id="cash-payment" />
                            <label for="cash-payment">Cash Payment</label>
                        </div>
                    </div>
                    <div class="showData"><a href="#"><img src="{{asset('admin/assets/images/icons/down-arrow2.svg')}}" alt=""/></a></div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection  