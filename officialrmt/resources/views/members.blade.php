@extends('layouts.main')

@section('container')
    <!-- Member -->
    <section id="members">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2 class="fw-bold">Member of Remaja Masjid Thoyyibah</h2>
            </div>
          </div>
          <div class="row text-center mb-3">
            <div class="col">
              <h2 class="fw-bold">2020 - 2021 Generation</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            @foreach ($members as $member)
              <div class="col-md-3 mb-5">
                <div class="card">
                    <img src="img/member/{{ $member["image"] }}" class="card-img-top" alt="RMT Member" />
                    <div class="card-body">
                      <p class="card-text mb-0 fw-bold text-center">{{ $member["nama"] }}</p>
                      <p class="text-center">{{ $member["jabatan"] }}</p>
                      <div class="boxbesar clearfix">
                        <a href="{{ $member["instagram"] }}" target="_blank">
                          <div class="box1">
                            <i class="bi bi-instagram link-light"></i>
                          </div>
                        </a>
                        <div class="box2">
                          <a href="{{ $member["facebook"] }}" target="_blank"><i class="bi bi-facebook link-light"></i></a>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    <!-- End Member -->
@endsection
