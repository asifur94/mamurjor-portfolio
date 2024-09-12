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
                    <h5 class="mb-4">{{ isset($item) ? 'Edit Item' : 'Create Item' }}</h5>

                    <!-- Form Starts -->
                    <form action="{{ isset($item) ? route('items.update', $item->id) : route('items.store') }}" method="POST">
                        @csrf
                        @if(isset($item))
                            @method('PUT')
                        @endif

                        <div class="row mb-3">
                            <label for="title" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title', $item->title ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sub_title" class="col-sm-3 col-form-label">Sub Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sub_title" name="sub_title" placeholder="Sub Title" value="{{ old('sub_title', $item->sub_title ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="description" name="description" cols="30" rows="5" placeholder="Description">{{ old('description', $item->description ?? '') }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="btn_text" class="col-sm-3 col-form-label">Button Text</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="btn_text" name="btn_text" placeholder="Button Text" value="{{ old('btn_text', $item->btn_text ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="btn_url" class="col-sm-3 col-form-label">Button URL</label>
                            <div class="col-sm-9">
                                <input type="url" class="form-control" id="btn_url" name="btn_url" placeholder="Button URL" value="{{ old('btn_url', $item->btn_url ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birth_date" class="col-sm-3 col-form-label">Birth Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="birth_date" name="birth_date" placeholder="Birth Date" value="{{ old('birth_date', $item->birth_date ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{ old('email', $item->email ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone', $item->phone ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="skype_username" class="col-sm-3 col-form-label">Skype Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="skype_username" name="skype_username" placeholder="Skype Username" value="{{ old('skype_username', $item->skype_username ?? '') }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="address" name="address" cols="30" rows="5" placeholder="Address">{{ old('address', $item->address ?? '') }}</textarea>
                            </div>
                        </div>

                        <!-- Submit and Delete Buttons -->
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-success px-4">{{ isset($item) ? 'Update' : 'Save' }}</button>
                                    @if(isset($item))
                                        <form action="{{ route('items.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger px-4">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Form Ends -->

                </div>
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


