@extends('admin.layouts.master')

@section('maincontent')

<!--start header-->
  @include('admin.layouts.sections.navbar.navbar')
<!--end top header-->

<!--start sidebar-->
@include('admin.layouts.sections.menu.sidebar')
<!--end sidebar-->

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
      <x-breadcrumbs />
	<!--end breadcrumb-->


    <div class="page-breadcrumb  mb-3">
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-dark d-flex align-items-center gap-1">
                <i class="material-icons-outlined">keyboard_backspace</i> Back
            </button>
            <button type="button" class="btn btn-primary d-flex align-items-center gap-1">
                <i class="material-icons-outlined">create</i> Create
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Features</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Tiger Nixon</td>
                            <td>$320,800</td>
                            <td>3 days</td>
                            <td>
                                <ul>
                                    <li>01. Good quality</li>
                                </ul>
                            </td>
                            <td>
                                <div class="d-flex ">
                                    <button type="button" class="btn btn-dark d-flex align-items-center ">
                                        <i class="material-icons-outlined">edit</i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger d-flex align-items-center ">
                                        <i class="material-icons-outlined">delete</i> Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Features</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    </div>
  </main>
  <!--end main wrapper-->
<!--end main wrapper-->

<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->

<!--start footer-->
@include('admin.layouts.sections.footer.footer')
<!--end footer-->

<!--start switcher-->
@include('admin.layouts.sections.menu.switcher')
<!--start switcher-->

@endsection


