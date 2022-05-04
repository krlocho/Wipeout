Creacion de empleados

<form action="{{url('/reparaciones')}}" method="POST">
   @csrf
@include('reparacion.form')

</form>
