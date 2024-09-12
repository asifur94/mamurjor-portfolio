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
            <a href="{{ route('blogCategories.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
    </div>

    <div class="container">
        <h2>Categories</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('blogCategories.edit', $category->id) }}" class="btn btn-primary">Edit</a>

                            <!-- Delete Form with Confirmation -->
                            <form action="{{ route('blogCategories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn  btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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


