@extends('admin.layouts.master')

@section('link')
  Sizes
@endsection

@section('title')
  <h2 class="text-center">Sizes</h2>
@endsection

@section('content')



    <div class="col-lg-11 col-md-12">
        <div class="card">

          <div class="card-header">
          <a href="{{ route('size.create') }}" class="btn btn-primary btn-sm">Add Size<div class="ripple-container"></div></a>

          </div>
          @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif


                <table class="table table-striped">
                    <thead class="text-warning">
                    <tr>
                        <th>Size </th>
                        <th>Created at</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($sizes as $size)

                    	<tr>
                        <td>{{$size->size}}</td>
                        <td>{{$size->created_at}}</td>
                        <td>
                        <div class="d-inline-flex">
                               <form action="{{route('size.destroy',$size->id)}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}

                                 <button class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?')"><span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>



                             <a href="{{route('size.edit',['id'=>$size->id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                               <span class="fa fa-edit" aria-hidden="true"></span>
                             </a>
                        </div>


                        </td>

                        </tr>
                        @endforeach

                    </tbody>

                    {{$sizes->links()}}

                </table>


        </div>
    </div>
@endsection
