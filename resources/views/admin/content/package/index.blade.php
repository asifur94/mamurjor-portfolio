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
            <a href="{{ route('package.create') }}" class="btn btn-primary d-flex align-items-center gap-1">
                <i class="material-icons-outlined">create</i> Create
            </a>

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
                            <th>User</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->name }}</td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->duration }}</td>
                            <td>{{ $package->features }}</td>
                            <td>{{ $package->user_id }}</td>
                            <td>
                                <a href="{{ route('package.edit', $package->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('package.destroy', $package->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
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


