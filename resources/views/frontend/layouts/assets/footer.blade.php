<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>{{$App_Name}}</h3>
                    <p class="mt-2">
                        {{$Footer_Description }}
                         <br><br>
                        <strong>Phone:</strong> {{$App_Mobile}}<br>
                        <strong>Email:</strong> {{$App_Email}}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('index')}}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('team')}}">Our Team</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p> {{$Social_Network_Description }} </p>

                    <!-- displaying social icons in flex -->
                    <div class="social-links mt-3">
                        @if($Facebook)
                            <a href="{{$Facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                        @endif
                        @if($Twitter)
                            <a href="{{$Twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                        @endif

                        @if($Linkedin)
                            <a href="{{$Linkedin}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                        @endif
                        @if($Instagram)
                            <a href="{{$Instagram}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>