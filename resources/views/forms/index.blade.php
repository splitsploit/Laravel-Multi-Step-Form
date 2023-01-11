@extends('layout.default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Form</div>
  
                <div class="card-body">
                      
                    <a href="{{ route('forms.create.step.one') }}" class="btn btn-primary pull-right">Create Form</a>
  
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nomor WhatsApp</th>
                            <th scope="col">Alamat Lengkap</th>
                            <th scope="col">Tempat & Tanggal Lahir</th>
                            <th scope="col">Pekerjaan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($forms as $Form)
                            <tr>
                                <th scope="row">{{$Form->id}}</th>
                                <td>{{$Form->nama}}</td>
                                <td>{{$Form->nomor_whatasapp}}</td>
                                <td>{{$Form->alamat_lengkap}}</td>
                                <td>{{$Form->tempat_tgl_lahir}}</td>
                                <td>{{$form->pekerjaan }}</td>
                                <td>{{$Form->status ? 'Active' : 'DeActive'}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection