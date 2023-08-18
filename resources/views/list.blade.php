<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>
  <a href="{{('form')}}" class="btn btn-danger">Add</a></td>           
  <table class="table">
   
    <thead>
      <tr>
        <th>id</th>
        <th>Email</th>
        <th>password</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($lists as  $key=>$showdatas)
      <tr>
      <td>{{$key+1}}</td>
        <td>{{$showdatas->email}}</td>
        <td>{{$showdatas->password}}</td>
        <td><img src="{{url('test-imagess/'.$showdatas->image)}}" width="50"></td>
         
        <td>    
                 <a href="/Deleted/{{ $showdatas->id }}/formdelete" class="btn btn-danger">DELETE</a></td>
                <td><a href="/Editeform/{{ $showdatas->id }}/formedit" type="button" class="btn btn-primary">Edit</a></td></td>
              </tr>
              @endforeach
     
      
    
    </tbody>
  </table>
</div>

</body>
</html>
