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
              <li class="breadcrumb-item active" aria-current="page">Create</li>
              
            </ol>
            <hr class="mb-3" style="background-color: rgb(67, 68, 69);">
          </nav>

          <div class="row header">
            <div class="col-sm-10 col-md-10">
                <h4>Create Content</h4>
            </div>
            <div class="col-sm-2 col-md-2">
                <a class="btn btn-primary float-right" href="{{ route('headercontent') }}">All Contents</a>
               
            </div>
          </div>

          {{--  --}}
                <form class="mt-5">
                    <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                    </div>
                    </div>


                    <div class="form-group row">
                        <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="designation" rows="3"></textarea>
                        </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Picture</label>
                            <div class="col-sm-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback"></div>
                              </div>
                            </div>
                            </div>






                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </div>
                </form>

          {{--  --}}

    </div>
   </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.includes.script')
    <!-- End custom js for this page -->
  </body>
</html>