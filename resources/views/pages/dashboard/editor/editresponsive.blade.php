@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <form action="{{ route('admin.cssresponsivestyle.update') }}" id="formSubmit" method="POST"
            enctype="multipart/form-data">
            @csrf <!-- CSRF token for security -->
            @method('POST') <!-- Change from POST to PUT for updating -->

            <div class="row">
                <div class="col-12 col-md-12">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                </div>
                <div class="col-md-8">

                    <div class="card">
                        <div class="card-header">Responsive Styles</div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-12 mt-3">
                                    <label class="fw-bold">Style</label>
                                    <textarea name="css_content" class="form-control" rows="20">{{ $cssContent }}</textarea>
                                    @error('css_content')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Publish</div>
                        <div class="card-body">
                        </div>
                        <div class="card-footer">
                            <button class="form-control btn btn-primary" type="submit" name="switch_submit"
                                id="switch_submit">Update</button>
                        </div>
                    </div>


                </div>
            </div>
        </form>
    </div>



@endsection
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/theme/dracula.min.css">
    <!-- Optional theme -->
    <style>
        .CodeMirror {
            font-family: monospace;
            height: 600px !important;
            color: #000;
            direction: ltr;
        }

        .cm-s-dracula .CodeMirror-gutters,
        .cm-s-dracula.CodeMirror {
            background-color: #27262d !important;
            color: #f8f8f2 !important;
            border: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.16/mode/css/css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            CodeMirror.fromTextArea(document.querySelector('textarea[name="css_content"]'), {
                mode: "css",
                theme: "dracula", // You can use other themes like 'eclipse', 'monokai', etc.
                lineNumbers: true,
                lineWrapping: true,
                tabSize: 2,
                autofocus: true
            });
        });
    </script>
@endpush