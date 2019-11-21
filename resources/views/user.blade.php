@extends('masterdash')

@section('adduser')

<div class="container-fluid bg-info">
<div class="row bg-info">
<button class="btn btn-info col-md-2">ADD</button>
<button class="btn btn-info col-md-2">EDIT</button>
<button class="btn btn-info col-md-2">DEL</button>
<button class="btn btn-info col-md-2">VIEW</button>
<form class="form-inline col-md-4" action="/action_page.php">
    <input class="form-control col-md-8" type="text" placeholder="Search">
    <button class="btn btn-info" type="submit">Search</button>
  </form>
</div>
</div>
<!-- menurowend -->
<!-- tablestart -->
<div class="container mt-5">
<div class="row p-3"> 
<table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>Active</td>
      </tr>
    </tbody>
  </table>
</div>
<!-- endtablerow -->
</div>
<!-- endtable -->
@endsection
<!-- form -->
@section('adduserf')
<form action="/action_page.php" class="p-3 mt-3">
  <div class="form-group">
    <label for="name " class="text-white font-weight-bold">Name:</label>
    <input type="text" class="form-control" name="nam">
  </div>
  <div class="form-group">
    <label for="uname" class="text-white font-weight-bold">Email:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
  <label for="status" class="text-white font-weight-bold">Status:</label>
  <select class="form-control">
    <option value="0">Active:</option>
    <option value="1">Unactive</option>
    
  </select>
  </div>
  
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

@endsection