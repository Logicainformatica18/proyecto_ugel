
function scheduleStore() {
    var formData = new FormData(document.getElementById("schedule"));
    axios({
            method: 'post',
            url: 'scheduleStore',
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

function scheduleEdit(id) {
    var formData = new FormData(document.getElementById("schedule"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'scheduleEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            //contentdiv.innerHTML = response.data["description"];
            schedule.id.value=response.data["id"];
            schedule.description.value=response.data["description"];
            schedule.detail.value=response.data["detail"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function scheduleUpdate() {
    var formData = new FormData(document.getElementById("schedule"));
    axios({
            method: 'post',
            url: 'scheduleUpdate',
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

function scheduleDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("schedule"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'scheduleDestroy',
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

function scheduleShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'scheduleShow',
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
