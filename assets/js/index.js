function validar(){
    var rut = document.getElementById("rut");
    var clave = document.getElementById("clave");


    //Validar que sea de tamaño 9 o 10.
    if(rut.value == "" || rut.value.length < 9 || rut.value.length > 10){
        alert("El rut no está correcto");
        return false;
    } else if (clave.value.length = 0) {
        alert("Por favor indique una contraseña");
        return false;
    }

    return true;
}
