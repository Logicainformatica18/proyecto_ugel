
function selection_detailStore() {
    var formData = new FormData(document.getElementById("selection_detail"));
    axios({
            method: 'post',
            url: 'selection_detailStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
  //carga pdf- csv - excel
 // datatable_load();
 // alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function selection_detailEdit(id) {
    var formData = new FormData(document.getElementById("selection_detail"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'selection_detailEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
              document.getElementById("primary").value=id;     

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function selection_detailUpdate() {
    var formData = new FormData(document.getElementById("selection_detail"));
    axios({
            method: 'post',
            url: 'selection_detailUpdate',
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

function selection_detailDestroy(id,primary) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("selection_detail"));
    formData.append("id", id)
    formData.append("primary",primary)
    axios({
            method: 'post',
            url: 'selection_detailDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
            
              alert('Eliminado Correctamente');
  //datatable_load();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}

function selection_detailShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'selection_detailShow',
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
