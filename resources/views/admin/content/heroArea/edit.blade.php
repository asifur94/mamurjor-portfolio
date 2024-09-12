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
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Hero Area</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->


         <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Hero Area</h5>
                    <form action="{{ route('heroUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Heading Display -->
                        <div class="row mb-3">
                            <label for="heading" class="col-sm-3 col-form-label">Heading</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="heading" name="heading" value="{{ old('heading', $heroArea->heading) }}">
                            </div>
                        </div>

                        <!-- Sub Heading Display -->
                        <div class="row mb-3">
                            <label for="subheading" class="col-sm-3 col-form-label">Sub Heading</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="subheading" name="subheading" value="{{ old('subheading', $heroArea->subheading) }}">
                            </div>
                        </div>

                        <!-- Background Image Display -->
                        <div class="row mb-3">
                            <label for="background_image" class="col-sm-3 col-form-label">Background Image</label>
                            <div class="col-sm-9">
                                @if($heroArea->background_image)
                                    <img src="{{ asset('storage/' . $heroArea->background_image) }}" height="180" alt="Background Image">
                                @endif
                                <input type="file" class="form-control" id="background_image" name="background_image">
                            </div>
                        </div>

                        <!-- Resume Display -->
                        <div class="row mb-3">
                            <label for="resume" class="col-sm-3 col-form-label">Resume</label>
                            <div class="col-sm-9">
                                @if($heroArea->file_path)
                                    <a href="{{ asset('storage/' . $heroArea->file_path) }}" class="btn btn-outline-primary">Download Resume</a>
                                @endif
                                <input type="file" class="form-control" id="resume" name="resume">
                            </div>
                        </div>

                        <!-- Button Text Display -->
                        <div class="row mb-3">
                            <label for="button_text" class="col-sm-3 col-form-label">Button Text</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ old('button_text', $heroArea->button_text) }}">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>



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
