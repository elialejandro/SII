
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
      h3{
        text-align: center;
      }
      h5{
        text-align: center;
      }
      p{

        text-align: justify;
      }
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th{
        padding: 5px;
        text-align: center;
      }

       td {
        padding: 5px;
        text-align: left;
}

    </style>


  </head>
  <body>
  <h3>PROTOCOLO DEL PROYECTO (CI-02/2017)</h3>
  <h5>NOMBRE DE LA INSTITUCIÓN: Instituto Tecnológica de Tuxtla Gutierrez  </h5>
  <br>
  <p>Titutlo del proyecto:</p>
  <p>{{$protocolo->titulo}}</p>

  <h3>1. DESCRIPCIÓN DEL PROYECTO</h3>
 <article>
  <p><b>1.1 Resumen</b></p>
  <p>{{$protocolo->resumen}}</p>
 </article>
 <article>
  <p><b>1.2 Introducción</b></p>
  <p>{{$protocolo->introduccion}}</p>
</article>
 <article>
  <p><b>1.3 Antecedentes</b></p>
  <p>{{$protocolo->antecedentes}}</p>
</article>
 <article>
  <p><b>1.4 Marco teórico</b></p>
  <p>{{$protocolo->marco_teorico}}</p>
</article>
 <article>
  <p><b>1.5 Objetivos</b></p>
  <p>°{{$protocolo->objetivo_general}}</p>
  <p>°{{$protocolo->objetivos_especificos}}</p>
</article>

@php
  $listaa = "<ol>";
  foreach ($entregablesa as $entregable) {
    $listaa .= "<li>$entregable->descripcion: $entregable->cuantos</li>";
  }
  $listaa . "</ol>";

  $listah = "<ol>";
  foreach ($entregablesh as $entregable) {
    $listah .= "<li>$entregable->descripcion: $entregable->cuantos</li>";
  }
  $listah . "</ol>";
@endphp


<table style="width:100%">
  <tr>
  <th colspan="2">PRODUCTOS ESNTREGABLES</sth>
  </tr>
  <tr>
    <th>Cotribucion a la Formacion de Recursos Humanos</th>
    <th>Productividad Académica</th>
    </tr>
  <tr>
    <td>{!!$listah!!}</td>
    <td>{!!$listaa!!}</td>
  </tr>
</table>


{{-- <table border="1">
  <thead >
    <tr>

    </tr>
    <tr>
    <th>Cotribucion a la Formacion de Recursos Humanos</th>
    <th>Productividad Académica</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{!!$listaa!!}</td>
    <td>{!!$listah!!}</td>
    </tr>
  </tbody>
</table> --}}

<article>
 <p><b>1.7 Impacto o beneficio en la solución a un problema relacionado con el sector productivo o la generación  del conocimiento científico o tecnológico. </b></p>
 <p>{{$protocolo->impacto_beneficio}}</p>
</article>
<article>
 <p><b>1.8 Metodologia</b></p>
 <p>{{$protocolo->metodologia}}</p>
</article>
<p><b>1.10 Vinculación</b></p>
<p>{{$protocolo->vinculacion}}</p>
</article>
<p><b>1.11 Referencias</b></p>
<p>{{$protocolo->referencias}}</p>
</article>


  </body>
</html>
