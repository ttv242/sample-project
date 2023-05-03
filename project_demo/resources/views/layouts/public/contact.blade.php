@extends('layouts.master')

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('images/big_image_1.jpg')}});">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">
                <div class="mb-5 element-animate">
                    <h1>Contact</h1>
                    <p>Discover &amp; connect with great places around the world.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-5 element-animate">
                <h3 class="mb-5">Say "Hi", Don't be shy.</h3>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="message">Write Message</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 element-animate">
                <h3 class="mb-5">Contact Info</h3>
                <ul class="list-unstyled ">
                    <li class="d-flex mb-3"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span
                            class="">34 Street Name, City Name Here, United States</span></li>
                    <li class="d-flex mb-3"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span
                            class="">+1 242 4942 290</span></li>
                    <li class="d-flex mb-3"><span class="mr-3"><span class="icon ion-email"></span></span><span
                            class=""><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                class="__cf_email__"
                                data-cfemail="b7ded9d1d8f7ced8c2c5d3d8dad6ded999d4d8da">[email&#160;protected]</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2>Top Destinations</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci
                    pariatur, eveniet.</p>
            </div>
        </div>
        <div class="row top-destination">
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_1.jpg')}}" alt="Image placeholder">
                    <h2>Trogir, Croatia</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_2.jpg')}}" alt="Image placeholder">
                    <h2>Stockton Beach, Australia</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_3.jpg')}}" alt="Image placeholder">
                    <h2>Desert, Morocco</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_4.jpg')}}" alt="Image placeholder">
                    <h2>Taj Mahal, India</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_5.jpg')}}" alt="Image placeholder">
                    <h2>Eiffel Tower, France</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12 element-animate">
                <a href="#" class="place">
                    <img src="{{asset('images/img_6.jpg')}}" alt="Image placeholder">
                    <h2>Opera House, Australia</h2>
                    <p>Visit This Place</p>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-cover" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('images/big_image_2.jpg')}});">
    <div class="container">
        <div class="row justify-content-center align-items-center intro">
            <div class="col-md-7 text-center element-animate">
                <h2>Get 10% off On Your Next Travel</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere
                    facilis, dolores!</p>
                <p><a href="#" class="btn btn-black">Get Started</a></p>
            </div>
        </div>
    </div>
</section>
