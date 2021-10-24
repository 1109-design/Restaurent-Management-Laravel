<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
    <!-- Required meta tags -->
   @include('admin.admincss')
  </head>
  <body>
   
   @include("admin.navbar");

   <div style="position:relative; top:60px; right: -150px;">
     <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
         @csrf
          <div>
              <label>Title</label>
              <input style="color:blue;" type="text" name="title" value="{{$data->title}}" required >
          </div>

          <div>
              <label>Price</label>
              <input style="color:blue;"  type="num" name="price"  value="{{$data->price}}" required >
          </div>


          <div>
              <label>Old Image</label>
              <img height="150" width="150" src="/foodimage/{{$data->image}}" alt="">
          </div>

          <div>
              <label>Image</label>
              <input type="file" name="image"  required >
          </div>

          <div>
              <label>Description</label>
              <input style="color:blue;" type="text" name="description" value="{{$data->description}} value="{{$data->description}}" required >
          </div>
          <div>
              
              <input style= "color:black" type="submit" value="save"  >
          </div>




     </form>

    <div>
       
   
      <!-- page-body-wrapper ends -->

    @include('admin.adminscript')
    </div>
    
  </body>
</html>