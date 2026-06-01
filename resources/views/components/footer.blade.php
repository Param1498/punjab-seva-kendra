<footer class="ftco-footer">
    <div class="container mb-5 pb-4">
        <div class="row">
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>{{ config('site.footer_about', 'We build great projects with quality construction services.') }}</p>
                    <ul class="ftco-footer-social list-unstyled mt-4">
                        <li><a href="{{ config('site.social.twitter', '#') }}"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="{{ config('site.social.facebook', '#') }}"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="{{ config('site.social.instagram', '#') }}"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Links</h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-md-4">
                            <li><a href="{{ url('/projects') }}"><span class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                            <li><a href="{{ url('/about') }}"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
                            <li><a href="{{ url('/services') }}"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
                            <li><a href="{{ url('/blog') }}"><span class="fa fa-chevron-right mr-2"></span>Blog Posts</a></li>
                        </ul>
                        <ul class="list-unstyled ml-md-5">
                            <li><a href="{{ url('/contact') }}"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                            <li><a href="{{ url('/privacy-policy') }}"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
                            <li><a href="{{ url('/terms') }}"><span class="fa fa-chevron-right mr-2"></span>Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Customer Services</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Prompt Delivery</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Reliable Equipment</a></li>
                        <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New Heavy Equipment</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg col-md-6">
                <div class="ftco-footer-widget">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="fa fa-map-marker mr-3"></span><span class="text">{{ config('site.address') }}</span></li>
                            <li><a href="tel:{{ config('site.phone') }}"><span class="fa fa-phone mr-3"></span><span class="text">{{ config('site.phone') }}</span></a></li>
                            <li><a href="mailto:{{ config('site.email') }}"><span class="fa fa-paper-plane mr-3"></span><span class="text">{{ config('site.email') }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6 aside-stretch py-3">
                    <p class="mb-0">Copyright &copy; {{ date('Y') }} {{ config('site.name', 'Wilcon') }}. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>