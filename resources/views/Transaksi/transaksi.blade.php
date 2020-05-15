@extends('layouts.master')

@section('content')
{{-- <div class="panel-header panel-header-lg">
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-12">
      <div class="card card-chart">
        <div class="card-header">
            <div class="col-12">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
            <div class="panel-body1">
              <table class="table">
                <thead>
                  <tr>
                    <th>NAMA</th>
                    <th>TANGGAL</th>
                    <th>JAM</th>
                    <th>LAYANAN</th>
                    <th>AKSI</th>
                </tr>
                @foreach ($data_booking as $booking)
                <tr>
                    <td>{{$booking->nama}}</td>
                    <td>{{$booking->tgl}}</td>
                    <td>{{$booking->jam}}</td>
                    <td>{{$booking->layanan}}</td>
                    <td>
                        <a href="/Adminbarber/{{$booking->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Mau di Hapus?')">Delete</a>
                    </td>
                </tr>    
                @endforeach
                 </tbody>
               </table>
               </div>
      </div>
    </div>
    </div>
  </div>
</div>
  </div>
</div>
    </div> --}}

    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="col-lg-6">
              <h4 class="card-title">Menu Transaksi</h4>
            </div>
            </div>
           
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" style="margin-top: 10dp;">
                  <thead class="text-primary">
                    <tr>
                      <th>NAMA</th>
                      <th>TANGGAL</th>
                      <th>JAM</th>
                      <th>LAYANAN</th>
                      <th>AKSI</th>
                  </tr>
                  </thead>
                  @foreach ($data_transaksi as $trans)
                  <tr>
                      <td>{{$trans->nama}}</td>
                      <td>{{$trans->tgl}}</td>
                      <td>{{$trans->jam}}</td>
                      <td>{{$trans->layanan}}</td>
                      <td>
                          <a href="/Transaksi/{{$trans->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this??')">Delete</a>
                      </td>
                  </tr>    
                  @endforeach
                   </tbody>
                </table>
            </div>
          </div>
        </div>


  
    
    @endsection


   