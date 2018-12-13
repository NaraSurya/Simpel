@extends('layout.layout_tu')
@section('title','list_pembayaran')

@section('style_custom')

<style>
.img-custom{
  height: 100px;
  weight: 100px;
}


</style>
@endsection
    

@section('content1')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-9 my-2 font-color-grey ">
            <h3 class="display-6 mr-5 ">Riwayat Pembayaran</h3>
        </div>
    </div>
    <div class="row my-5 p-3 bg-white mr-5">
        <div class="col-12">
            <div class="mb-3 text-center">  
                <span class="number"> 1 </span> 
                <span style="font-size:18px;">Data Siswa</span> 
            </div>
        </div>
        <div class="col-sm-12 col-md-2 text-center">
            <a href="/storage/profile_siswa/{{$siswa->pict}}" target="_blank">
                <img src="/storage/profile_siswa/{{$siswa->pict}}"   class="rounded" alt="logo_simple"  width="125px" height="150px">
            </a>
        </div>
        <div class="col-sm-12 col-md-10">
            <div class="row">
                <div class="col-sm-12 col-md-6 border">
                    <h6 class="mt-3 font-color-grey">Nama</h6>
                    <h5 class=" mb-3">{{$siswa->nama}}</h5>
                </div>
                <div class="col-sm-12 col-md-2 border">
                    <h6 class="mt-3 font-color-grey">Nis</h6>
                    <h5 class=" mb-3">{{$siswa->nis}}</h5>
                </div>
                <div class="col-sm-12 col-md-2 border">
                    <h6 class="mt-3 font-color-grey">No Telepon</h6>
                    <h5 class=" mb-3">{{$siswa->no_tlp}}</h5>
                </div>
                <div class="col-sm-12 col-md-2 border">
                    <h6 class="mt-3 font-color-grey">Agama</h6>
                    <h5 class=" mb-3">{{$siswa->agama->agama}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-8 border">
                    <h6 class="mt-3 font-color-grey">Alamat</h6>
                    <h5 class=" mb-3">{{$siswa->alamat}}</h5>
                </div>
                <div class="col-sm-12 col-md-2 border">
                    <h6 class="mt-3 font-color-grey">tanggal lahir</h6>
                    <h5 class=" mb-3">{{$siswa->tgl_lahir}}</h5>
                </div>
                <div class="col-sm-12 col-md-2 border">
                    <h6 class="mt-3 font-color-grey">jenis kelamin</h6>
                    <h5 class=" mb-3">{{$siswa->jenis_kelamin}}</h5>
                </div>
            </div>
        </div>
    </div>

<form action="/tu/pembayaran/store" method="GET">
  @csrf
  <input type="hidden" name="siswa_id" value="{{$siswa->id}}">
<table class="table table table-striped ">
        <thead class="text-center">
          <tr >
            <td>Periode/Bulan</td>
            <td>Juli</td>
            <td>Agustus</td>
            <td>September</td>
            <td>Oktober</td>
            <td>November</td>
            <td>Desember</td>
            <td>Januari</td>
            <td>Februari</td>
            <td>Maret</td>
            <td>April</td>
            <td>Mei</td>
            <td>Juni</td>
            <td>Keterangan</td>

          </tr>
        </thead>
        <tbody class="text-center">
          @foreach ( $siswa->periode->groupBy('id') as $periode )
          <tr>
              <td>{{ $periode[$loop->index]->tahun_ajaran}}</td>
                  @for ($i = 0; $i < $periode->count(); $i++)
                    <td class="text-center">
                        <div class="custom-control custom-checkbox">
                            <input class="form-check-input"  type="checkbox" value="" id="defaultCheck1" checked disabled> 
                        </div>
                    </td>
                  @endfor
                  @for ($i = $periode->count(); $i < 12; $i++)
                    <td class="text-center">
                        <div class="custom-control custom-checkbox">
                            <input class="form-check-input" type="checkbox"  name="cek[]" > 
                        </div>
                    </td>
                  @endfor 
                    
                  @if ($periode->count() == 12)
                      <div class="keterangan">
                          <td>Lunas</td>
                      </div>
                  @else
                      <div class="keterangan">
                          <td>Belum Lunas</td>
                      </div>
                  @endif

            </tr> 
            <input type="hidden" name="periode_id" value="{{$periode[$loop->index]->id}}">
          @endforeach
           
          
        </tbody>
      </table>
      <td> <button type="submit" class="btn button-blue"> Simpan </button></td>
</form>
@endsection

