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

        <div class="container">
            <h1>Blog Details</h1>

            <div class="card">
                <div class="card-header">
                    <h4>{{ $blog->title }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>Author:</strong> {{ $blog->author->name ?? 'N/A' }}</p>
                    <p><strong>Category:</strong> {{ $blog->category->name ?? 'N/A' }}</p>
                    <p><strong>Published At:</strong> {{ $blog->published_at }}</p>
                    <div class="content">
                        <strong>Content:</strong>
                        <div>{!! $blog->content !!}</div>
                    </div>
                    @if($blog->image)
                        <div class="image mt-3">
                            <img src="{{ Storage::url('public/images/' . $blog->image) }}" alt="Blog Image" class="img-fluid">
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('blogs') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
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
<!--start switcher-->
@endsection
