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
        <div class="page-breadcrumb  mb-3">
            <div class="d-flex justify-content-between">

                <a href="{{ route('package') }}" class="btn btn-primary d-flex align-items-center gap-1">
                    <i class="material-icons-outlined">keyboard_backspace</i> Back
                </a>

            </div>
        </div>


         <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Hero Area</h5>
                    <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Package Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" name="duration" id="duration" class="form-control" required>
                        </div>
                        <!-- Features Input -->
                        <div class="form-group">
                            <label for="features">Features</label>
                            <div id="features-wrapper">
                                <div class="d-flex mb-2">
                                    <textarea name="features[]" id="features" class="form-control" placeholder="Enter feature"></textarea>
                                    <button type="button" class="btn btn-success ml-2" onclick="addFeature()"><i class="material-icons-outlined">add</i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <input type="text" name="user_id" id="user_id" class="form-control">
                        </div>

                        <button type="submit" class="btn mt-4 btn-primary">Create Package</button>
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
