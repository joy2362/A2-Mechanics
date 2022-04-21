<!-- files JS Files -->
<script src="{{asset('frontend/files/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/files/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/files/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('frontend/files/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/files/counterup/counterup.min.js')}}"></script>
<script src="{{asset('frontend/files/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/files/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/files/venobox/venobox.min.js')}}"></script>
<script src="{{asset('frontend/files/aos/aos.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend/js/main.js')}}"></script>

<script>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(Session::has('status'))
        Swal.fire({
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            title: 'Success!',
            text: '{{Session::get('status')}}',
            icon: 'success',
            position:'top-end',
            toast:true
        })
        @endif
        @if(Session::has('messege'))
        var type = "{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                Swal.fire({
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    title: 'Info!',
                    text: '{{Session::get('messege')}}',
                    icon: 'info',
                    position:'top-end',
                    toast:true
                })
                break;
            case 'success':
                Swal.fire({
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    title: 'Success!',
                    text: '{{Session::get('messege')}}',
                    icon: 'success',
                    position:'top-end',
                    toast:true
                })
                break;
            case 'warning':
                Swal.fire({
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    title: 'Warning!',
                    text: '{{Session::get('messege')}}',
                    icon: 'warning',
                    position:'top-end',
                    toast:true
                })
                break;
            case 'error':
                Swal.fire({
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    title: 'Error!',
                    text: '{{Session::get('messege')}}',
                    icon: 'error',
                    position:'top-end',
                    toast:true
                })
                break;
        }
        @endif
        $(document).on("click", "#delete", function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link;
                }
            })
        });
    });
</script>
@yield('script')