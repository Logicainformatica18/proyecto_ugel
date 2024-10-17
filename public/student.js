
function studentStore() {
    var formData = new FormData(document.getElementById("student"));
    axios({
            method: 'post',
            url: 'studentStore',
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

function studentEdit(id) {
    var formData = new FormData(document.getElementById("student"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'studentEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            student.id.value=response.data["id"];
            student.description.value=response.data["description"];
          student.detail.value=response.data["detail"];
           student.type.value=    response.data["type_id"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function studentUpdate() {
    var formData = new FormData(document.getElementById("student"));
    axios({
            method: 'post',
            url: 'studentUpdate',
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

function studentDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("student"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'studentDestroy',
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

function studentShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'studentShow',
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
