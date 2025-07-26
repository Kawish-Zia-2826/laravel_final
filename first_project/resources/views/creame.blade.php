@extends('pages.main')
@section('title', 'Cream Section')
@section('content')
        <div class="cream_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="cream_taital">Our Featured Ice Cream</h1>
                  <p class="cream_text">tempor incididunt ut labore et dolore magna aliqua</p>
               </div>
            </div>
            <div class="cream_section_2">
              <div class="row">
                 @foreach ($card as $item)
    <div class="col-md-4">
        <div class="cream_box">
            <div class="cream_img">
                <img src="{{ asset('images/img-' . $loop->iteration . '.png') }}">
            </div>
            <div class="price_text">{{ $item->icecream_price }}</div>
            <h6 class="strawberry_text">{{ $item->icecream_name }}</h6>
            <div class="cart_bt"><a href="{{route('singleRec' ,$item->id)}}">View Details</a></div>
            
        </div>
    </div>
@endforeach
              </div>
            </div>
           
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
@endsection