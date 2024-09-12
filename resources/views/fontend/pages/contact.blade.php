<div class="section contact" id="contact">
    <div id="map" class="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h4 class="contact-title">Send a message</h4>
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">Send Message</button>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif


                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-mobile icon-md"></i>
                        </div>
                        <div class="col-10 ">
                            <h6 class="d-inline">Phone : <br> <span class="text-muted">+ (123) 456-789</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-map-alt icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Address :<br> <span class="text-muted">12345 Fake ST NoWhere AB Country.</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-envelope icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Email :<br> <span class="text-muted">info@website.com</span></h6>
                        </div>
                    </div>
                    <ul class="social-icons pt-4">
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                        <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
