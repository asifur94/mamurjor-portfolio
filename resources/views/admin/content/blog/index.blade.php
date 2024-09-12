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

        <div class="page-breadcrumb mb-3">
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-dark d-flex align-items-center gap-1">
                    <i class="material-icons-outlined">keyboard_backspace</i> Back
                </button>
                <button type="button" class="btn btn-primary d-flex align-items-center gap-1">
                    <i class="material-icons-outlined">create</i> Create
                </button>
            </div>
        </div>

        <div class="container">
            <h1>Blog List</h1>
            <a href="{{ route('blogs.create') }}" class="btn btn-success mb-3">Create New Blog</a>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $key => $blog)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->author->name ?? 'N/A' }}</td>
                        <td>{{ $blog->category->name ?? 'N/A' }}</td>

                        <td>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-info btn-sm">
                                <i class="material-icons-outlined">visibility</i>
                            </a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm">
                                <i class="material-icons-outlined">edit</i>
                            </a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="material-icons-outlined">delete</i>
                                </button>
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

<!--start overlay-->
<div class="overlay btn-toggle"></div>
<!--end overlay-->

<!--start footer-->
@include('admin.layouts.sections.footer.footer')
<!--end footer-->

<!--start switcher-->
@include('admin.layouts.sections.menu.switcher')
<!--end switcher-->

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#blogTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('blogs') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'title', name: 'title' },
                { data: 'author.name', name: 'author.name' },
                { data: 'category.name', name: 'category.name' },
                { data: 'published_at', name: 'published_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>

@endsection

@endsection
