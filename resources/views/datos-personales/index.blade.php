@extends('layouts.app')

@section('content')
<form action="{{ route('datos-personales.store') }}" method="POST" id="formUser" autocomplete="on">
    @csrf
    <div class="card">

        <div class="card-body row">
            <div class="fw-bold border-bottom pb-2 mb-3">DATOS PERSONALES</div>
            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user"></i>
                    </div>
                    <input name="apellidos" value="{{ old('apellidos',$user->apellidos) }}" type="text" class="form-control @error('apellidos') is-invalid @enderror" autofocus required>
                    <label>Apellidos<i class="text-danger">*</i></label>
                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user"></i>
                    </div>
                    <input name="nombres" value="{{ old('nombres',$user->nombres) }}" type="text" class="form-control @error('nombres') is-invalid @enderror" required>
                    <label>Nombres<i class="text-danger">*</i></label>
                    @error('nombres')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-identification-card"></i>
                    </div>
                    <input id="identificacion" name="identificacion" value="{{ old('identificacion',$user->identificacion) }}" type="number" min="0" class="form-control @error('identificacion') is-invalid @enderror" required>
                    <label>Identificación<i class="text-danger">*</i></label>
                    @error('identificacion')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-map-pin"></i>
                    </div>
                    <input name="provincia" value="{{ old('provincia',$user->provincia) }}" type="text" class="form-control @error('provincia') is-invalid @enderror" required>
                    <label>Provincia<i class="text-danger">*</i></label>
                    @error('provincia')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-map-pin-line"></i>
                    </div>
                    <input name="canton" value="{{ old('canton',$user->canton) }}" type="text" class="form-control @error('canton') is-invalid @enderror" required>
                    <label>Cantón<i class="text-danger">*</i></label>
                    @error('canton')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-map-trifold"></i>
                    </div>
                    <input name="parroquia" value="{{ old('parroquia',$user->parroquia) }}" type="text" class="form-control @error('parroquia') is-invalid @enderror" required>
                    <label>Parroquia<i class="text-danger">*</i></label>
                    @error('parroquia')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-compass"></i>
                    </div>
                    <input name="recinto" value="{{ old('recinto',$user->recinto) }}" type="text" class="form-control @error('recinto') is-invalid @enderror" required>
                    <label>Recinto<i class="text-danger">*</i></label>
                    @error('recinto')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-airplane"></i>
                    </div>
                    <input name="direccion" value="{{ old('direccion',$user->direccion) }}" type="text" class="form-control @error('direccion') is-invalid @enderror" required>
                    <label>Dirección<i class="text-danger">*</i></label>
                    @error('direccion')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-phone-call"></i>
                    </div>
                    <input name="telefono" value="{{ old('telefono',$user->telefono) }}" type="tel" class="form-control @error('telefono') is-invalid @enderror" >
                    <label>Teléfono</label>
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-device-mobile"></i>
                    </div>
                    <input name="celular" value="{{ old('celular',$user->celular) }}" type="tel" class="form-control @error('celular') is-invalid @enderror" >
                    <label>Celular</label>
                    @error('celular')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-airplane-in-flight"></i>
                    </div>
                    <input name="lugar_nacimiento" value="{{ old('lugar_nacimiento',$user->lugar_nacimiento) }}" type="text" class="form-control @error('lugar_nacimiento') is-invalid @enderror" required>
                    <label>Lugar de nacimiento<i class="text-danger">*</i></label>
                    @error('lugar_nacimiento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-calendar"></i>
                    </div>
                    <input name="fecha_nacimiento" value="{{ old('fecha_nacimiento',$user->fecha_nacimiento) }}" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" required>
                    <label>Fecha de nacimiento<i class="text-danger">*</i></label>
                    @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="nacionalidad" value="{{ old('nacionalidad',$user->nacionalidad) }}" type="text" class="form-control @error('nacionalidad') is-invalid @enderror" required>
                    <label>Nacionalidad<i class="text-danger">*</i></label>
                    @error('nacionalidad')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-2 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-list"></i>
                    </div>

                    <select name="estado_civil" class="form-select @error('estado_civil') is-invalid @enderror" required>
                        <option value=""></option>
                        <option value="SOLTERO" {{ old('estado_civil',$user->estado_civil)=='SOLTERO'?'selected':'' }}>SOLTERO</option>
                        <option value="CASADO" {{ old('estado_civil',$user->estado_civil)=='CASADO'?'selected':'' }}>CASADO</option>
                        <option value="DIVORCIADO" {{ old('estado_civil',$user->estado_civil)=='DIVORCIADO'?'selected':'' }}>DIVORCIADO</option>
                        <option value="VIUDO" {{ old('estado_civil',$user->estado_civil)=='VIUDO'?'selected':'' }}>VIUDO</option>
                        <option value="UNIÓN LIBRE" {{ old('estado_civil',$user->estado_civil)=='UNIÓN LIBRE'?'selected':'' }}>UNIÓN LIBRE</option>
                    </select>
                    <label>Estado civil<i class="text-danger">*</i></label>
                    @error('estado_civil')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-switch"></i>
                    </div>
                    <select class="form-select @error('sexo') is-invalid @enderror" name="sexo" required>
                        <option value=""></option>
                        <option value="HOMBRE" {{ old('sexo',$user->sexo)=='HOMBRE'?'selected':'' }}>HOMBRE</option>
                        <option value="MUJER" {{ old('sexo',$user->sexo)=='MUJER'?'selected':'' }}>MUJER</option>
                    </select>
                    <label>Sexo<i class="text-danger">*</i></label>
                    @error('sexo')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-calendar"></i>
                    </div>
                    <input name="fecha_ingreso" value="{{ old('fecha_ingreso',$user->fecha_ingreso) }}" type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror" required>
                    <label>Fecha de ingreso al ISTVL<i class="text-danger">*</i></label>
                    @error('fecha_ingreso')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-2 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-user-switch"></i>
                    </div>
                    <select class="form-select @error('etnia') is-invalid @enderror" name="etnia" required>
                        <option value=""></option>
                        <option value="Mestizos" {{ old('etnia',$user->etnia)=='Mestizos'?'selected':'' }}>Mestizos</option>
                        <option value="Blancos" {{ old('etnia',$user->etnia)=='Blancos'?'selected':'' }}>Blancos</option>
                        <option value="Indígenas" {{ old('etnia',$user->etnia)=='Indígenas'?'selected':'' }}>Indígenas</option>
                        <option value="Mulatos" {{ old('etnia',$user->etnia)=='Mulatos'?'selected':'' }}>Mulatos</option>
                        <option value="Negros" {{ old('etnia',$user->etnia)=='Negros'?'selected':'' }}>Negros</option>
                        <option value="Otros" {{ old('etnia',$user->etnia)=='Otros'?'selected':'' }}>Otros</option>

                    </select>
                    <label>ETNIA<i class="text-danger">*</i></label>
                    @error('etnia')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-toggle-left"></i>
                    </div>
                    <select class="form-select @error('discapacidad') is-invalid @enderror" name="discapacidad" required>
                        <option value=""></option>
                        <option value="SI" {{ old('discapacidad',$user->discapacidad)=='SI'?'selected':'' }}>SI</option>
                        <option value="NO" {{ old('discapacidad',$user->discapacidad)=='NO'?'selected':'' }}>NO</option>
                    </select>

                    <label>¿TIENE DISCAPACIDAD?<i class="text-danger">*</i></label>
                    @error('discapacidad')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="tipo_discacipacidad" value="{{ old('tipo_discacipacidad',$user->tipo_discacipacidad) }}" type="text" class="form-control @error('tipo_discacipacidad') is-invalid @enderror">
                    <label>Tipo de discapacidad</label>
                    @error('tipo_discacipacidad')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="porcentaje_discapacidad" value="{{ old('porcentaje_discapacidad',$user->porcentaje_discapacidad) }}" type="text" class="form-control @error('porcentaje_discapacidad') is-invalid @enderror">
                    <label>Porcentaje de discapacidad</label>
                    @error('porcentaje_discapacidad')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="numero_miembros_familia" value="{{ old('numero_miembros_familia',$user->numero_miembros_familia) }}" type="text" class="form-control @error('numero_miembros_familia') is-invalid @enderror" required>
                    <label>Número de miembros de la familia<i class="text-danger">*</i></label>
                    @error('numero_miembros_familia')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="tipo_sangre" value="{{ old('tipo_sangre',$user->tipo_sangre) }}" type="text" class="form-control @error('tipo_sangre') is-invalid @enderror" required>
                    <label>Tipo de sangre</label>
                    @error('tipo_sangre')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>


            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="departamento" value="{{ old('departamento',$user->departamento) }}" type="text" class="form-control @error('departamento') is-invalid @enderror" required>
                    <label>¿A QUE DEPARTAMENTO PERTENECE?<i class="text-danger">*</i></label>
                    @error('departamento')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="rol" value="{{ old('rol',$user->rol) }}" type="text" class="form-control @error('rol') is-invalid @enderror" required>
                    <label>¿QUE ROL CUMPLE?<i class="text-danger">*</i></label>
                    @error('rol')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-flag"></i>
                    </div>
                    <input name="experiencia" value="{{ old('experiencia',$user->experiencia) }}" type="number" class="form-control @error('experiencia') is-invalid @enderror" required>
                    <label>CUANTOS AÑOS DE EXPERIENCIA EN DOCENCIA CUMPLE?<i class="text-danger">*</i></label>
                    @error('experiencia')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>


<div class="card">

    <div class="card-body row">
        <div class="col-md-6 mb-1">
            <p>Foto personal</p>
            <div class="file-loading">
                <input type="file" name="foto" id="foto" class="file-input form-control @error('foto') is-invalid @enderror" accept="image/png, image/jpg, image/jpeg">
                @error('foto')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>


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

        $('#formUser').validate({
            rules: {
                identificacion: {
                    remote: {
                        url: "{{ route('validarec') }}",
                        type: "post",
                        data: {
                            identificacion: function() {
                                return $( "#identificacion" ).val();
                            },
                            tipo:function(){
                                return $( "#identificacion" ).val();
                            }
                        }
                    }
                }
            },
            messages:{
                identificacion: {
                    remote: "Identificación incorrecta"
                }
            }
        });

    </script>

<script>


    var url_foto_ver = "{{ route('datos-personales.ver-archivo',['id'=>$user->id,'tipo'=>'foto']) }}";
    var url_foto_descarga = "{{ route('datos-personales.descargar-archivo',['id'=>$user->id,'tipo'=>'foto']) }}";

    $("#foto").fileinput({
        initialPreview: [url_foto_ver],
        initialPreviewAsData: true,
        initialPreviewShowDelete:false,
        initialPreviewConfig: [
            {downloadUrl: url_foto_descarga},
        ],
        uploadUrl: "{{ route('datos-personales.actualizar-identificacion-foto') }}",
        allowedFileTypes: ["image"],
        maxImageWidth: 520,
        maxImageHeight: 340,
        resizePreference: 'height',
        maxFileCount: 1,
        resizeImage: true,
        // resizeIfSizeMoreThan: 1000,
        language: "es",
        theme: "fa6",
        browseLabel: 'Foto personal',
        showRemove: false,
        showClose: false,
        uploadExtraData: {
            'id': '{{ $user->id }}',
            'tipo':'foto'
        }
    });


    </script>
@endpush
@endsection
