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
							<a href="{{ route('package') }}" class="btn btn-primary d-flex align-items-center gap-1">
                                <i class="material-icons-outlined">keyboard_backspace</i> Back
                            </a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->


         <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Hero Area</h5>
                    <form action="{{ route('package.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Package Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $package->name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $package->price) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration" class="form-control" value="{{ old('duration', $package->duration) }}" required>
                        </div>

                        <!-- Features Input -->
                        <div class="form-group">
                            <label for="features">Features</label>
                            <div id="features-wrapper">
                                @foreach(explode(', ', $package->features) as $feature)
                                    <div class="d-flex mb-2">
                                        <textarea name="features[]" class="form-control" placeholder="Enter feature">{{ $feature }}</textarea>
                                        <button type="button" class="btn btn-danger ml-2" onclick="removeFeature(this)"><i class="material-icons-outlined">delete</i></button>
                                    </div>
                                @endforeach
                                <div class="d-flex mb-2">
                                    <textarea name="features[]" class="form-control" placeholder="Enter feature"></textarea>
                                    <button type="button" class="btn btn-success ml-2" onclick="addFeature()"><i class="material-icons-outlined">add</i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <input type="text" name="user_id" id="user_id" class="form-control" value="{{ $package->user_id }}">
                        </div>

                        <button type="submit" class="btn mt-4 btn-primary">Update Package</button>
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




<script>
    function addFeature() {
        const wrapper = document.getElementById('features-wrapper');
        const featureDiv = document.createElement('div');
        featureDiv.className = 'd-flex mb-2';

        featureDiv.innerHTML = `
            <textarea name="features[]" class="form-control" placeholder="Enter feature"></textarea>
            <button type="button" class="btn btn-danger ml-2" onclick="removeFeature(this)"><i class="material-icons-outlined">delete</i></button>
        `;

        wrapper.appendChild(featureDiv);
    }

    function removeFeature(button) {
        const featureDiv = button.parentNode;
        featureDiv.remove();
    }
</script>
@endsection
