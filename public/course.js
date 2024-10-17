
function courseStore() {
    var formData = new FormData(document.getElementById("course"));
    axios({
            method: 'post',
            url: 'courseStore',
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

function courseEdit(id) {
    var formData = new FormData(document.getElementById("course"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'courseEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            course.id.value=response.data["id"];
            course.description.value=response.data["description"];
          course.detail.value=response.data["detail"];
            course.type.value = response.data["type_id"];
               course.folder_certification.value=    response.data["folder_certification"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function courseUpdate() {
    var formData = new FormData(document.getElementById("course"));
    axios({
            method: 'post',
            url: 'courseUpdate',
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

function courseDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("course"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'courseDestroy',
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

function courseShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'courseShow',
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
