function userCreate() {

    axios({
            method: 'post',
            url: 'userCreate',
         //   data: formData,
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


        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function userStore() {
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: 'userStore',
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

function userDestroy(id) {
    if (confirm("Esta seguro de Eliminar?")) {
        var formData = new FormData(document.getElementById("user"));
        formData.append("id", id);
        axios({
                method: 'post',
                url: "userDestroy",
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

function userEdit(id) {
    var formData = new FormData(document.getElementById("user"));
    formData.append("id", id);
    axios({
            method: 'post',
            url: 'userEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            user.id.value = response.data["id"];
            user.dni.value = response.data["dni"];
            user.firstname.value = response.data["firstname"];
            user.lastname.value = response.data["lastname"];
            user.names.value = response.data["names"];
            user.description.value = response.data["description"];
            user.ruc.value = response.data["ruc"];

            // if(response.data["photo"]!=null){

            //     user.fotografia.src ="imageusers/"+ response.data["photo"];
            // }
            // else{
            //     user.fotografia.src ="https://via.placeholder.com/150";
            // }
            user.email.value = response.data["email"];
            user.cellphone.value = response.data["cellphone"];


            // if (response.data["sex"]=="M") {
            //     document.getElementById('M').checked=true;
            // }
            // else{
            //     document.getElementById('F').checked=true;
            // }
        //  var datebirth =  response.data["datebirth"];
        //  user.month.value  = parseInt(datebirth.substr(5,2)) ;
        //  user.day.value  = parseInt(datebirth.substr(8,2)) ;
        //  user.year.value  = parseInt(datebirth.substr(0,4)) ;

        //  user.role.value=    response.data["roles_"][0]["name"];



        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function userUpdate() {
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: 'userUpdate',
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

function userShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'userShow',
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



function userUpdateProfile() {
    var formData = new FormData(document.getElementById("user"));
    axios({
            method: 'post',
            url: 'userUpdateProfile',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
         alert('Modificado correctamente');
         window.location.href='/sistema';
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}


function userRoleStore() {
    var formData = new FormData(document.getElementById("user_role"));
    axios({
            method: 'post',
            url: 'userRoleStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            userCreate();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function userRoleEdit(id) {
    var formData = new FormData(document.getElementById("user_role"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'userRoleEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent_detail");
            contentdiv.innerHTML = response.data;
            user_role.id.value=id;
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
function userRoleDestroy(role_name,id) {
    if(confirm("¿Quieres eliminar este registro?")){
        var formData = new FormData(document.getElementById("user_role"));
        formData.append("id",id);
        formData.append("role_name",role_name);
        axios({
                method: 'post',
                url: 'userRoleDestroy',
                data: formData,
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then(function(response) {
                //handle success
                var contentdiv = document.getElementById("mycontent_detail");
                contentdiv.innerHTML = response.data;
                //actualizamos la tabla
                userCreate();
            })
            .catch(function(response) {
                //handle error
                console.log(response);
            });
    }


}

