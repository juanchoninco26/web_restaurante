//seleccionamos el formularo
const login = document.getElementById("formulario");


login.addEventListener('submit', (e) => {
    const div = document.getElementById("danger_hidden");
    const error = document.getElementById("error");

    const activError = div.className = "danger";

    e.preventDefault();
    //usamos new FormData() y le enviamos el formulario
    //tambien se puede usar con la etiqueta name del formulario
    var datos = new FormData(login);

    function time() {
        setTimeout(() => {
            div.className = "danger_hidden";
            //error.innerHTML = "";
            mensaje("")
        }, 4000);
    }
    function mensaje(mensaje) {
        error.innerHTML = mensaje;
    }

    if (datos.get('_user') === "" || datos.get('_user') === "") {
        div.className = "danger";
        //error.innerHTML ="Llene los campos vacios";
        mensaje("Llene los campos vacios");
        time();

    } else {
        var data = {
            //con el get() seleccionamos el name del html para obtener los datos. 
            usuario: datos.get('_user'),
            clave: datos.get('_password')
        }

        fetch("/controller/LoginCON.php", {
            method: "post",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(res => res.text())
            .then(data => {
                switch (data) {
                    case "200":
                        window.location.href = "/view/pages/inicio.php";
                        break;
                    case "404":
                        activError;
                        //error.innerHTML = "Usuario o contraseña Inorrecto";
                        mensaje("Usuario o contraseña Inorrecto");
                        time();
                        break;
                    default:
                        activError;
                        //error.innerHTML = "error en la busqueda del usuario";
                        mensaje("error en la busqueda del usuario");
                        time();
                        break;
                }

            })
    }
});