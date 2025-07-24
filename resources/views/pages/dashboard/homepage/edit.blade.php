@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.updatehomepage', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            {{-- General Settings --}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Page Information</div>
                        <div class="card-body">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Publish</div>
                        <div class="card-body">
                            <input type="checkbox" name="switch_publish" id="switch_publish" {{ old('switch_publish', $page->status) ? 'checked' : '' }}>
                            <label for="switch_publish">Publish this page</label>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary w-100">Update</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Loop through sections --}}
            @php
                $sections = is_array($page->attributes) ? $page->attributes : json_decode($page->attributes ?? '[]', true);
            @endphp


            @foreach($sections as $index => $section)
                @php
                    $secName = $section['name'];
                    $data = $section['data'];
                @endphp

                <div class="card mt-4">
                    <div class="card-header">Section {{ $loop->iteration }} - {{ $secName }}</div>
                    <div class="card-body">
                        @if(!in_array($secName, ['section1', 'section6']))
                            <div class="mb-3">
                                <label class="fw-bold">Topic</label>
                                <input type="text" class="form-control" name="sections[{{ $secName }}][topic]"
                                    value="{{ old("sections.$secName.topic", $data['topic'] ?? '') }}">
                            </div>
                        @endif
                        @if(!in_array($secName, ['section1', 'section6']))
                            <div class="mb-3">
                                <label class="fw-bold">Image</label>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-md-12 mt-3">
                                        <!-- Display image if it exists -->
                                        @if($data['image'])
                                            <img src="{{ asset('public/assets/frontend/images/resource/' . $data['image']) }}"
                                                class="img-fluid" id="image_show{{ $secName }}" style="width:300px;" />
                                            <p class="btn mb-0 w-100 text-left" id="img_description{{ $secName }}">Click the image to
                                                edit or update</p>
                                            <button type="button" class="btn btn-link text-danger" name="remove_image{{ $secName }}"
                                                id="remove_image{{ $secName }}">Remove featured image</button>
                                        @else
                                            <p>No featured image uploaded yet.</p>
                                        @endif
                                    </div>

                                    <div class="col-12 col-md-12 mt-3">
                                        <input type="file" name="file_input" id="file_input{{ $secName }}" accept="image/*"
                                            class="d-none">
                                        <button type="button" class="btn btn-link" name="feature_image{{ $secName }}"
                                            id="feature_image{{ $secName }}">Set
                                            featured image</button>
                                        @error('feature_image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="old_sections[{{ $secName }}][image]"
                                    value="{{ old("old_sections.$secName.image", $data['image'] ?? '') }}">
                            </div>
                        @endif
                        @if(!in_array($secName, ['section4', 'section5', 'section6', 'section7']))
                            <div class="mb-3">
                                <label class="fw-bold">Description</label>
                                <textarea class="form-control" rows="4" id="description_{{ $secName }}"
                                    name="description_{{ $secName }}">{{ old("description_" . $secName, $data['discription'] ?? '') }}</textarea>
                            </div>
                        @endif
                        @if(!in_array($secName, ['section1', 'section4', 'section5', 'section6', 'section7']))
                            <div class="mb-3">
                                <label class="fw-bold">Sub Description</label>
                                <textarea class="form-control" rows="4" id="sub_description_{{ $secName }}"
                                    name="sub_description_{{ $secName }}">{{ old("sections.$secName.sub_discription", $data['sub_discription'] ?? '') }}</textarea>
                            </div>
                        @endif

                        @if(isset($data['attribute']))
                            <div class="row">
                                @if(!in_array($secName, ['section1', 'section2', 'section4', 'section5', 'section6', 'section7']))
                                    <div class="col-md-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="sections[{{ $secName }}][attribute][price]"
                                            value="{{ old("sections.$secName.attribute.price", $data['attribute']['price'] ?? '') }}">
                                    </div>

                                @endif

                                @if(!in_array($secName, ['section1', 'section6']))
                                    <div class="col-md-6">
                                        <label>Link</label>
                                        <input type="text" class="form-control" name="sections[{{ $secName }}][attribute][link]"
                                            value="{{ old("sections.$secName.attribute.link", $data['attribute']['link'] ?? '') }}">
                                    </div>
                                @endif
                            </div>
                        @endif

                        @if(isset($data['list']) && is_array($data['list']) && count($data['list']) > 0)
                            <label class="mt-3 fw-bold">List Items</label>
                            @foreach($data['list'] as $i => $item)
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sections[{{ $secName }}][list][{{ $i }}][title]"
                                            value="{{ $item['title'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sections[{{ $secName }}][list][{{ $i }}][content]"
                                            value="{{ $item['content'] }}">
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if(isset($data['counts']) && is_array($data['counts']) && count($data['counts']) > 0)
                            <label class="mt-3 fw-bold">Count Items</label>
                            @foreach($data['counts'] as $i => $item)
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="sections[{{ $secName }}][counts][{{ $i }}][title]"
                                            value="{{ $item['title'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control"
                                            name="sections[{{ $secName }}][counts][{{ $i }}][count]" value="{{ $item['count'] }}">
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach

            {{-- SEO Section --}}
            <div class="card mt-3">
                <div class="card-header">SEO Content</div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-12 mt-3">
                            <label class="fw-bold">SEO Keywords <span class="text-danger">{10-15 highly relevant
                                    keywords}</span></label>
                            <textarea rows="4" class="form-control mt-3" placeholder="SEO Keywords" name="seo_keywords"
                                id="seo_keywords">{{ old('seo_keywords', $page->seo_keywords) }}</textarea>
                            @error('seo_keywords')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12 col-md-12 mt-3">
                            <label class="fw-bold">SEO Description <span class="text-danger">{150-160
                                    characters}</span></label>
                            <textarea rows="4" class="form-control mt-3" placeholder="SEO Description"
                                name="seo_description"
                                id="seo_description">{{ old('seo_description', $page->seo_description) }}</textarea>
                            @error('seo_description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
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
        $(document).ready(function () {
            @foreach($sections as $section)
                @php $secName = $section['name']; @endphp
                if ($('#description_{{ $secName }}').length) {
                    console.log('description_{{ $secName }}');
                    CKEDITOR.replace('description_{{ $secName }}');
                }
                if ($('#sub_description_{{ $secName }}').length) {
                    CKEDITOR.replace('sub_description_{{ $secName }}');
                }

                $("#feature_image{{ $secName }}").click(function () {
                    $("#file_input{{ $secName }}").click(); // Open file input dialog
                });
                // When user selects an image
                $("#file_input{{ $secName }}").change(function (event) {
                    let file = event.target.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (e) {
                            $("#image_show{{ $secName }}").attr("src", e.target.result).removeClass("d-none");
                            $("#img_description{{ $secName }}, #remove_image{{ $secName }}").removeClass("d-none");
                            $("#feature_image{{ $secName }}").addClass("d-none");
                        };
                        reader.readAsDataURL(file);
                    }
                });


                // Remove Image
                $("#remove_image{{ $secName }}").click(function () {
                    $("#image_show{{ $secName }}").attr("src", "").addClass("d-none");
                    $("#img_description{{ $secName }}, #remove_image{{ $secName }}").addClass("d-none");
                    $("#feature_image{{ $secName }}").removeClass("d-none");
                    $("#file_input{{ $secName }}").val(""); // Clear file input
                });

            @endforeach
                                                                                                                                            });

    </script>
    </>
@endpush