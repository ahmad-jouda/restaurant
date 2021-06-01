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
        <div class="col-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Write a title" required>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="num" name="price" class="form-control" placeholder="price" required>
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image" required >
                  </div>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea  class="form-control" rows="4" name="description" placeholder="Description" required></textarea>
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
                      <th> Food Name </th>
                      <th> Price </th>
                      <th> Description </th>
                      <th style="text-align:center;">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $data)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td><img src="/foodimage/{{$data->image}}" height="60"></td>
                          <td>{{$data->title}}</td>
                          <td>{{$data->price}}</td>
                          <td>{{$data->description}}</td>
                          <td>
                            <div class="row">
                                <div class="col-sm-6" style="text-align:right;">
                                    <a href="{{url('/updataview',$data->id)}}" class="btn btn-primary">Edit</a>
                                </div>
                                <div class="col-sm-6">
                                <a href="{{url('/deletemenu',$data->id)}}" class="btn  btn-danger">Delete</a></div>
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