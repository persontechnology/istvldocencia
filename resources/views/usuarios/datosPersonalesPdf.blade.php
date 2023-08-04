<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Documento Datos Personales</title>
</head>
<style>

table {
  border-collapse: separate;
  border-spacing: 0;
  overflow: hidden;
  width: 100%;
}
th {
  background-color: #4c70e6;
  color: #FFFFFF;
}
th, td {
  padding: 10px;
  border: 1px solid #4c70e6;
}
tr:nth-child(even) {
  background-color: #f2f2f2;
}
/* required css to make rounded table (below) */
tr:first-child th:first-child {
  border-top-left-radius: 10px;
}
tr:first-child th:last-child {
  border-top-right-radius: 10px;
}
tr:last-child td:first-child {
  border-bottom-left-radius: 10px;
}
tr:last-child td:last-child {
  border-bottom-right-radius: 10px;
}

     .fotoEvidencia {
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 110px;
        width: 100px;
        
    } 
   


    #imagenborde{
        border-left:1px solid #ffffff;
        border-top:1px solid #ffffff;
    }

    
</style>


<body>
  <br>
    <table>
        <tbody>
            <tr >
                <td id="imagenborde">
                    <div class="fotoEvidencia" style="margin: 1em; background: url({!! public_path( $user->foto_link) !!});"></div>
                </td>
                <td colspan="2">
                    <strong>NOMBRE: </strong>{{ $user->apellidos_nombres }}
                </td>
            </tr>
            
            <tr>
                <td>
                        <div><strong>CI:</strong> {{ $user->identificacion }}</div>
                </td>
                <td colspan="2" ><strong>CORREO ELECTRÓNICO: </strong>{{ $user->email }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 196.5px; height: 18px;">
                    <div>
                        <div><strong>TELÉFONO: </strong>{{ $user->telefono }}</div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 1px;" colspan="2">
                    <div>
                        <div><strong>CELULAR: </strong>{{ $user->celular }}</div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;<b>PROVINCIA</b></td>
                <td style="width: 196.5px; height: 18px;">&nbsp;<b>CANTÓN</b></td>
                <td style="width: 90.1562px; height: 50px;">
                    <div>
                        <div><b>PARROQUIA</b></div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->provincia }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->canton }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->parroquia }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">
                    <div>
                        <div><b>RECINTO</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 50px;">
                    <div>
                        <div><b>DIRECCIÓN</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 18px;">
                    <div>
                        <div><b>LUGAR DE NACIMIENTO</b></div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->recinto }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->direccion }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->lugar_nacimiento }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 60px;">
                    <div>
                        <div><b>FECHA DE NACIMIENTO</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 50px;">
                    <div>
                        <div><b>NACIONALIDAD</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 50px;">
                    <div>
                        <div><b>ESTADO CIVIL</b></div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->fecha_nacimiento }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->nacionalidad }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->estado_civil }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 50px;">
                    <div>
                        <div><b>SEXO</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 18px;">
                    <div>
                        <div><b>FECHA DE INGRESO</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 18px;">
                    <div>
                        <div><b>ETNIA</b></div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->sexo }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->fecha_ingreso }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->etnia }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 60px;">
                    <div>
                        <div><b>¿TIENE DISCAPACIDAD?</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 50px;">
                    <div>
                        <div><b>TIPO DE DISCAPACIDAD</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 50px;">
                    <div>
                        <div><b>% DE DISCAPACIDAD</b></div>
                    </div>
                </td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 50px;">&nbsp;{{ $user->discapacidad }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->tipo_discacipacidad }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->porcentaje_discapacidad }}</td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 50px;">
                    <div>
                        <div><b>NÚMERO DE MIENBROS DE LA FAMILIA</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 50px;">
                    <div>
                        <div><b>TIPO DE SANGRE</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 50px;">&nbsp;<b>ESTADO</b></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->numero_miembros_familia }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->tipo_sangre }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->estado }}</td>
            </tr>



            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 50px;">
                    <div>
                        <div><b>DEPARTAMENTO</b></div>
                    </div>
                </td>
                <td style="width: 196.5px; height: 50px;">
                    <div>
                        <div><b>ROL</b></div>
                    </div>
                </td>
                <td style="width: 90.1562px; height: 50px;">&nbsp;<b>AÑOS DE EXPERIENCIA</b></td>
            </tr>
            <tr style="height: 18px;">
                <td style="width: 163.344px; height: 18px;">&nbsp;{{ $user->departamento }}</td>
                <td style="width: 196.5px; height: 18px;">&nbsp;{{ $user->rol }}</td>
                <td style="width: 90.1562px; height: 18px;">&nbsp;{{ $user->experiencia }}</td>
            </tr>

        </tbody>

    </table>



<p>TITULOS</p>

<table class="table table-primary">
    <thead>
        <tr>
            <th style="width: 90.1562px; height: 50px;">&nbsp;<b>TÍTULO</b></th>
            <th style="width: 90.1562px; height: 50px;">&nbsp;<b>NIVEL</b></th>
            <th style="width: 91.1562px; height: 50px;">&nbsp;<b>FECHA</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user->titulos as $item)
        <tr class="">
            <td style="width: 163.344px; height: 18px;">&nbsp;{{ $item->nombre }}</td>
            <td style="width: 163.344px; height: 18px;">&nbsp;{{ $item->nivel }}</td>
            <td style="width: 163.344px; height: 18px;">&nbsp;{{ $item->created_at->format('m-d-Y') }}</td>
        </tr>
        @endforeach


    </tbody>
</table>
<hr>
<p>CERTIFICADOS</p>
<hr>
<table class="table table-primary">
    <thead>
        <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($user->certificados as $cer)
        <tr class="">
            <td scope="row">{{ $cer->nombre }}</td>
            <td scope="row">{{ $item->created_at->format('m-d-Y') }}</td>
        </tr>
        @endforeach


    </tbody>
</table>
</body>

</html>
