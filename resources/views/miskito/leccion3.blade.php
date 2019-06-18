@extends('layouts.estilos')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Lección 3 - Conversacione(Dialogo)</h1>
    </div>
    <h2>aprendamos a interactuar con un dialogo en  Miskito?</h2>
    </div>
    </div>
    <p> </p>





    <script>
        var data = {}
        data.preguntas=[]
        data.respuestas=[]

        var selected={}
        $().ready(function(){
            @foreach($data->preguntas as $p)
                data.preguntas.push({id:'{{$p->id}}',text:'{{$p->text}}'})
            @endforeach
            @foreach($data->respuestas as $r)
                data.respuestas.push({id:'{{$r->id}}',text:'{{$r->text}}',id_pregunta:'{{$r->id_pregunta}}',es_correcta:'{{$r->es_correcta}}'})
            @endforeach
            selected=function(id){
                var result= data.preguntas.filter(item=>{return item.id==id})
                if(result.length>0){result=result[0]}
                $('#id_pregunta').val(result.id)
                $('#preguntaSelected').html(result.text)
                var tabla=document.createElement("table")
                $(tabla).addClass("table table-striped table-hover table-bordered")
                var tr=document.createElement("tr")
                $(tr).html("<th>Id</th><th>Texto</th><th>Es correcta</th>")
                tabla.appendChild(tr)
                var resp=data.respuestas.filter(item=>{return item.id_pregunta==id})
                console.log(resp)
                resp.forEach(item=>{
                    if(item.id_pregunta==id){
                        tr=document.createElement("tr")
                        var es_correcta=item.es_correcta==0?"No":"Si"
                        console.log(item.es_correcta)
                        $(tr).html("<td>"+item.id+"</td><td>"+item.text+"</td><td>"+es_correcta+"</td>")
                        tabla.appendChild(tr)
                    }
                })

                $('#respResult').html(tabla)
            }
        })

    </script>
@endsection
