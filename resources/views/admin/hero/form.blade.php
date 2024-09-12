@extends('layouts.admin')


@section('maincontent')

<div class="container-scroller">
 @include('adminpart.probanner')
    <!-- partial:partials/_navbar.html -->
    @include('adminpart.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('adminpart.sidebar')
      <!-- partial -->
      <div class="main-panel">

        <div class="content-wrapper">
            <div class="row">


                <div class="card">
                    <div class="card-body">
                      <h4 class="card-title"><a href="{{route('expertiselist')}}">Back</a></h4>
                      <p class="card-description"> Basic form elements </p>
                      <form action="" method="POST" class="forms-sample">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">skill_year</label>
                          <input type="text" name="skill_year" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>

                      </form>
                    </div>
                  </div>




            </div>
          </div>



       {{-- @include('adminpart.mainpanel') --}}
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       @include('adminpart.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

@endsection
