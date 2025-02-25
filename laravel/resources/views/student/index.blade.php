<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<style>
h2 { 
  text-align: center;
  font-size: 40px;
  font-weight: bold;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color:blue;
}

h1 {
  text-align: center;
  font-size: 60px;
  font-weight: bolder;
  font-family:Verdana, Geneva, Tahoma, sans-serif;
color:red;
}

</style>

<body>
  <h2>Hello index blade view</h2>
  <h1>Let`s go "welcome"!</h1>

<?php
// dd($data);
?>
    
{{-- @php
dd($data);
@endphp --}}

<div class="container mt-3">
      
  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="10%">ID</th>
        <th>Name</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($data as $value)
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<div class="container mt-3">
 
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>   
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $value)
      <tr>
        <td>{{$value['id']}}</td>
        <td>{{$value['name']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>




</body>

</html>