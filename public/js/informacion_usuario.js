const obtener_informacion = () => {
    fetch("app/controller/informacion_usuario.php")
    .then(respuesta => {
        if (!respuesta.ok) {
            throw new Error('Error en la respuesta del servidor');
        }
        return respuesta.json();
    })
    .then((respuesta) => {
        document.getElementById('nombre').value = respuesta['nombre'] || '';
        document.getElementById('apellido').value = respuesta['apellido'] || '';
        document.getElementById('email').value = respuesta['email'] || '';
        document.getElementById('pass').value = respuesta['pass'] || '';
        document.getElementById('año_ingreso').value = respuesta['año_ingreso'] || '';
        document.getElementById('carrera').value = respuesta['carrera'] || '';
    })
    .catch(error => {
        console.error('Error al obtener información:', error);
        alert('No se pudo obtener la información del usuario.');
    });
}

const actualizar_informacion = () => {
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    const email = document.getElementById('email').value;
    const pass = document.getElementById('pass').value;

    const data = new FormData();
    data.append('nombre', nombre);
    data.append('apellido', apellido);
    data.append('email', email);
    data.append('pass', pass);

    fetch("app/controller/actualizar_info_usuario.php", {
        method: "POST",
        body: data
    })
    .then(respuesta => {
        if (!respuesta.ok) {
            throw new Error('Error en la respuesta del servidor');
        }
        return respuesta.json();
    })
    .then(respuesta => {
        if (respuesta[0] == 1) {
            alert(`${respuesta[1]}`);
            window.location = "index.php";
        } else {
            alert(`${respuesta[1]}`);
        }
    })
    .catch(error => {
        console.error('Error al actualizar la información:', error);
        alert('No se pudo actualizar la información del usuario.');
    });
}

document.addEventListener('DOMContentLoaded', () => {
    obtener_informacion();

    const btnActualizar = document.getElementById('btn-actualizar');
    if (btnActualizar) {
        btnActualizar.addEventListener('click', () => {
            actualizar_informacion();
        });
    } else {
        console.error('Botón de actualización no encontrado en el DOM');
    }
});
