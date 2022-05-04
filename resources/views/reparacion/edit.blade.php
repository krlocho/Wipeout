<form action="{{url('/reparaciones/'.$reparacion->id)}}" method="POST">
    @csrf
    @method('PATCH')

    @include('reparacion.form')

</form>
