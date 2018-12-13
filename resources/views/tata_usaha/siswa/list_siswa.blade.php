@extends('layout.layout_tu')
@section('title','list_siswa')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-3 text-center ">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$siswas->where('verified','1')->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Siswa Aktif </h6>
                        <p class="font-color-grey">ada siswa lulus ?</p>
                        <a href="#" class="btn btn-primary">Luluskan siswa</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="card w-75 h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title display-4">{{$siswas->where('verified','0')->count()}}</h5>
                        <h6 class="card-subtitle mb-5 text-muted">Siswa Belum Terverifikasi </h6>
                        <p class="font-color-grey">verifikasikan siswa baru</p>
                        <a href="/tu/validate-siswa-baru" class="btn btn-primary">verifikasi siswa</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="w-100 h-100 bg-white align-middle text-center">
                    <canvas id="myChart" width="400" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-9">
                <table class="table table-borderless text-center">
                    <thead>
                        <tr>
                            <th scope="col" class="font-color-grey"></th>
                            <th scope="col" class="font-color-grey">NIS</th>
                            <th scope="col" class="font-color-grey">Nama</th>
                            <th scope="col" class="font-color-grey">Email</th>
                            <th scope="col" class="font-color-grey"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas->where('verified','1') as $siswa)
                            <tr class="bg-white my-5 align-middle">
                                <td class="font-raleway"> 
                                    <a href="/storage/profile_siswa/{{$siswa->pict}}" target="_blank">
                                        <img src="/storage/profile_siswa/{{$siswa->pict}}"  class="rounded-circle" alt="logo_simple"  width="35px" height="35px">
                                    </a>
                                    
                                </td>
                                <td class="align-middle">{{ $siswa->nis }}</td>
                                <td class="align-middle">{{ $siswa->nama }}</td>
                                <td class="align-middle">{{ $siswa->email }}</td>
                                <td class="align-middle"><a href="/tu/siswa/{{$siswa->id}}" class=""><i class="fas fa-external-link-alt fa-lg"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-12 col-md-3 mb-5">
                <div class="card w-80">
                    <div class="card-body text-center">
                        <div class="mx-5">
                            <h5 class="card-title display-4 mt-5">{{$jumlah_siswa['X']}}</h5>
                            <h6 class="card-subtitle mb-5 text-muted">Siswa kelas X </h6>
                            <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                        </div>
                        <hr>
                        <div class="mx-5">
                            <h5 class="card-title display-4 mt-5">{{$jumlah_siswa['XI']}}</h5>
                            <h6 class="card-subtitle mb-5 text-muted">Siswa kelas XI </h6>
                            <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                        </div>
                        <hr>
                        <div class="mx-5">
                            <h5 class="card-title display-4 mt-5">{{$jumlah_siswa['XII']}}</h5>
                            <h6 class="card-subtitle mb-5 text-muted">Siswa kelas XII </h6>
                            <a href="#" class="btn btn-primary mb-3">lihat siswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script>
        
        let periodes =  {!! json_encode($tahun_periodes) !!};
        let jumlah_siswa = {!! json_encode($jumlah_siswa_periode) !!}
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: periodes,
                datasets: [{
                    label: "Jumlah siswa",
                    backgroundColor: ' rgb(76, 155, 251)',
                    borderColor: ' rgb(76, 155, 251)',
                    data: jumlah_siswa,
                }]
            },
            

            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
                
            }
        });
    </script>

@endsection