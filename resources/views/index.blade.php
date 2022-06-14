<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <h1 class="blue-text">Blog</h1>
    <div class="row">
          
  <div class="row">
    @foreach ($articles as $article)
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <div class="mx-auto grey" style="height: 200px; " >
            Image
          </div>
          <span class="card-title black-text">{{$article->name}}</span>
        
        </div>
        <div class="card-content">
          <p>{{$article->description}}</p>
        </div>
          <div class="row">
            <div class="col">
              <a class="btn-floating orange right"><i class="material-icons">edit</i></a>
            </div>
            <div class="col">

              <a class="btn-floating red right "><i class="material-icons">delete</i></a>
            </div>

          </div>
  
      </div>
          
    </div>
      @endforeach
  </div>
      </div>
  </div>
  
 <!-- Compiled and minif<div class="mx-auto" style="width: 200px;">
  Centered element
</div>ied JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</body>
</html>
