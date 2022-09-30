@extends('layouts.layout')

@section('content')
<div class="row">
  <div class="col-xl-6 col-sm-6">
    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('home')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>Dashboard </h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                    <span class="mdi mdi-account"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  
    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('catper')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>History Perjalanan</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-info">
                    <span class="mdi mdi-airplane"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="grid-margin stretch-card">
      <div class="card">
        <a href="{{route('catper.new')}}" style="text-decoration: none; color: #fff;">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h4>Mulai Perjalanan</h4>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-warning">
                    <span class="mdi mdi-grease-pencil"></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="col-xl-6 col-sm-6">
    <div class="grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Destinasi Pilihan</h4>
        <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
          <div class="item">
            <img src="{{asset('attribute/RajaAmpat.png')}}" alt="" style="height: 50vh;">
            <h5 class="mt-2">Raja Ampat</h5>
          </div>
          <div class="item">
            <img src="{{asset('attribute/DEPOK.png')}}" alt="" style="height: 50vh;">
            <h5 class="mt-2">Depok</h5>
          </div>
          <div class="item">
            <img src="{{asset('attribute/JAWA.png')}}" alt="" style="height: 50vh;">
            <h5 class="mt-2">Jawa</h5>
          </div>
          <div class="item">
            <img src="{{asset('attribute/CANADA.png')}}" alt="" style="height: 50vh;">
            <h5 class="mt-2">BUKAN INDONESIA</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>

  {{-- API DATA COVID (|TIDAK JADI|) --}}
  {{-- <div class="container">
    <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Sembuh</th>
                <th scope="col">Meninggal</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($jumlah as $datas)   
              <tr>
                <th scope="row">1</th>
                <td>{{ $datas['attributes']['Provinsi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
              </tr>
            @endforeach 
            </tbody>
          </table>
</div> --}}

  
@endsection


