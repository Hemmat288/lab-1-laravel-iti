<html> 
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
               <title>Laravel</title>
 
    </head>
    <body>
       <h1>hello</h1>

<a href="/create">Add new post</a>

       <table class="table">
 <thead> 
    <tr>
        <th>#</th>
        <th>id</th>
        <th>name</th>
        <th>body</th>
        <th>title</th>
    </tr>
</thead>  
  <tbody>  
 @foreach ($posts as $post)
  <tr>
 
    <td>{{ $post['id'] }}</td>
    <td>{{ $post['name'] }}</td>
    <td>{{ $post['body'] }}</td>
    <td>{{ $post['title'] }}</td>
    <td> <a href="/show/{{ $post['id'] }}">show</a></td>
    <td> <a href="/edit/{{ $post['id'] }}">edit</a></td>
    <td> <a href="/delete/{{ $post['id'] }}">delete</a></td>
 
   </tr> 
@endforeach
</tbody>  
    </table> 
 /////////////////////////

 
    </body>
</html>
