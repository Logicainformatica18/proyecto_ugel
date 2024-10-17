

function associateShow(id, formulario) {

    var formData = new FormData();
    formData.append('id', id);
    axios({
            method: 'post',
            url: '../associateShow',   
            data: formData,
        })
        .then(function(response) {
            //handle success
            let formulario_ = "mycontent_associate" + formulario;
            var contentdiv = document.getElementById(formulario_);
            contentdiv.innerHTML = response.data;
              //carga pdf- csv - excel
           //   datatable_load();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
