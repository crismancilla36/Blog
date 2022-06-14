<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <h1 class="blue-text">Crear artículo</h1>
    <div class="row">
        <form class="col s12" method="POST" action="/">
        @csrf
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Título" id="title" name = "title" type="text">
                <label for="title">Título *</label>
              </div>  
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Descripción" id="description" name="description" type="text">
                <label for="description">Descripción *</label>
              </div>  
            </div>
            
            <button type="submit" class="btn btn-primary right"><i class="material-icons">save</i> Guardar</button>
        </form>
      </div>
  </div>
  
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </body>
</html>

