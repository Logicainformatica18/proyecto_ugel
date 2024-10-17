
function roleStore() {
    var formData = new FormData(document.getElementById("role"));
    axios({
            method: 'post',
            url: 'roleStore',
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

function roleEdit(id) {
    var formData = new FormData(document.getElementById("role"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'roleEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            role.id.value=response.data["id"];
            role.name.value=response.data["name"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function roleUpdate() {
    var formData = new FormData(document.getElementById("role"));
    axios({
            method: 'post',
            url: 'roleUpdate',
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

function roleDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("role"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'roleDestroy',
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

function roleShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'roleShow',
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

function rolePermissionStore() {
    var formData = new FormData(document.getElementById("role_permission"));
    axios({
            method: 'post',
            url: 'rolePermissionStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function rolePermissionEdit(id) {
    var formData = new FormData(document.getElementById("role_permission"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'rolePermissionEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            role_permission.id.value=id;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function rolePermissionDestroy(permission_name,id) {
    if(confirm("¿Quieres eliminar este registro?")){
        var formData = new FormData(document.getElementById("role_permission"));
        formData.append("id",id);
        formData.append("permission_name",permission_name);
        axios({
                method: 'post',
                url: 'rolePermissionDestroy',
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent_detail");
                contentdiv.innerHTML = response.data;
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }


}
