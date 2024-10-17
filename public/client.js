

function clientStore() {
    var formData = new FormData(document.getElementById("client"));
    axios({
        method: 'post',
        url: '../clientStore',
        data: formData,
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    })
    .then(function(response) {
        // Manejar el éxito de la respuesta
        
        if (response.data == "denegado") {
            alert("Acceso denegado");
            window.location.reload();
            return;
        }

        // Obtener todos los inputs con la clase 'input-class'
        var inputs = document.getElementsByClassName("client_id");
        // Asignar valores a los inputs utilizando un bucle
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].value = response.data; // Asignar el valor correspondiente
        }
         nextPage();
        // Cargar PDF, CSV, Excel, etc.
        // datatable_load();
        
        // Reiniciar el formulario
        // $('#client')[0].reset();
        
        // Pasar a la siguiente página o ejecutar otras acciones
        // nextPage();
    })
    .catch(function(error) {
        // Manejar el error
        console.log(error);
    });
}


function refresh() {
    alert('Registrado Correctamente');
    window.location.reload();

}
