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
              <form class="forms-sample" action="{{url('/updata', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" name="title" class="form-control" value="{{$data->title}}" required>
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="num" name="price" class="form-control" value="{{$data->price}}" required>
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea  class="form-control" rows="4" name="description" required>{{$data->description}}</textarea>
                </div>
                <div class="form-group">
                  <label>Old Image</label>
                  <div class="input-group col-xs-12">
                      <img src="/foodimage/{{$data->image}}" height="200" width="200">
                  </div>
                </div>
                <div class="form-group">
                  <label>New Image</label>
                  <div class="input-group col-xs-12">
                    <input type="file" name="image" class="form-control file-upload-info" required >
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Save</button>
              </form>
            </div>
          </div>
      </div>
       
    </div>


    @include("admin.adminscript")

  </body>
</html>