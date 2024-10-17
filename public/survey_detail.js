function survey_detailStore() {
  var formData = new FormData(document.getElementById("survey_detail"));
  axios({
    method: "post",
    url: "survey_detailStore",
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
      
      alert("Registrado Correctamente");

    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_detailEdit(id) {
  var formData = new FormData(document.getElementById("survey_detail_edit"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "survey_detailEdit",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      //var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data["description"];
     
      survey_detail_edit.id.value = response.data["id"];
      survey_detail_edit.question_edit.value = response.data["question"];
      survey_detail_edit.detail_edit.value = response.data["detail"];
      survey_detail_edit.detail_2_edit.value = response.data["detail_2"];
      survey_detail_edit.detail_3_edit.value = response.data["detail_3"];
      survey_detail_edit.correct_edit.value = response.data["correct"];
      survey_detail_edit.evaluate_edit.value = response.data["evaluate"];
      survey_detail_edit.title_edit.value = response.data["title"];
        survey_detail_edit.category_edit.value = response.data["category"];
      survey_detail_edit.point_edit.value = response.data["point"];
             survey_detail_edit.enumeration_edit.value = response.data["enumeration"];
      
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}

function survey_detailUpdate() {
  var formData = new FormData(document.getElementById("survey_detail_edit"));
  axios({
    method: "post",
    url: "survey_detailUpdate",
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

function survey_detailDestroy(id) {
  if (confirm("¿Quieres eliminar este registro?")) {
    var formData = new FormData(document.getElementById("survey_detail"));
    formData.append("id", id);
    axios({
      method: "post",
      url: "survey_detailDestroy",
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

function Survey_detailDetail(id) {
  var formData = new FormData(document.getElementById("survey_detail"));
  formData.append("id", id);
  axios({
    method: "post",
    url: "survey_detail_detail",
    data: formData,
    headers: {
      "Content-Type": "multipart/form-data"
    }
  })
    .then(function(response) {
      //handle success
      window.location.href = "encuestas_mantenimiento";
      // var contentdiv = document.getElementById("mycontent");
      // contentdiv.innerHTML = response.data;
      //  alert("hola");
    })
    .catch(function(response) {
      //handle error
      console.log(response);
    });
}
