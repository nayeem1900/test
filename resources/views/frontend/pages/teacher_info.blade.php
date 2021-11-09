

@extends('frontend.layouts.master')
@section('content')<br>

    <section class="baner">

       <div class="container">
           <img src="{{url('public/frontend/image/t.jpg')}}" style="width:100%;">
       </div>

    </section>

    <!--about us-->


   <section class="teacher_info">
     <div class="container">
         <style>
             table, th, td {
                 border:1px solid black;
             }
         </style>
         <body>

         <h2 style="text-align: center">Teacher Information</h2>

         <table style="width:100%">
             <tr>
                 <th>Sl</th>
                 <th>Image</th>
                 <th>Name</th>
                 <th>Designation</th>
                 <th>Mobile</th>
                 <th>Subject</th>
                 <th>email</th>
             </tr>
             <tr>
                 <td>Emil</td>
                 <td>Tobias</td>
                 <td>Linus</td>
                 <td>Linus</td>
                 <td>Linus</td>
                 <td>Linus</td>
                 <td>Linus</td>
             </tr>

         </table>
         </body>

     </div>


   </section><br>



@endsection