function reportStore() {
      // Obtener todos los checkboxes
      let checkboxes = document.querySelectorAll("input[type=checkbox][name=columns]");
      let checkedValues = [];

      // Iterar sobre los checkboxes y guardar los valores activados
      for (let checkbox of checkboxes) {
        if (checkbox.checked) {
          checkedValues.push(checkbox.value);
        }
      }

      // Mostrar los valores activados
      //alert(checkedValues);
    var formData = new FormData();
        formData.append("columns",checkedValues);
  axios({
    method: "post",
    url: "../reportStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //Manejar el éxito de la respuesta
       var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
    
    })
    .catch(function(error) {
      //Manejar el error
      console.log(error);
    });
}

function refresh() {
  alert("Registrado Correctamente");
  window.location.reload();
}
function reportDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("report"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: '../reportDestroy',
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
                 //datatable_load();
          alert('Eliminado Correctamente');
          window.location.reload();

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}


function reportEdit(id) {
    var formData = new FormData(document.getElementById("report"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: '../reportEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
          
            var contentdiv = document.getElementById("mycontent");
          // contentdiv.innerHTML = response.data["id"];
          report.id.value = response.data["id"];
             report.description.value = response.data["description"];
          report.detail.value= response.data["detail"];  

        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function reportUpdate() {
    var formData = new FormData(document.getElementById("report"));
    axios({
            method: 'post',
            url: '../reportUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
          //  var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
               //  datatable_load();
                 window.location.reload();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}