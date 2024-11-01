
function payStore() {
    var formData = new FormData(document.getElementById("pay"));
    axios({
            method: 'post',
            url: 'payStore',
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

function payEdit(id) {
    var formData = new FormData(document.getElementById("pay"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'payEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            pay.id.value=response.data["id"];
            pay.description.value=response.data["description"];
            pay.user_id.value=response.data["user_id"];
            pay.category_id.value=response.data["category_id"];
            pay.type_id.value=response.data["type_id"];
            pay.type_money.value=response.data["type_money"];
            pay.ganador.value=response.data["ganador"];
            pay.constancia.value=response.data["constancia"];
            pay.date_solicitud.value=response.data["date_solicitud"];
            pay.date_recepcion.value=response.data["date_recepcion"];
            pay.money.value=response.data["money"];
            pay.cantidad.value=response.data["cantidad"];
            pay.igv.value=response.data["money"] * 0.18 * response.data["cantidad"];
            pay.subtotal.value=(response.data["money"] * 0.18 * response.data["cantidad"]) + response.data["money"] * response.data["cantidad"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function payUpdate() {
    var formData = new FormData(document.getElementById("pay"));
    axios({
            method: 'post',
            url: 'payUpdate',
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

function payDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("pay"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'payDestroy',
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

function payShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'payShow',
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
