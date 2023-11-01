Usuarios

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>NumeroTelefono</th>
                <th>Direccion</th>
                <th>Acciones</th>                
            </tr>            
        </thead>
        <tbody>
            @Foreach( $usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->Nombre}}</td>
                <td>{{$usuario->Apellido}}</td>
                <td>{{$usuario->Correo}}</td>
                <td>{{$usuario->NumeroTelefono}}</td>
                <td>{{$usuario->Direccion}}</td>
                <td>Editar | Borrar<td>
            </tr> 
            @endforeach           
        </tbody>
    </table>
</div>
