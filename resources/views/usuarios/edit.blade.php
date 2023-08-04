@extends('layouts.app')



@section('content')
<form action="{{ route('usuarios.update',$user->id) }}" method="POST" id="formUser" autocomplete="off">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{ $user->id }}">
    <div class="card">

        <div class="card-body row">
            <div class="fw-bold border-bottom pb-2 mb-3">ESTADO</div>

            <div class="col-md-2 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-toggle-left"></i>
                    </div>
                    <select class="form-select @error('estado') is-invalid @enderror" name="estado" id="estado" required>
                        <option value=""></option>
                        <option value="ACTIVO" {{ old('estado',$user->estado)=='ACTIVO'?'selected':'' }}>ACTIVO</option>
                        <option value="INACTIVO" {{ old('estado',$user->estado)=='INACTIVO'?'selected':'' }}>INACTIVO</option>
                    </select>

                    <label for="estado">Estado<i class="text-danger">*</i></label>
                    @error('estado')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>

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
            },
            identificacion_conyuge: {
                remote: {
                    url: "{{ route('validarec') }}",
                    type: "post",
                    data: {
                        identificacion: function() {
                            return $( "#identificacion_conyuge" ).val();
                        },
                        tipo:function(){
                            return $( "#identificacion_conyuge" ).val();
                        }
                    }
                }
            },
            identificacion_representante: {
                remote: {
                    url: "{{ route('validarec') }}",
                    type: "post",
                    data: {
                        identificacion: function() {
                            return $( "#identificacion_representante" ).val();
                        },
                        tipo:function(){
                            return $( "#identificacion_representante" ).val();
                        }
                    }
                }
            }
        },
        messages:{
            identificacion: {
                remote: "Identificación incorrecta"
            },
            identificacion_conyuge: {
                remote: "Identificación incorrecta"
            },
            identificacion_representante: {
                remote: "Identificación  incorrecta"
            }
        }
    });

</script>
@endpush
@endsection
