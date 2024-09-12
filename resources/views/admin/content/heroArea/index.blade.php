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


         <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Hero Area</h5>

                    <!-- Heading Display -->
                    <div class="row mb-3">
                        <label for="heading" class="col-sm-3 col-form-label">Heading</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">{{ $heroArea->heading ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <!-- Sub Heading Display -->
                    <div class="row mb-3">
                        <label for="subheading" class="col-sm-3 col-form-label">Sub Heading</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">{{ $heroArea->subheading ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <!-- Background Image Display -->
                    <div class="row mb-3">
                        <label for="background_image" class="col-sm-3 col-form-label">Background Image</label>
                        <div class="col-sm-9">
                            @if(isset($heroArea->background_image) && !empty($heroArea->background_image))
                                <img src="{{ asset('storage/' . $heroArea->background_image) }}" height="180" alt="Background Image">
                            @else
                                <label class="col-form-label">No background image uploaded</label>
                            @endif
                        </div>
                    </div>

                    <!-- Resume Display -->
                    <div class="row mb-3">
                        <label for="resume" class="col-sm-3 col-form-label">Resume</label>
                        <div class="col-sm-9">
                            @if(isset($heroArea->file_path) && !empty($heroArea->file_path))
                                <a href="{{ asset('storage/' . $heroArea->file_path) }}" class="btn btn-outline-primary">Download Resume</a>
                            @else
                                <label class="col-form-label">No resume uploaded</label>
                            @endif
                        </div>
                    </div>

                    <!-- Button Text Display -->
                    <div class="row mb-3">
                        <label for="button_text" class="col-sm-3 col-form-label">Button Text</label>
                        <div class="col-sm-9">
                            <label class="col-form-label">{{ $heroArea->button_text ?? 'N/A' }}</label>
                        </div>
                    </div>

                    <!-- Edit Button -->
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <a href="{{ route('heroEdit') }}" class="btn btn-grd-royal px-4">Edit</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



         </div><!--end row-->
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
