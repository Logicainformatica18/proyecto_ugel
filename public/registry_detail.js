function registryDetail(id) {
    var formData = new FormData(document.getElementById("registry"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'registry_detail',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
          window.location.href = "registros_mantenimiento";
           // var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data;
          //  alert("hola");

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function registry_detailStore() {
    var formData = new FormData(document.getElementById("registry_detail"));
    axios({
            method: 'post',
            url: 'registry_detailStore',
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

function registry_detailEdit(id,student) {
    var formData = new FormData(document.getElementById("qualification"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'registry_detailEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("student_description");
            contentdiv.innerHTML = student;
            qualification.id.value=          response.data["id"];
            qualification.n1.value=          response.data["n1"];
            qualification.n2.value=          response.data["n2"];
            qualification.n3.value=          response.data["n3"];


        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function registry_detailUpdate() {
    var formData = new FormData(document.getElementById("qualification"));
    axios({
            method: 'post',
            url: 'registry_detailUpdate',
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

function registry_detailDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("registry_detail"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'registry_detailDestroy',
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

function registryShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'registryShow',
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
