<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Preaviso Terminación Contrato</title>
    <style>
        table.minimalistBlack {
            border: 3px solid #000000;
            width: 100%;
            text-align: left;
            border-collapse: collapse;
        }

        table.minimalistBlack td,
        table.minimalistBlack th {
            border: 1px solid #000000;
            padding: 5px 4px;
        }

        table.minimalistBlack tbody td {
            font-size: 13px;
        }

        table.minimalistBlack tbody tr {
            text-align: center;
        }

        table.minimalistBlack thead {
            background: #CFCFCF;
            background: -moz-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            background: -webkit-linear-gradient(top, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            background: linear-gradient(to bottom, #dbdbdb 0%, #d3d3d3 66%, #CFCFCF 100%);
            border-bottom: 3px solid #000000;
        }

        table.minimalistBlack thead th {
            font-size: 15px;
            font-weight: bold;
            color: #000000;
            text-align: center;
        }
        p{
            text-align:justify
        }
    </style>
</head>

<body style="padding:50px;">
<p style="text-transform:uppercase;">SEÑOR(a).
<br>
{{-- {{$empleado->nombres}} {{$empleado->apellidos}} --}}
<br>
{{-- {{$empleado->cargo->nombre}} --}}
<br>
{{-- {{$empresa->razon_social}} --}}
<br>
E.S.M
<br>
Asunto: Preaviso terminación de contrato</p>    

<p style="margin-top:50px;margin-bottom:50px;">Cordial saludo,</p>

<p>De manera atenta, le comunicamos que el contrato de trabajo a término fijo inferior a un año suscrito por usted y 
    <strong style="text-transform:uppercase"></strong>, el día , 
    con una duración de  meses, el cual se ha venido prorrogando, 
    finaliza el próximo  y en esta ocasión no será prorrogado y en consecuencia se dará por terminado sin perjuicio de que llegada
     la fecha de terminación, las partes acuerden lo contrario. Lo anterior con fundamento en lo preceptuado en el numeral 1° 
     del artículo 46 del código sustantivo del trabajo, que dice:</p>

<p><em>“1. Si antes de la fecha de vencimiento del término estipulado, ninguna de las partes avisare por escrito a la otra su determinación de no prorrogar el contrato, con una antelación no inferior a treinta (30) días, éste se entenderá renovado por un período igual al inicialmente pactado y así sucesivamente”.</em></p>

<p>CONDICIONES GENERALES:
    
La duración de la relación de aprendizaje será de seis (6) meses, a un máximo de un (1) año 
Horario laboral no debe obstaculizar su jornada electiva, ni comprometer los días sábados, ya que el estudiante debe realizar trabajos e investigaciones académicas.  
Las funciones laborales deben ir acorde con la carrera para la cual se está capacitando.  
Favor enviar el contrato de aprendizaje para la firma respectiva por parte de la Institución.   
La materia de Práctica Profesional en el nivel de Técnica Profesional en Procesos de Manufactura NO es un requisito para obtener el título profesional. Sin embargo, es de libre elección que el estudiante realice su práctica. 
Cualquier sugerencia al respecto, favor comunicarse con la oficina del Centro de Extensión y Proyección Social (extension@itc.edu.co) o al WhatsApp 3022836946 teléfono 344 30 00 Ext: 111 –129.
</p>

<table style="width:100%;margin-top:50px;">
    <tr>
        <td style="width:50%;">
            <p>Cordialmente,<br><br><br><br><br>
            ___________________________<br>
            {{-- {{$empresa->razon_social}} --}}
            <br>
            {{-- {{ number_format($empresa->numero_documento,0,",",".")}}-{{$empresa->digito_verificacion}} --}}

            </p>
        </td>
        <td style="width:50%;">
            <p>Recibí Conforme,<br><br><br><br><br>
            ___________________________<br>
            {{-- {{$empleado->nombres}} {{$empleado->apellidos}}<br> --}}
            {{-- C.C.: {{ number_format($empleado->identidad,0,",",".")}} --}}

        </p></td>
    </tr>
</table>
</body>

</html>