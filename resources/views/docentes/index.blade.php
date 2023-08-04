@extends('layouts.app')
@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection

@section('content')
<form action=" {{ route('docentes.store') }}"  method="POST"  id="formUser" autocomplete="off">
    @csrf
    
    <div class="card">
        <div class="card-header">
            Registrar por correo
        </div>
        <div class="card-body">
            <div class="col-md-4 mb-1">
                <div class="form-floating form-control-feedback form-control-feedback-start">
                    <div class="form-control-feedback-icon">
                        <i class="ph-envelope-simple"></i>
                    </div>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" autofocus>
                    <label>Email</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-primary">Registrar</button>
            
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
                }
            },
            messages:{
                identificacion: {
                    remote: "Identificación incorrecta"
                }
            }
        });
         
    </script>
@endpush
@endsection
