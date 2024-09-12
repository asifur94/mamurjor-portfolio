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


              <div class="col-lg-12 grid-margin stretch-card">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Striped Table</h4>
                        <p class="card-description">  <a href="{{ route('heroform') }}">Add New </a> <code>.table-striped</code>
                        </p>
                        <div class="table-responsive">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th> SL.No </th>
                                <th> skill_year </th>
                                <th> designation </th>
                                <th> discription </th>

                                <th> Action </th>
                              </tr>
                            </thead>
                            <tbody>

                                @foreach ($expertiselist as $singlevalue)


                              <tr>
                                <td class="py-1">
                                 1
                                </td>

                                <td>
                                  <div class="">
                                        {{ $singlevalue->skill_year }}
                                </td>
                                <td> {{ $singlevalue->designation }} </td>
                                <td> {{ $singlevalue->discription }} </td>
                                <td> <a href="">Edit</a> || <a href=""> Delete </a> </td>
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
