<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Laravel CRUD</title>
  </head>

   <body>

 <div class="container">
  <a class="btn btn-primary my-3" href="{{url('/add_data')}}">Add Data</a>
    @if(Session::has('msg'))

       <p class="alert alert-success">{{ Session::get('msg') }}</p>

       @endif

     <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($showData as $key => $data)
    <tr>
      <th>{{$key+1}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td width="200">
      <a href="{{url('/edit_data/'.$data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{url('/delete_data/'.$data->id)}}" class="btn btn-danger" onclick="confirm('Are you sure delete this data')">Delete</a>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>
{{ $showData->links() }}
     
   </div>




  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>