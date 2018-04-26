<!-- !! imprimir como html -->
{!! Form::open(['url'=> '/productos','class' => 'app-form']) !!}

<div class="">
  {!! Form::label('title','Titulo del producto') !!}
  {!! Form::text('title','',['class' => 'form-control']) !!}
</div>
<div class="">
  {!! Form::label('description','Descripcion del producto') !!}
  {!! Form::textarea('description','',['class' => 'form-control']) !!}
</div>
<div class="">
  {!! Form::label('precio','Precio del producto') !!}
  {!! Form::text('price','0',['class' => 'form-control']) !!}
</div>

<div class="">
  <input type="submit" name="Guardar" value="Guardar" class="btn btn-primary">

</div>
{!! Form::close() !!}
