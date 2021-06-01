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
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <h4 class="card-title">Reservation table</h4>
            <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                    <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Date </th>
                    <th> Time </th>
                    <th> Message </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->time}}</td>
                        <td>{{$data->message}}</td>
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