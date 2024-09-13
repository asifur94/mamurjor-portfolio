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
                 <a href="{{ route('resume.create') }}" class="btn btn-primary">Add Resume</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Skill Year</th>
                <th>Description</th>
                <th>Designation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resumes as $resume)
                <tr>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->skill_year }}</td>
                    <td>{{ $resume->description }}</td>
                    <td>{{ $resume->designation }}</td>
                    <td>
                        <a href="{{ route('resume.edit', $resume->id) }}">Edit</a>
                        <form action="{{ route('resume.destroy', $resume->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
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


