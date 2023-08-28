<?php 
    $tituloPagina = "Ejercicio 3 del TP3";
    $tp = "botonTP3";
    $ejercicio = "botonEjer3";
    
    include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado3">
<div class="contenedorEj3">
 <div class="container border">
 <div class="bg-light">
   <i class="bi bi-box-arrow-in-down-left bg-gray text-blue p-2">Cinem@s</i> 
 </div>

<form class="row mt-3 g-3 needs-validation" method="post" action="validacion.php" novalidate enctype="multipart/form-data">
   <div class="col-md-6">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="Titulo"  required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="actores" class="form-label">Actores</label>
    <input type="text" class="form-control" name="actores" placeholder="Actores" required>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="director" class="form-label">Director</label>
    <input type="text" class="form-control" name="director" placeholder="Director" required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="guion" class="form-label">Guion</label>
    <input type="text" class="form-control" name="guion" placeholder="Guion" required>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-6">
    <label for="produccion" class="form-label">Produccion</label>
    <input type="text" class="form-control" name="produccion"  required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-2">
    <label for="anio" class="form-label">Año</label>
    <input type="text" class="form-control" name="anio" maxlength="4" required pattern="[0-9]+">
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      Solo numeros, maximo 4!
    </div>
  </div>
  <div class="col-md-6">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" name="nacionalidad" required >
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      El campo no puede estar vacio!
    </div>
  </div>
  <div class="col-md-4">
    <label for="genero" class="form-label">Genero</label>
    <select class="form-select" name="genero" required >
  <option>Terror</option>
  <option >Comedia</option>
  <option >Ciencia Ficcion</option>
  <option >Animada</option>
  <option >Triller</option>
  <option >Accion</option>
  </select>
  <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      selecciona un genero!
    </div>
  </div>
  <div class="col-md-4">
    <label for="duracion" class="form-label">Duración</label>
    <input type="text" maxlength="3" class="form-control" name="duracion" pattern="[0-9]+"  required>
    <label for="duracion" class="form-label">(minutos)</label>
    <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      maximo 3 numeros!
    </div>
  </div>
 <div class="col-md-6">
    <label for="duracion" class="form-label">Restrincion de edad</label>
  <div>
   <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio1" value="1"  required>
     <label class="form-check-label" for="inlineRadio1">Todo Público</label>
   </div>
   <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio2" value="2"  required>
     <label class="form-check-label" for="inlineRadio2">Mayores de 7 años</label>
   </div>
   <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="opcionEdad" id="inlineRadio3" value="3"  required >
    <label class="form-check-label" for="inlineRadio3">Mayores de 18 años </label>
   </div>
  </div>
</div> 
<div class="mb-3">
  <label for="textarea" class="form-label">Sipnosis</label>
  <textarea class="form-control" name="textarea" rows="3"  required></textarea>
  <div class="valid-feedback">
      bien!
    </div>
    <div class="invalid-feedback">
      Ingrese una descripcion!
    </div>
  </div>
<!-- cargar archivo-->
<div class="mb-3">
  <label for="formFile" class="form-label">Cargar una imagen </label>
  <input class="form-control" type="file" name="imagenPeli" required >
</div>


 <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
     <button class="btn btn-secondary" type="reset">Borrar</button>
 </div>

 </form>
</div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

            </div>
</div>


<?php
    include_once('../estructura/pie.php');
?>
