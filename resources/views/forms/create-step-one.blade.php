@extends('layout.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.one.post') }}" method="POST">
                @csrf
  
                <div class="card">
                    <div class="card-header">Step 1: Informasi Pribadi</div>
  
                    <div class="card-body">
  
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
  
                            <div class="form-group">
                                <label for="title">Nama Lengkap :</label>
                                <input type="text" value="{{ $form->name ?? '' }}" class="form-control" id="namaLengkap"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="nomor_whatsapp">Nomor WhatsApp :</label>
                                <input type="text"  value="{{{ $form->nomor_whatsapp ?? '' }}}" class="form-control" id="nomorWhatsapp" name="nomor_whatsapp"/>
                            </div>
   
                            <div class="form-group">
                                <label for="alamat_lengkap">Alamat Lengkap :</label>
                                <textarea type="text"  class="form-control" id="alamatLengkap" name="alamat_lengkap">{{{ $form->alamat_lengkap ?? '' }}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="tempat_tgl_lahir">Tempat, Tanggal Lahir :</label>
                                <input type="text"  value="{{{ $form->tempat_tgl_lahir ?? '' }}}" class="form-control" id="tempatTglLahir" name="tempat_tgl_lahir"/>
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan :</label>
                                <input type="text"  value="{{{ $form->pekerjaan ?? '' }}}" class="form-control" id="pekerjaan" name="pekerjaan"/>
                            </div>
   
                          
                    </div>
  
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection