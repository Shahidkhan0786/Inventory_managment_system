@extends('masterdash')

        @section('homemenu')
        <!-- rightportion -->
     <div class="row  h-25 container mt-5">

     <div class="col-md-2 border offset-md-1 shad"><a href="user"><span class="fa fa-users siz  p-3"></span></a>
     <p class="text-center">Users</p>
     </div>
      <!-- seconditem -->
     <div class="col-md-2 border offset-md-1 shad"><a href="user"><img src="images/product.png" class="p-3 mt-2" ></a>
     <p class="text-center">Products</p></div>
    <!-- seconditemend -->
    <!-- thirditem -->
    <div class="col-md-2 border offset-md-1 shad"><a href="user"><img src="images/stock.png" class="p-3 mt-2" ></a>
     <p class="text-center">Stock</p></div>
     <!-- thirditemend -->
     <!-- fouritem -->
     <!-- start -->
     <div class="col-md-2 border offset-md-1 shad"><a href="user"><img src="images/purchase.png" class="p-3 mt-2" ></a>
     <p class="text-center">Purchase Invoice</p></div>
     <!-- end -->
     </div>
       <!-- row2 -->

       <div class="row  h-25 container mt-5">
     <!-- start -->
     <div class="col-md-2 border offset-md-1 mt-2 shad"><a href="sales"><img src="images/sales.png" class="p-3 mt-2" ></a>
     <p class="text-center">Sales</p></div>
     <!-- end -->

     <!-- start -->
     <div class="col-md-2 border offset-md-1 mt-2 shad"><a href="user"><img src="images/catagories.png" class="p-3 mt-2" ></a>
     <p class="text-center">Product Catagory</p></div>
     <!-- end -->

     <!-- start -->
     <div class="col-md-2 border offset-md-1 mt-2 shad"><a href="user"><img src="images/supplier.png" class="p-3 mt-2" ></span></a>
     <p class="text-center">Supplier</p></div>
     <!-- end -->
    <!-- start -->
    <div class="col-md-2 border offset-md-1 mt-2 shad"><a href="user"><img src="images/pricing.png" class="p-3 mt-2" ></span></span></a>
     <p class="text-center">Product pricing</p></div>
     <!-- end -->

     </div>
         <!-- row3 -->
     <div class="row  h-20 container mt-5">
     <div class="col-md-2 border  mx-auto shad"><a href="user"><img src="images/return.png" class="p-3 mt-2" ></span></span></a>
     <p class="text-center">Sales return</p></div>
     
     </div>
      <!-- row3end -->
    </div>
    @endsection
  

