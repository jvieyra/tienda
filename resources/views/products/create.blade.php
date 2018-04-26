@extends ('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <header>
      <h4>Crear un nuevo producto</h4>

    </header>
    <div class="card-body">
      @include('products.form')
    </div>

  </div>

</div>
@endsection
