@extends('admin.layout.main')
@section('title', 'Books')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Book List</h4>
                <h6>Manage your Books</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('book.create') }}" class="btn btn-added"><img src="{{ asset('admin/img/icons/plus.svg') }} " alt="img"
                        class="me-1">Add New Book</a>
                    
            </div>
            <a href="{{ route('book.generatePDF') }}" class="btn btn-info">pdf</a>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Author Name</th>
                        <th>Front Img</th>
                        <th>Back Img</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')

@endsection
