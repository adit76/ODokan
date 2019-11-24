@extends('admin.layouts.master')

@section('link')
  Contributors
@endsection

@section('title')
  <h2 class="text-center">Contributors</h2>
@endsection

@section('content')



    <div class="col-lg-11 col-md-12">
        <div class="card">

          <div class="card-header">
          <a href="{{ route('contributor.create') }}" class="btn btn-primary btn-sm">Add Contributor<div class="ripple-container"></div></a>

          </div>
          @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif


                <table class="table table-striped">
                    <thead class="text-warning">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Created at</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                      @foreach($contributors as $contributor)

                    	<tr>
                        <td>{{$contributor->name}}</td>
                        <td>{{$contributor->email}}</td>
                        <td>{{$contributor->type}}</td>
                        <td>{{$contributor->created_at}}</td>
                        <td>
                        <div class="d-inline-flex">
                               <form action="{{route('contributor.destroy',$contributor->id)}}" method="post">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}

                                 <button class="btn btn-outline-danger"
                                                    onclick="return confirm('Are you sure?')"><span class="fa fa-trash" aria-hidden="true"></span>
                                 </button>
                               </form>



                             <a href="{{route('contributor.edit',['id'=>$contributor->id])}}" class="btn btn-outline-primary" onclick="return edit_item()">
                               <span class="fa fa-edit" aria-hidden="true"></span>
                             </a>
                        </div>


                        </td>

                        </tr>
                        @endforeach

                    </tbody>

                    {{$contributors->links()}}

                </table>


        </div>
    </div>
@endsection
