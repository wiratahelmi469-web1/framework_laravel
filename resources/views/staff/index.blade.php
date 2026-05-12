@extends('layouts.index')

@section('content')

<div class="container">
  <div class="row">

    @foreach ($ar_staff as $row)

    <div class="col-md-3 mb-4">
      <div class="card h-100" style="width: 15rem;">

        <img src="{{ asset('images/profile.jpg') }}"
             class="card-img-top"
             alt="profile">

        <div class="card-body">
          <h5 class="card-title">{{ $row->nama }}</h5>
          <p class="card-text">{{ $row->nip }}</p>
          <p class="card-text">{{ $row->gender }}</p>

          <a href="#" class="btn btn-primary">
            Detail
          </a>
        </div>

      </div>
    </div>

    @endforeach

  </div>
</div>

@endsection
