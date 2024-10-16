//URL: dirreccion externa
//URI: direccion interna
const validar_usuario = () => {
    let email = document.getElementById('email-id').value;
    let pass = document.getElementById('pass-id').value;
    let data = new FormData();
    data.append("email", email); // Añade datos al formulario
    data.append("pass", pass); // Añade datos al formulario

    fetch("app/controller/login.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(async respuesta => {
        if (respuesta[0] == 1) {
            await Swal.fire({ icon: "success", title: `${respuesta[1]}` });
            window.location = "index.php";
        } else {
            Swal.fire({ icon: "error", title: `${respuesta[1]}` });
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
        Swal.fire({ icon: "error", title: "Hubo un error en la conexión." });
    });
}

const registrar_usuario = () => {
    let nombre = document.getElementById('nombre').value;
    let apellido = document.getElementById('apellido').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('pass').value;
    let año_ingreso = document.getElementById('año_ingreso').value; // Cambié el nombre a `año_ingreso`
    let carrera = document.getElementById('carrera').value; // Cambié el nombre a `carrera`

    let data = new FormData();
    data.append("nombre", nombre); // Añade datos al formulario
    data.append("apellido", apellido); // Añade datos al formulario
    data.append("email", email); // Añade datos al formulario
    data.append("pass", pass); // Añade datos al formulario
    data.append("año_ingreso", año_ingreso); // Añade datos al formulario
    data.append("carrera", carrera); // Añade datos al formulario

    fetch("app/controller/registro.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => respuesta.json())
    .then(async respuesta => {
        if (respuesta[0] == 1) {
            await Swal.fire({ icon: "success", title: `${respuesta[1]}` });
            window.location = "login.php"; // Corregido para que la redirección se realice correctamente
        } else {
            Swal.fire({ icon: "error", title: `${respuesta[1]}` });
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
        Swal.fire({ icon: "error", title: "Hubo un error en la conexión." });
    });
}

window.addEventListener('DOMContentLoaded', () => {
    // LOGIN
    if (document.getElementById('btn-saludar')) {
        document.getElementById('btn-saludar').addEventListener('click', () => {
            validar_usuario();
        });
    }
    // REGISTRO
    if (document.getElementById('btn-registrar')) {
        document.getElementById('btn-registrar').addEventListener('click', () => {
            registrar_usuario(); // Corregido: eliminado `location "login.php"`
        });
    }
});

