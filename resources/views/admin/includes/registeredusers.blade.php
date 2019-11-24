@extends('admin.layouts.master')

@section('link')
  Registered Users
@endsection

@section('title')
  <h2 class="text-center">Registered Users</h2>
@endsection

@section('content')



    <div class="col-lg-11 col-md-12">
        <div class="card">

          <div class="card-header">
            <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;">All Users</h4>
            <p class="card-category" style="font-size:15px; color:white; font-weight:bold;">List of all registered users</p>
          </div>



                <table class="table table-striped">
                    <thead class="text-warning">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Registerd at</th>

                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php

                        $totalusers= DB::table('users')->paginate(10);
                       ?>

                      @foreach($totalusers as $totaluser)

                    	<tr>
                        <td>{{$totaluser->id}}</td>
                        <td>{{$totaluser->name}}</td>
                        <td>{{$totaluser->email}}</td>
                        <td>{{$totaluser->gender}}</td>
                        <td>{{$totaluser->created_at}}</td>
                        <td>



                        </td>



                        </tr>
                        @endforeach

                    </tbody>

                    {{$totalusers->links()}}

                </table>


        </div>
    </div>
@endsection
