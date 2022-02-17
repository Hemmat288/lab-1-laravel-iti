<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> </head>
<body>



    <form action="/posts" method="POST">
        @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input type="text" class="form-control"  value="{{ old('title') }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="title"  >

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">description</label>
    <input type="text" class="form-control"  value="{{ Request::old('title') }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">

  </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  <button type="submit"   class="btn btn-primary"> Add </button>
</form>
</body>
</html>
