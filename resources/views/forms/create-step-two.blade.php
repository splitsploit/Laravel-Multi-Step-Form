@extends('layout.default')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('forms.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">Step 2: Informasi Usaha</div>
  
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
                                <label for="nama_usaha">Nama Usaha :</label>
                                <input type="text"  value="{{{ $form->nama_usaha ?? '' }}}" class="form-control" id="namaUsaha" name="nama_usaha"/>
                            </div>
  
                            <div class="form-group">
                                <label for="bukti_po">Bukti PO :</label>
                                <input type="text"  value="{{{ $product->bukti_po ?? '' }}}" class="form-control" id="buktiPo" name="bukti_po"/>
                            </div>

                            <div class="form-group">
                                <label for="invoice">Invoice :</label>
                                <input type="text"  value="{{{ $product->invoice ?? '' }}}" class="form-control" id="buktiPo" name="invoice"/>
                            </div>
  
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('forms.create.step.one') }}" class="btn btn-danger pull-right">Sebelumnya</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Selanjutnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection