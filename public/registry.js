
function registryStore() {
    var formData = new FormData(document.getElementById("registry"));
    axios({
            method: 'post',
            url: 'registryStore',
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

function registryEdit(id) {
    var formData = new FormData(document.getElementById("registry"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'registryEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            registry.id.value=          response.data["id"];
            registry.description.value= response.data["description"];
          registry.detail.value=    response.data["detail"];
           registry.schedule.value=    response.data["schedule_id"];
            registry.course.value = response.data["course_id"];

             registry.fec_start.value = response.data["fec_start"].substr(0, 10);
            registry.fec_end.value = response.data["fec_end"].substr(0, 10);
           registry.hour_start.value=    response.data["hour_start"];
registry.date_certification.value = response.data["date_certification"].substr(0, 10);
           registry.teacher.value=    response.data["teacher_m"]+ "-"+ response.data["teacher_t"]+ "-"+response.data["teacher_r"] ;
           registry.assistance.value=    response.data["assistance_id"];
            registry.edition.value = response.data["edition"];
             registry.type.value=    response.data["type"];

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function registryUpdate() {
    var formData = new FormData(document.getElementById("registry"));
    axios({
            method: 'post',
            url: 'registryUpdate',
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

function registryDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("registry"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'registryDestroy',
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
