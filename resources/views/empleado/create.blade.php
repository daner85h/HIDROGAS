formulario de creacion empleados
<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    
        <label for="Nombre"> Nombre </label>
        <input type="text" name="Nombre" id="Nombre">
        <br>
        <label for="" Apelidos""> "Apelidos" </label>
        <input type="text" name="Apelidos" id="Apellidos">
        <br>
        <label for="Correo"> Correo </label>
        <input type="text" name="Correo" id="Correo">
        <br>
        <label for="Direccion"> Direccion </label>
        <input type="text" name="Direccion" id="Direccion">
        <br>
        <label for="celular"> celular </label>
        <input type="text" name="celular" id="Celular">
        <br>
        <label for="Foto"> Foto </label>
        <input type="file" name="Foto" id="Foto">
        <br>
        <input type="submit" name="Enviar" id="Enviar">
        <br>
    
    </form>
    
