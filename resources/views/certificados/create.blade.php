@extends('layouts.app')


@section('content')
<form action="{{ route('certificados.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-header">
            Complete datos
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-1">
                    <div class="form-floating form-control-feedback form-control-feedback-start">
                        <div class="form-control-feedback-icon">
                            <i class="ph-user"></i>
                        </div>
                        <input name="nombre" value="{{ old('nombre') }}" type="text" class="form-control @error('nombre') is-invalid @enderror"  >
                        <label>Nombre de certificado</label>
                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 mb-1">
                    <div class="form-floating form-control-feedback form-control-feedback-start">
                        <div class="form-control-feedback-icon">
                            <i class="ph-calendar"></i>
                        </div>
                        <input name="fecha" value="{{ old('fecha') }}" type="date" class="form-control @error('fecha') is-invalid @enderror"  >
                        <label>Fecha</label>
                        @error('fecha')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 mb-1">
                    <p>Archivo PDF</p>
                    <div class="file-loading">
                        <input type="file" name="archivo" id="archivo" class="file-input form-control @error('archivo') is-invalid @enderror" accept="application/pdf">

                        @error('archivo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </div>
</form>



@push('scriptsHeader')
{{-- fileinput --}}
<link href="{{ asset('assets/js/vendor/uploaders/fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/plugins/buffer.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/plugins/filetype.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/plugins/piexif.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/plugins/sortable.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/fileinput.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/js/locale/es.js') }}"></script>
<script src="{{ asset('assets/js/vendor/uploaders/fileinput/themes/fa6/theme.min.js') }}"></script>
@endpush

@push('scripts')
    <script>

        $('#formUser').validate();

    </script>

<script>

    var nivel=$('#nivel').find(":selected").val();
    function cambiarNivel(arg){
        nivel=$(arg).val();
    }
    $("#archivo").fileinput({

        initialPreviewAsData: true,
        initialPreviewShowDelete:false,
        allowedFileExtensions: ["pdf"],
        maxFileCount: 1,
        resizeImage: true,
        language: "es",
        theme: "fa6",
        browseLabel: 'Archivo PDF',
        showRemove: false,
        showClose: false,
        showUpload:false,
        uploadExtraData: {
            'nivel':nivel
        }
    });


    </script>
@endpush
@endsection
