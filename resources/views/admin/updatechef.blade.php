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

   <form action="{{url('updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">
     @csrf
       <div>
           <label>Chef Name</label>
           <input style="color:blue";type="text" name="name" value="{{$data->name}}">
       </div>

       <div>
           <label>Speciality</label>
           <input style="color:blue";type="text" name="speciality" value="{{$data->speciality}}">
       </div>

       <div>
           <label>Old Image</label>
          <img height="200px" width="200px" src="/chefimage/{{$data->image}}" alt="">
       </div>

       <div>
           <label>New Image</label>
           <input type="file"  name="image">
       </div>

       <div>
           <input style="color:blue"; type="submit" value="Update Chef">
       </div>





   </form>
       
   
     {{$data->name}}

    @include('admin.adminscript')
    </div>
    
  </body>
</html>