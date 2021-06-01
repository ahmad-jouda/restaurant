<x-app-layout>


</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
      @include("admin.navbar")
        <div class="col-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input type="text" name="speciality" class="form-control" placeholder="Enter the speciality" required>
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="image" class="form-control file-upload-info" required >
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
              </form>
            </div>
            <div class="card">
              <div class="card-body">
              <h4 class="card-title">Inverse table</h4>
              <div class="table-responsive">
                  <table class="table table-dark">
                  <thead>
                      <tr>
                      <th> # </th>
                      <th> Image </th>
                      <th> Chef Name </th>
                      <th> Speciality </th>
                      <th style="text-align:center;">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $data)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><img src="/chefimage/{{$data->image}}" height="60"></td>
                          <td>{{$data->name}}</td>
                          <td>{{$data->speciality}}</td>
                          <td>
                            <div class="row">
                                <div class="col-sm-6" style="text-align:right;">
                                    <a href="{{url('/updatachef',$data->id)}}" class="btn btn-primary">Edit</a>
                                </div>
                                <div class="col-sm-6">
                                <a href="{{url('/deletechef',$data->id)}}" class="btn  btn-danger">Delete</a></div>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  </table>
              </div>
              </div>
            </div>
          </div>
          
      </div>
       
    </div>


    @include("admin.adminscript")

  </body>
</html>