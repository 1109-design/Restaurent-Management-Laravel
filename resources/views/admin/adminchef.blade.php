<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.admincss')
  </head>
  <body>
   
   @include("admin.navbar");

   <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
      @csrf
       <div>
             <label>Name</label>
             <input  style="color:blue;" type="text"  name="name" required placeholder="Enter a name">
       </div>

       <div>
             <label>Speciality</label>
             <input  style="color:blue;" type="text"  name="speciality" required placeholder="Enter the speciality">
       </div>


       <div>
            
             <input   type="file"  name="image" required >
       </div>


       <div>
             
             <input  style="color:blue;"  type="submit"  value="Save">
       </div>






   </form>

   <table bgcolor="black";>

   <tr>
         <th style="padding:30px";>Chef Name</th>
         <th  style="padding:30px";>Speciality</th>
         <th  style="padding:30px";>Image</th>
         <th style="padding:30px";>action</th>
         <th style="padding:30px";>action 2</th>
   </tr>
  @foreach($data as $data)
   <tr  align="center">
         <td>{{$data->name}}</td>
         <td>{{$data->speciality}}</td>
         <td><img height="100px"  width="100px" src="/chefimage/{{$data->image}}" alt=""></td>
         <td><a href="{{url('/updatechef', $data->id)}}">update</a></td>
         <td><a href="{{url('/deletechef', $data->id)}}">Delete</a></td>
   </tr>

   @endforeach



   </table>
       
   
      <!-- page-body-wrapper ends -->

    @include('admin.adminscript')
    </div>
    
  </body>
</html>