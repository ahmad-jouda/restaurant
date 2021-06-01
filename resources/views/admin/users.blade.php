<x-app-layout>


</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    
  @include("admin.navbar")
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Users table</h4>
            <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                    <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                    @if($data->usertype=="0")
                    <td>
                        <a href="{{url('/deleteuser',$data->id)}}" class="btn btn-danger" >Delete</a>
                    </td>
                    @else
                    <td> Not Allowed </td>
                    @endif
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    

    @include("admin.adminscript")

  </body>
</html>