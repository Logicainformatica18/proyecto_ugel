function survey_clientStore(form) {


var formData = new FormData(document.getElementById("survey_client" + form));
var answerValue = formData.get("answer");
  var optionValue = formData.get("option");
  
  if (answerValue === "") {
    alert("Debe realizar alguna respuesta");
  } else if (optionValue === "no_respondido") {
    alert("Debe marcar una opción");
   }
  
  else{
  axios({
    method: "post",
    url: "../survey_clientStore",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      // handle success
      //var contentdiv = document.getElementById("mycontent");
      nextPage();
      
    //  contentdiv.innerHTML = response.data;
    })
    .catch(function(error) {
      // handle error
      console.log(error);
    });
}



}
function refresh() {
  alert("¡Muchas Gracias por completar el cuestionario!");
  window.location.reload();
}

function survey_clientEdit(id, student) {
  var formData = new FormData(document.getElementById("qualification"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "survey_clientEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("student_description");
      contentdiv.innerHTML = student;
      qualification.id.value = response.data["id"];
      qualification.n1.value = response.data["n1"];
      qualification.n2.value = response.data["n2"];
      qualification.n3.value = response.data["n3"];
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_clientUpdate() {
  var formData = new FormData(document.getElementById("qualification"));
  axios({
    method: "post",
    url: "survey_clientUpdate",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      var contentdiv = document.getElementById("mycontent");
      contentdiv.innerHTML = response.data;
      //carga pdf- csv - excel
      datatable_load();
      alert("Modificado Correctamente");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_clientDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("survey_client"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "survey_clientDestroy",
      data: formData,
      headers: {
        "Content-Type": "multipart/form-data"
      }
    })
      .then(function(response) {
        //handle success
        var contentdiv = document.getElementById("mycontent");
        contentdiv.innerHTML = response.data;
        //carga pdf- csv - excel
        datatable_load();
        alert("Eliminado Correctamente");
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
    method: "post",
    url: "registryShow",
    data: formData
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
