@extends('pages.main')
@section('content')
@section('title', 'About Us')
  
    <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="{{asset('images/about-img.png')}}"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">About Icecream</h1>
                  <p class="about_text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euconsectetur adipiscing esequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                  @php
                      $test = "test"
                  @endphp

                  <script>
                     // var test = @json($test);
                     var test = {{Js::from($test)}};
                     console.log(test);
                     
                     
                  </script>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
@endsection

@push('about-script')
   <script src="{{ asset('js/about.js') }}"></script>
@endpush
