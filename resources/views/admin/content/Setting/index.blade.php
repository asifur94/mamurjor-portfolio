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
                    <h5 class="mb-4">Settings Form</h5>

                    <!-- Map -->
                    <div class="row mb-3">
                        <label for="map" class="col-sm-3 col-form-label">Map Embed Code</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="map" name="map" rows="3" placeholder="Embed Map Code"></textarea>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="row mb-3">
                        <label for="facebook_url" class="col-sm-3 col-form-label">Facebook URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="facebook_url" name="facebook_url" placeholder="Facebook URL">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="twitter_url" class="col-sm-3 col-form-label">Twitter URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="twitter_url" name="twitter_url" placeholder="Twitter URL">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="linkedin_url" class="col-sm-3 col-form-label">LinkedIn URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="LinkedIn URL">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="instagram_url" class="col-sm-3 col-form-label">Instagram URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="instagram_url" name="instagram_url" placeholder="Instagram URL">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="github_url" class="col-sm-3 col-form-label">GitHub URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="github_url" name="github_url" placeholder="GitHub URL">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="other_url" class="col-sm-3 col-form-label">Other URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="other_url" name="other_url" placeholder="Other URL">
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="row mb-3">
                        <label for="phone_number" class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address"></textarea>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="row mb-3">
                        <label for="cta_title" class="col-sm-3 col-form-label">CTA Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cta_title" name="cta_title" placeholder="CTA Title">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="btn_text" class="col-sm-3 col-form-label">Button Text</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="btn_text" name="btn_text" placeholder="Button Text">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="btn_url" class="col-sm-3 col-form-label">Button URL</label>
                        <div class="col-sm-9">
                            <input type="url" class="form-control" id="btn_url" name="btn_url" placeholder="Button URL">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </div>

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


