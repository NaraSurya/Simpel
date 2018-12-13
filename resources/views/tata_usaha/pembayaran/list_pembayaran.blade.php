@extends('layout.layout_tu')
@section('title','list_pembayaran')


    

@section('content1')
<form action="/tu/pembayaran/store" method="GET">
  @csrf
  <input type="hidden" name="siswa_id" value="{{$details->first()->siswa_id}}">
<table class="table table-bordered ">

  id :  {{$details[0]->siswa_id}}
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

          </tr>
        </thead>
        <tbody class="text-center">
         
          <tr>
              <td>{{ $periodes->tahun_ajaran }}</td>
                  @for ($i = 0; $i < $details->count(); $i++)
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked disabled>
                    </td>
                  @endfor
                  @for ($i = $details->count(); $i < 12; $i++)
                    <td class="text-center">
                        <input class="form-check-input" type="checkbox"  name="cek[]" >
                    </td>
                  @endfor 
            </tr> 
        
           
          
        </tbody>
      </table>
      <td> <button type="submit" class="btn button-blue"> Simpan </button></td>
</form>
@endsection

