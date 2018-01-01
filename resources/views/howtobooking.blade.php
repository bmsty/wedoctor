@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleHowToBooking.css')}}">
@endsection

@section('content')
<!-- How to Booking -->
    <section class="container-fluid howtobooking">
      <div class="row howtobooking-row">
        <div class="col-sm-12 text-center howtobooking-colom">
          <img src="{{asset('/img/howtobooking/howtobooking.png')}}" alt="Error Load Image" width="600px">
        </div>
      </div>
    </section>
@endsection






