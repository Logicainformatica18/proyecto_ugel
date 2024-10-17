function whatsapp(numero){


    let url = "https://api.whatsapp.com/send?phone=51"+ numero + "&text=*Buenas -*%0A";
    window.open(url);
}

function readImage(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result); // Renderizamos la imagen
      }
      reader.readAsDataURL(input.files[0]);
    }
  }


        function New() {
            document.getElementById("create").disabled = false;
          //  document.getElementById("new").disabled = false;
            document.getElementById("update").disabled = true;
            // form.id.value = "";
        }

        function Up() {
            document.getElementById("create").disabled = true;
        //    form.new.disabled = true;
            document.getElementById("update").disabled  = false;
        }


function selectSearchProduct(){

    document.getElementById('codebox').style.display=="none";
}



        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/

                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }
// function category_productStore() {


//      var formData = new FormData(document.getElementById("category_product"));
//     axios({
//                method: 'post',
//                url: 'category_productStore',
//                data:  formData,
//                headers: {
//                    'Content-Type': 'multipart/form-data'
//                }
//            })
//            .then(function(response) {
//                //handle success
//                var contentdiv = document.getElementById("mycontent_category_product");
//                contentdiv.innerHTML = response.data;

//            })
//            .catch(function(response) {
//                //handle error
//                console.log(response);
//            });

//    }
//    function category_productEdit(id) {

//     var formData = new FormData(document.getElementById("category_product"));
//    formData.append("id",id)

//    axios({
//               method: 'post',
//               url: 'category_productEdit',
//               data:  formData,
//               headers: {
//                   'Content-Type': 'multipart/form-data'
//               }
//           })
//           .then(function(response) {
//               //handle success
//               var contentdiv = document.getElementById("mycontent_category_product");
//               contentdiv.innerHTML = response.data;
//               document.getElementById("category_product").id.value=id;


//           })
//           .catch(function(response) {
//               //handle error
//               console.log(response);
//           });
//     }

// function category_productDestroy(id,product_id) {

//     if(confirm("¿Quieres eliminar este registro?")){
//    // var formData = new FormData(document.getElementById("category_product"));
//    var formData = new FormData();
//    formData.append("id",id)
//    formData.append("product_id",product_id)
//    axios({
//               method: 'post',
//               url: 'category_productDestroy',
//               data:  formData,
//               // headers: {
//               //     'Content-Type': 'multipart/form-data'
//               // }
//           })
//           .then(function(response) {
//               //handle success
//               var contentdiv = document.getElementById("mycontent_category_product");
//               contentdiv.innerHTML = response.data;

//           })
//           .catch(function(response) {
//               //handle error
//               console.log(response);
//           });
//     }


//     }






