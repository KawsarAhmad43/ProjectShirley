<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.includes.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin.includes.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
        @include('admin.includes.navbar')
        <!-- partial -->

   <div class="main-panel">
    <div class="content-wrapper">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Header Content</a></li>
              <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
            <hr class="mb-3" style="background-color: rgb(67, 68, 69);">
          </nav>

          {{--  --}}

          <div class="row header">
            <div class="col-sm-10 col-md-10">
                <h4>All Contents</h4>
            </div>
            <div class="col-sm-2 col-md-2">
                <a class="btn btn-primary float-right" href="{{ route('headercontent.create') }}">Add Content</a>
               
            </div>
          </div>
          {{--  --}}
          <div class="row">
            <div class="col-md-12">
         <table class="table table-dark mt-2">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pic</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td  style="width: 80px;">
                        <img src="https://leaveitwithme.com.au/wp-content/uploads/2013/11/dummy-image-square.jpg" width="100%" alt="">
                    </td>
                    <td>Otto</td>
                    <td>lore</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>
        </div>

          {{--  --}}

    </div>
   </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.includes.script')
    <!-- End custom js for this page -->
  </body>
</html>