
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top bg-dark">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:{{$App_Email}}">{{$App_Email}}</a>
            <i class="icofont-phone"></i> {{$App_Mobile}}
        </div>
        <div class="social-links">
            @if($Facebook)
                <a href="{{$Facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
            @endif
            @if($Twitter)
                <a href="{{$Twitter}}" class="twitter"><i class="icofont-twitter"></i></a>
            @endif

            @if($Linkedin)
                <a href="{{$Linkedin}}" class="instagram"><i class="icofont-instagram"></i></a>
            @endif
            @if($Instagram)
                <a href="{{$Instagram}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
            @endif
        </div>
    </div>
</div>