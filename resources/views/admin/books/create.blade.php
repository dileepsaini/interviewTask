@extends('admin.layout.main')
@section('title', 'Create book')
@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Create List</h4>
                <h6>Manage your Creates</h6>
            </div>
        </div>
        <form action="{{ route('book.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Author <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="author" id="author"
                            placeholder="Enter author name">
                            @error('author')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Front Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="frontImg" id="frontImg">
                        @error('frontImg')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Back Image <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="backImg" id="backImg">
                        @error('bakImg')
                         <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <textarea id="summernote" name="editordata"></textarea>
                    @error('editordata')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                </div>

            </div>
        </form>
    </div>
@endsection

@section('script')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#summernote').summernote();


        })
    </script>
@endsection
