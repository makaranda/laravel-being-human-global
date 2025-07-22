@extends('layouts.app')

@section('content')



    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('admin.updatemainslider', $slider->id) }}" id="formSubmit" method="POST"
            enctype="multipart/form-data">
            @csrf <!-- CSRF token for security -->
            @method('PUT') <!-- Change from POST to PUT for updating -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Slider Content</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                @if($settings->switch_slider == 1)
                                <div class="col-12 col-md-12">
                                    <label class="fw-bold">Top Text</label>
                                    <input type="text" class="form-control mt-3" placeholder="Top Text" name="top_text"
                                        id="top_text" value="{{ old('top_text', $slider->icon) }}">
                                    @error('top_text')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @endif
                                <div class="col-12 col-md-12">
                                    <label class="fw-bold">Heading</label>
                                    <input type="text" class="form-control mt-3" placeholder="Heading" name="heading"
                                        id="heading" value="{{ old('heading', $slider->heading) }}">
                                    @error('heading')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if($settings->switch_slider == 1)
                                <div class="col-12 col-md-12 mt-3">
                                    <label class="fw-bold">Description</label>
                                    <textarea class="form-control mt-3" placeholder="Sub Heading" name="description"
                                        id="description">{{ old('description', $slider->description) }}</textarea>
                                    @error('sub_heading')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">Slider Image</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 mt-3">
                                    <!-- Display image if it exists -->
                                    @if($slider->banner)
                                        <img src="{{ asset('public/assets/frontend/img/sliders/' . $slider->banner) }}"
                                            class="img-fluid" id="image_show" />
                                        <p class="btn mb-0" id="img_description">Click the image to edit or update</p>
                                        <button type="button" class="btn btn-link text-danger" name="remove_image"
                                            id="remove_image">Remove Slider image</button>
                                    @else
                                        <p>No Slider image uploaded yet.</p>
                                    @endif
                                </div>

                                <div class="col-12 col-md-12 mt-3">
                                    <input type="file" name="file_input" id="file_input" accept="image/*" class="d-none">
                                    <button type="button" class="btn btn-link" name="feature_image" id="feature_image">Set
                                        Slider image</button>
                                    @error('feature_image')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">Publish</div>
                        <div class="card-body">
                            <label class="custom-switch">
                                <input class="form-check-input" type="checkbox" name="switch_publish" id="switch_publish"
                                    {{ old('switch_publish', $slider->status) ? 'checked' : '' }}>
                                <span class="status round"></span>
                            </label>
                            <span class="form-check-label ms-2">Default switch to Publish Page</span>
                        </div>
                        <div class="card-footer">
                            <button class="form-control btn btn-primary" type="submit">Update</button>
                        </div>
                    </div>

                    <!-- Slider Type Switch (Image/Video) -->
                    <div class="card">
                        <div class="card-header">Slider Type</div>
                        <div class="card-body">
                            <label class="custom-switch">
                                <input type="checkbox" name="switch_slider" id="switch_slider" {{ old('switch_slider', $slider->switch_slider) ? 'checked' : '' }} disabled>
                                <span class="slider round"></span>
                            </label>
                            {{-- <span class="form-check-label ms-2">Choose Slider Type</span> --}}
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>



@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        // CKEDITOR.replace('short_description');
        CKEDITOR.replace('description');


        $(document).ready(function () {
            // Click on "Set Featured Image"
            $("#feature_image").click(function () {
                $("#file_input").click(); // Open file input dialog
            });

            // When user selects an image
            $("#file_input").change(function (event) {
                console.log('updated');
                let file = event.target.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        $("#image_show").attr("src", e.target.result).removeClass("d-none");
                        $("#img_description, #remove_image").removeClass("d-none");
                        $("#feature_image").addClass("d-none");
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Remove Image
            $("#remove_image").click(function () {
                $("#image_show").attr("src", "").addClass("d-none");
                $("#img_description, #remove_image").addClass("d-none");
                $("#feature_image").removeClass("d-none");
                $("#file_input").val(""); // Clear file input
            });


        });
    </script>
@endpush