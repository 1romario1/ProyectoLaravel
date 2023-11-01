Formulario registro
<form action="{{ url('/usuario')}}" method="post">
@csrf    
    <label for="id">Id</label>
    <input type="number" name="id" id="id">
    <br>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="Apellido">Apellido</label>
    <input type="text" name="Apellido" id="Apellido">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo">
    <br>
    <label for="NumeroTelefono">NumeroTelefono</label>
    <input type="number" name="NumeroTelefono" id="NumeroTelefono">
    <br>
    <label for="Direccion">Direccion</label>
    <input type="text" name="Direccion" id="Direccion">
    <br>
    <input type="submit" value="Guardar">
    <br>
</form>