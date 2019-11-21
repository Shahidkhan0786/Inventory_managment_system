@extends('mastersales')

@section('salesdashbord')
<!-- starttableofsales -->
<div class="container-fluid">
<table class="table table-striped table-borderd">
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>PerUnitPrice</th>
        <th>Discount</th>
        <th>Total_Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
        <td>john@example.com</td>
      </tr>
      
    </tbody>
  </table>
</div>
<!-- endtableofsales -->
@endsection


@section('salescalc')
<form action="/action_page.php" class="p-3 mt-3">
  <div class="form-group">
    <label for="barcode " class="text-white font-weight-bold">Enter_Bar_Code:</label>
    <input type="text" class="form-control" name="nam" placeholder="|||||||||||||||||||||||||">
  </div>
  <div class="form-group">
    <label for="grosstotal" class="text-white font-weight-bold">Gross_total:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="total_discount" class="text-white font-weight-bold">Total_discount:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
  <label for="Payment_type" class="text-white font-weight-bold">Payment_type:</label>
  <select class="form-control">
    <option value="0">Cash:</option>
    <option value="1">Cradit_card</option>
    <option value="2">Papyal</option>
    
  </select>
  </div>
  <div class="form-group">
    <label for="amount_Given" class="text-white font-weight-bold">Amount_given:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <button type="submit" class="btn btn-danger btn-block">Checkout</button>
</form>

@endsection
