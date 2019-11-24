@extends('client.layouts.master')

@section('title')
  INVOICE
@endsection

<?php
    $user_id= Auth::user()->id;
    $final_details= DB::table('cart')->where('user_id',$user_id)->where('cart_status',0)->orderBy('id','desc')->first();
    $track_code= $final_details->track_code;
    $shipping_details= DB::table('shipping_address')->where('user_id',$user_id)->where('track_code',$track_code)->first();
    $user_information= DB::table('users')->where('id',$user_id)->first();
  ?>

@section('content')

<div class="text-center check-out-header container">
  <h3 class="col-lg-2 text-center">My Bag</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center">Checkout</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center active">Payment</h3>
</div>
<div id="html-content-holder">
<header class="clearfix not-nav">
     <div id="logo">
       <img src="{{asset('logo/logo.png')}}">
     </div>
     <div id="company">
       <h2 class="name">Company Name</h2>
       <div>ODOKAN, Nepal</div>
       <div>9819981901</div>
       <div>odokan@odokan.com</div>
     </div>

   </header>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
   <main>
     <div id="details" class="clearfix">
       <div id="client">
         <div class="to">INVOICE TO:</div>
         <h2 class="name">{{$user_information->name}}</h2>
         <div class="address">{{$shipping_details->tolename}},{{$shipping_details->placename}}</div>
         <div class="email">{{$shipping_details->mobilenumber}}</div>
       </div>
       <div id="invoice">
         <h1>INVOICE {{$shipping_details->track_code}}</h1>
         <div class="date">Date of Invoice:{{$final_details->created_at}}</div>

       </div>
     </div>
     <table border="0" cellspacing="0" cellpadding="0">
       <thead>
         <tr>
           <th class="no">ID</th>
           <th class="desc">DESCRIPTION</th>
           <th class="unit">UNIT PRICE</th>
           <th class="qty">QUANTITY</th>
           <th class="total">TOTAL</th>
         </tr>
       </thead>
       <tbody>
         <?php
          $billing_details= DB::table('cart')->where('user_id',$user_id)->where('track_code',$track_code)->where('cart_status',0)->get();

          $i=1;
          ?>

          <?php
          foreach($billing_details as $billing){

              if(substr($billing->cart_product_sku,0,1)=='i'){
                  $products_others= DB::table('interior_designs')->where('interior_design_product_code',$billing->cart_product_sku)->first();

                  ?>
                  <tr>
                    <td class="no">{{$i++}}</td>
                    <td class="desc"><h3>{{$products_others->interior_design_product_name}}</h3><?=$products_others->interior_design_product_description?></td>
                    <td class="unit">Rs.{{$billing->cart_product_price}}</td>
                    <td class="qty">{{$billing->cart_product_quantity}}</td>
                    <td class="total">Rs.{{$billing->cart_product_price*$billing->cart_product_quantity}}</td>
                  </tr>
              <?php
              }
              else {
                $products= DB::table('product_infos')->where('id',$billing->cart_product_id)->first();
                $products_others= DB::table('products')->where('id',$products->product_id)->first();
               ?>





         <tr>
           <td class="no">{{$i++}}</td>
           <td class="desc"><h3>{{$products_others->product_name}}</h3><?=$products_others->product_description?></td>
           <td class="unit">Rs.{{$billing->cart_product_price}}</td>
           <td class="qty">{{$billing->cart_product_quantity}}</td>
           <td class="total">Rs.{{$billing->cart_product_price*$billing->cart_product_quantity}}</td>
         </tr>
         <?php
       }
       }
          ?>
       </tbody>
       <tfoot>
         <?php
          $total= DB::table('donation')->where('donation_user_id',$user_id)->where('donation_track_code',$track_code)->first();

          ?>
         <tr>
           <td colspan="2"></td>
           <td colspan="2">SUBTOTAL</td>
           <td>Rs.{{$total->total_final_amount-$total->donated_amount}}</td>
         </tr>

         <tr>
           <td colspan="2"></td>
           <td colspan="2">Donation</td>
           <td>Rs.{{$total->donated_amount}}</td>
         </tr>
      
         <tr>
           <td colspan="2"></td>
           <td colspan="2">GRAND TOTAL</td>
           <td>Rs.{{$total->total_final_amount}}</td>
         </tr>
       </tfoot>
     </table>
     <div id="thanks">Thank you!</div>
     <div id="notices">
       <div>NOTICE:</div>
       <div class="notice">Your product will be delivered as soon as possible.</div>
     </div>
   </main>
   </div>
    <!-- <input id="btn-Preview-Image" type="button" value="Preview"/>-->
    <!--<a id="btn-Convert-Html2Image" href="#">Download</a>-->
        <button class="btn btn-success" id="btn-Preview-Image" style="font-size:20px!important" >Preview and Download</button>

 <!-- The Modal -->
 <div id="myModal" class="modal">

   <!-- Modal content -->
   <div class="modal-content">
     <div class="modal-header">
       <span class="close">&times;</span>
       <h2>Odokan Invoice</h2>
     </div>
     <div class="modal-body">


       <div id="previewImage">
       </div>
       <a class= "btn btn-success" id="btn-Convert-Html2Image" href="#">Download</a>
       <br>


     </div>
     <div class="modal-footer">

     </div>
   </div>

 </div>
     <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("btn-Preview-Image");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

   <script>
$(document).ready(function(){


var element = $("#html-content-holder"); // global variable
var getCanvas; // global variable

    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "Invoice.png").attr("href", newData);
	});

});

</script>



   <style>
   @font-face {
font-family: SourceSansPro;
src: url(SourceSansPro-Regular.ttf);
}

.clearfix:after {
content: "";
display: table;
clear: both;
}

a {
color: #0087C3;
text-decoration: none;
}

body {
position: relative;
width: 21cm;
height: 29.7cm;
margin: 0 auto;
color: #555555;
background: #FFFFFF;
font-family: Arial, sans-serif;
font-size: 14px;
font-family: SourceSansPro;
}

header {
padding: 10px 0;
margin-bottom: 20px;
border-bottom: 1px solid #AAAAAA;
}

#logo {
float: left;
margin-top: 8px;
}

#logo img {
height: 70px;
}

#company {
float: right;
text-align: right;
}


#details {
margin-bottom: 50px;
}

#client {
padding-left: 6px;
border-left: 6px solid #0087C3;
float: left;
}

#client .to {
color: #777777;
}

h2.name {
font-size: 1.4em;
font-weight: normal;
margin: 0;
}

#invoice {
float: right;
text-align: right;
}

#invoice h1 {
color: #0087C3;
font-size: 2.4em;
line-height: 1em;
font-weight: normal;
margin: 0  0 10px 0;
}

#invoice .date {
font-size: 1.1em;
color: #777777;
}

table {
width: 100%;
border-collapse: collapse;
border-spacing: 0;
margin-bottom: 20px;
}

table th,
table td {
padding: 20px;
background: #EEEEEE;
text-align: center;
border-bottom: 1px solid #FFFFFF;
}

table th {
white-space: nowrap;
font-weight: normal;
}

table td {
text-align: right;
}

table td h3{
color: #57B223;
font-size: 1.2em;
font-weight: normal;
margin: 0 0 0.2em 0;
}

table .no {
color: #000000;
font-size: 1.6em;
background: 	#D3D3D3;
}

table .desc {
text-align: left;
}

table .unit {
background: #DDDDDD;
}

table .qty {
}

table .total {
background:#D3D3D3;
color: #000000;
}

table td.unit,
table td.qty,
table td.total {
font-size: 1.2em;
}

table tbody tr:last-child td {
border: none;
}

table tfoot td {
padding: 10px 20px;
background: #FFFFFF;
border-bottom: none;
font-size: 1.2em;
white-space: nowrap;
border-top: 1px solid #AAAAAA;
}

table tfoot tr:first-child td {
border-top: none;
}

table tfoot tr:last-child td {
color: #57B223;
font-size: 1.4em;
border-top: 1px solid #57B223;

}

table tfoot tr td:first-child {
border: none;
}

#thanks{
font-size: 2em;
margin-bottom: 50px;
}

#notices{
padding-left: 6px;
border-left: 6px solid #0087C3;
}

#notices .notice {
font-size: 1.2em;
}

footer {
color: #777777;
width: 100%;
height: 30px;
position: absolute;
bottom: 0;
border-top: 1px solid #AAAAAA;
padding: 8px 0;
text-align: center;
}
/* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
  }

  /* Add Animation */
  @-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }

  @keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    padding: 2px 16px;
    background-color: #0cd4d2;
    color: white;
  }

  .modal-body {padding: 2px 16px;}

  .modal-footer {
    padding: 2px 16px;
    background-color:#0cd4d2;
    color: white;
  }
  #previewImage{
          text-align: center;
  }
  #btn-Convert-Html2Image{
      text-align: center;
  }


   </style>



@endsection
