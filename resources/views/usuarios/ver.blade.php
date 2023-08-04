@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                DATOS PERSONALES
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ route('usuarios.datosPersonalesPdf',$user->id) }}" allowfullscreen></iframe>
                          </div>
                    </div>
                    <div class="col">
                        <a href="{{ route('usuarios.datosPersonalesPdf',$user->id) }}" target="_blank" class="btn btn-primary flex-column py-2 mx-2">
                            <i class="ph-download-simple ph-2x mb-1"></i>
                            Descargar
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Titulos
            </div>
            <div class="card-body">
                @if ($user->certificados->count()>0)
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">TÍTULO</th>
                                <th scope="col">NIVEL</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">DOCUMENTO</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->titulos as $item)
                            <tr class="">
                                <td scope="row">{{ $item->nombre }}</td>
                                <td scope="row">{{ $item->nivel }}</td>
                                <td scope="row">{{ $item->created_at->format('m-d-Y') }}</td>
                                <td>
                                    <a href="{{ Storage::url($item->archivo) }}" target="_blank" class="btn link-primary border-primary">
                                        <i class="ph ph-file-pdf me-2"></i>
                                        Descargar
                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <strong>EL DOCENTE NO TIENE TITULOS</strong>
                </div>
                @endif

            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Certificados
            </div>
            <div class="card-body">
                @if ($user->certificados->count()>0)
                <div class="table-responsive">
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">FECHA</th>
                                <th scope="col">DOCUMENTO</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->certificados as $cer)
                            <tr class="">
                                <td scope="row">{{ $cer->nombre }}</td>
                                <td scope="row">{{ $item->created_at->format('m-d-Y') }}</td>
                                <td>
                                    <a href="{{ Storage::url($cer->archivo) }}" target="_blank" class="btn link-primary border-primary">
                                        <i class="ph ph-file-pdf me-2"></i>
                                        Descargar
                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
                @else
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <strong>EL DOCENTE NO TIENE CERTIFICADOS</strong>
                </div>

                <script>
                  var alertList = document.querySelectorAll('.alert');
                  alertList.forEach(function (alert) {
                    new bootstrap.Alert(alert)
                  })
                </script>

                @endif
            </div>
        </div>
    </div>
</div>
@endsection
