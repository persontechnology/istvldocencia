@extends('layouts.app')

@section('breadcrumbs')
{{ Breadcrumbs::render('usuarios.index') }}
@endsection


@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>

@push('scripts')
    {{ $dataTable->scripts() }}
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
@endpush
@endsection
