<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<title>Laravel CRUD</title>
  </head>

  <body>
 <div class="container" style="width: 50%; margin: 0 auto">
   <a class="btn btn-primary my-3" href="{{url('/')}}">Show Data</a>
     <div class="fm" style="border:1px solid gray; padding: 30px;background-color: silver">

     
     <form action="{{ url('/update_data/'.$editData->id) }}" method="post">
      @csrf
       <div class="form-group">
       <label for="">Name</label>
       <input type="text" name="name" class="form-control" value="{{ $editData->name }}">

          @error('name')
            <span class="text-danger">{{ $message }}</span>
          @enderror

       </div>

         <div class="form-group">
       <label for="">Email</label>
       <input type="text" name="email" class="form-control" value="{{ $editData->email }}">

         @error('email')
            <span class="text-danger">{{ $message }}</span>
          @enderror
       </div>

       <input type="submit" class="btn btn-success my-2" name="" value="Submit">
     </form>


     </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>