@extends('template.utama')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/styleFindRating.css')}}">
@endsection

@section('content')
<!-- Find Rating -->
<section class="container-fluid find-rating">
  <div class="row find-rating-row">
    <div class="col-sm-12 find-rating-colom">
      <h1 class="text-center">Find Rating</h1>
      <p>Berikan rating anda kepada doktor untuk peningkatan kualitas dokter.</p>
      <form action="{{ url('/submitrating') }}" method="POST">
        {{ csrf_field() }}

        <!-- Dockter yang mau di rating -->
        <select name="doctor_id" class="form-control rating{{ $errors->has('doctor_id') ? ' is-invalid' : '' }}" style="margin-bottom:{{ $errors->has('doctor_id') ? ' 0;' : '' }}">
          <option value="null" selected>-- Pilih dokter yang akan anda berikan rating --</option>
          @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->nama_doctor }}</option>
          @endforeach
        </select>

        @if($errors->has('doctor_id'))
          <div class="invalid-feedback">
            Anda belum memilih doktor yang akan anda beri rating
          </div>
        @endif

        <!-- Ratingnya -->
        <select name="rating_user" class="form-control rating{{ $errors->has('rating_user') ? ' is-invalid' : '' }}" style="margin-bottom:{{ $errors->has('rating_user') ? ' 0;' : '' }}">
          <option value="null" selected>-- Pilih rating untuk dokter yang anda pilih --</option>
          <option value="1">Bintang 1</option>
          <option value="2">Bintang 2</option>
          <option value="3">Bintang 3</option>
          <option value="4">Bintang 4</option>
          <option value="5">Bintang 5</option>
        </select>
        @if($errors->has('rating_user'))
          <div class="invalid-feedback">
            Anda belum memberikan rating kepada dokter yang anda pilih
          </div>
        @endif

        <button type="submit" class="btn btn-light float-right">Submit</button>
      </form>
    </div>
  </div>
</section>
@endsection