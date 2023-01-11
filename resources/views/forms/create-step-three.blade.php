@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Nama Lengkap:</td>
                                    <td><strong>{{$form->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Nomor Whatsapp:</td>
                                    <td><strong>{{$product->nomor_whatsapp}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat Lengkap:</td>
                                    <td><strong>{{$form->alamat_lengkap}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir:</td>
                                    <td><strong>{{$form->tempat_tgl_lahir}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan:</td>
                                    <td><strong>{{$form->pekerjaan}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Nama Usaha:</td>
                                    <td><strong>{{$form->nama_usaha}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Bukti PO:</td>
                                    <td><strong>{{$form->bukti_po}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Invoice:</td>
                                    <td><strong>{{$form->invoice}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('forms.create.step.two') }}" class="btn btn-danger pull-right">Sebelumnya</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Kirim Form</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection