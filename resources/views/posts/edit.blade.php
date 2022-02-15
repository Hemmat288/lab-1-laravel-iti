<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> </head>
<body>
 
 
    
    <form action="/update" method="POST">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $id }}">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $name }}">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">body</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $body }}">
 
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $title }}">
 
  </div>
 
  <button type="submit"  value="update" class="btn btn-primary"> update </button>
</form>
</body>
</html>