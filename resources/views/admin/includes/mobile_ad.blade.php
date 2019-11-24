@extends('admin.layouts.master')


@section('title')
  <h2 class="text-center">Mobile ad</h2>
@endsection


@section('content')

<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>Available ad</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">&nbsp&nbspAdd a new mobile ad</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif

  <h3 class="card-title">Available Ads</h3>

  <table class="table table-inverse">

    <thead>
      <th style="color:black; font-weight:bold; font-size:30px;">Mobileads Company</th>


      <th style="color:black; font-weight:bold; font-size:30px;">Activity</th>
    </thead>
    <tbody>
    @foreach($mobileads as $mobilead)
    <tr>
      <td style="color:black; font-weight:bold; font-size:20px;">{{$mobilead->mobile_ad_company}}</td>




      <td>
        <div class="d-inline-flex">
        <form action="{{route('deletemobilead',['id'=>$mobilead->id])}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
            <span class="fa fa-trash" aria-hidden="true"></span>
          </button>
        </form>

           </div>
      </td>
    </tr>
    @endforeach


  </tbody>


</table>



  <br>

  <form method="post" action="/admin/add-mobilead" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Company name </span> </label>

        <input type="text" id="mobile_ad_company" name="mobile_ad_company" class="form-control" required="required">
        <br/>
        <br/>

      </div><br>


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
        <label for="mobile_ad_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="mobile_ad_image" style="font-size:20px; color:black;">Pick the mobile ad image</label></span> </label>
        <input type="file" id="mobile_ad_image" name="mobile_ad_image" class="form-control" required="required">
        <br/>
        <br/>
        <span id="files_info">
        </span>
      </div><br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>
</div>
</div>
</div>

<script>
$(document).ready(function(){
$('#mobile_ad_image').on('change', function () {
    $('#files_info').text(" ");
  for(let i = 0 ; i < $('#mobile_ad_image').prop('files').length ; i++){
    $('#files_info').text($('#files_info').text() + " " + $('#mobile_ad_image').prop('files')[i]['name']);
    console.log($('#mobile_ad_image').prop('files')[i]['name']);

}
});
});
</script>





@endsection
