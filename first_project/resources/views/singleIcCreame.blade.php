<div>
@extends('pages.main')
@section('title','single Ice Cream Section')
    

@section('content')
         @foreach ($singleRec as $item)
    <div style="width:100%" class="justify-content-center d-flex">
        
      <div class="col-md-4">
        <div class="cream_box">
            <div class="cream_img">
                <img src="{{ asset('images/img-' . $item->id . '.png') }}">
            </div>
            <div class="price_text">{{ $item->icecream_price }}</div>
            <h6 class="strawberry_text">{{ $item->icecream_name }}</h6>
            <div class="cart_bt"><a href="{{route('icecream')}}">Back to Home</a></div>
            
        </div>
    </div>
    </div>
@endforeach
@endsection


</div>