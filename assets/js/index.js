function redirect() {
    const formAttribute = document.getElementById("form-login");
    const tipo_cuenta = document.getElementById("tipo_cuenta");
    const homePage = "./index.html";

    switch (tipo_cuenta.value) {

        case "Administrador":
            formAttribute.setAttribute("action", "./index_administrador.html");
            break;
        case "Cliente":
            formAttribute.setAttribute("action", "./index_cliente.html");
            break;
        case "JefeSiembra":
            formAttribute.setAttribute("action", "./index_jefe_siembra.html");
            break;
        case "PerfilAdministrativo":
            formAttribute.setAttribute("action", "./index_administrativo.html");
            break;
        default:
            alert("Ha habido un error");
            formAttribute.setAttribute("action", homePage);
    }

    return true;
}

function showAlert() {
    const boton = document.querySelector("button").getAttribute("name");
    const alertaNuevaCuenta = document.getElementById("alerta-cuenta-nueva");
    const alertaNuevoCliente = document.getElementById("alerta-cliente-nuevo");
    const alertaNuevaSemilla = document.getElementById("alerta-semilla-nueva");
    const alertaNuevaSolicitud = document.getElementById("alerta-envio-solicitud");
    const alertaNuevoEstado = document.getElementById("alerta-cambio-estado");
    const alertaNuevaZona = document.getElementById("alerta-zona");
    const alertaNuevaSiembra = document.getElementById("alerta-siembra-nueva");

    switch (boton) {
        case "nuevaSiembra":
            alertaNuevaSiembra.style.display = "block";
            break;

        case "nuevaCuenta":
            alertaNuevaCuenta.style.display = "block";
            break;
        
        case "nuevoCliente":
            alertaNuevoCliente.style.display = "block";
            break;

        case "semilla":
            alertaNuevaSemilla.style.display = "block";
            break;

        case "nuevaSolicitud":
            alertaNuevaSolicitud.style.display = "block";
            break; 

        case "nuevoEstado":
            alertaNuevoEstado.style.display = "block";
            break
        
        case "nuevaZona":
            alertaNuevaZona.style.display = "block";
            break
        
        default:
            break;
    }


}

function showAlertDelete() {
    const eliminaCliente = document.getElementById("alerta-eliminacion");
    eliminaCliente.style.display = "block";
}

function showAlertUpdate() {
    const actualizaCliente = document.getElementById("alerta-modificacion");
    actualizaCliente.style.display = "block";
}