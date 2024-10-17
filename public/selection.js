
function selectionStore() {
    var formData = new FormData(document.getElementById("selection"));
    axios({
            method: 'post',
            url: 'selectionStore',
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

function selectionEdit(id) {
    var formData = new FormData(document.getElementById("selection"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'selectionEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            selection.id.value=response.data["id"];
            selection.description.value=response.data["description"];
            selection.detail.value = response.data["detail"];
            selection.state.value = response.data["state"];
            selection.associate_id.value=response.data["associate_id"];

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function selectionUpdate() {
    var formData = new FormData(document.getElementById("selection"));
    axios({
            method: 'post',
            url: 'selectionUpdate',
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

function selectionDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("selection"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'selectionDestroy',
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

function selectionShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'selectionShow',
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
