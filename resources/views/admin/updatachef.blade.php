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
              <form class="forms-sample" action="{{url('/updatafoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Chef Name</label>
                  <input type="text" name="name" class="form-control" value="{{$data->name}}" required>
                </div>
                <div class="form-group">
                  <label>Speciality</label>
                  <input type="text" name="speciality" class="form-control" value="{{$data->speciality}}" required>
                </div>
                <div class="form-group">
                  <label>Old Image</label>
                  <div class="input-group col-xs-12">
                      <img src="/chefimage/{{$data->image}}" height="200" width="200">
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