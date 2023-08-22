@extends('website.layouts.app')
@section('content')
@section('title', 'Contact')

<!-- ===========Info Section Ends Here========== -->
<div class="info-section padding-bottom" style="padding-top: 20px;">
    <div class="container">
        <div class="section__header style-2 text-center">
            <h2>Contact Info</h2>
            <p>Let us know your opinions. Also you can write us if you have any questions.</p>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center">
                        <div class="contact-thumb mb-4">
                            <img src="{{ URL::to('public/website/assets/images/contact/icon/01.png') }}"
                                alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Office Address</h6>
                            <p>1201 park street, Fifth Avenue</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center">
                        <div class="contact-thumb mb-4">
                            <img src="{{ URL::to('public/website/assets/images/contact/icon/02.png') }}"
                                alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Phone number</h6>
                            <p>+855 97 708 6101</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center">
                        <div class="contact-thumb mb-4">
                            <img src="{{ URL::to('public/website/assets/images/contact/icon/03.png') }}"
                                alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Send Email</h6>
                            <p>mornsova@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===========Info Section Ends Here========== -->

<!-- ================> contact section start here <================== -->
{{-- <div class="contact-section bg-white">
    <div class="contact-top padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="contact-form-wrapper text-center">
                        <h2>Feedback</h2>
                        <p class="mb-5">Let us know your opinions. Also you can write us if you have any questions.
                        </p>
                        <form class="contact-form"
                            action="https://demos.codexcoder.com/themeforest/html/ollya/contact.php" id="contact-form"
                            method="POST">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" id="name" name="name"
                                    required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Your Email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Subject" id="subject" name="subject" required>
                            </div>
                            <div class="form-group w-100">
                                <textarea name="message" rows="8" id="message" placeholder="Your Message" required></textarea>
                            </div>
                            <div class="form-group w-100 text-center">
                                <button class="default-btn reverse" type="submit"><span>Send our
                                        Message</span></button>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-bottom">
        <div class="contac-bottom">
            <div class="row justify-content-center g-0">
                <div class="col-12">
                    <div class="location-map">
                        <div id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355669374!2d-118.69192993092697!3d34.02073049448939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1633958856057!5m2!1sen!2sbd"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ================> contact section end here <================== -->

@endsection
@section('script')
@endsection
