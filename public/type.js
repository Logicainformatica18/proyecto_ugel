
function typeStore() {
    var formData = new FormData(document.getElementById("type"));
    axios({
            method: 'post',
            url: 'typeStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
                 alert('Registrado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function typeEdit(id) {
    var formData = new FormData(document.getElementById("type"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'typeEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            type.id.value=response.data["id"];
            type.description.value=response.data["description"];
            type.detail.value=response.data["detail"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function typeUpdate() {
    var formData = new FormData(document.getElementById("type"));
    axios({
            method: 'post',
            url: 'typeUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
                 alert('Modificado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function typeDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("type"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'typeDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
                 alert('Eliminado Correctamente');

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}

function typeShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'typeShow',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
