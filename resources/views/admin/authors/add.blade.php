@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">@if (isset($author)) Update @else Add @endif Author</span>
                    </h4>                    
                </div>
            </div>            
        </div>
        @if(session()->has('message'))
        <div class="alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
            </button>
            {{ session()->get('message') }}
        </div>
        @elseif(session()->has('error'))
        <div class="alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
            </button>
            {{ session()->get('error') }}
        </div>
        @endif

        <div class="content">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{route('admin.authors.store')}}" enctype="multipart/form-data">
                        @csrf                        
                        <div class="card-body">                            
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Author Name <span class="astrick">*</span></label>
                                        <input type="text" class="form-control" name="author_name" value="@if(isset($author)){{$author->name}}@endif" placeholder="Enter Author Name" required>
                                        @error('author_name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Author Designation <span class="astrick">*</span></label>
                                        <input type="text" class="form-control" name="author_designation" value="@if(isset($author)){{$author->designation}}@endif" placeholder="Enter Designation" required>
                                        @error('author_designation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Select Author Image <span class="astrick">*</span></label>
                                        <input type="file" class="form-control" name="author_image" accept="image/*">
                                        @error('author_image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    @if (isset($author))
                                        <img src="{{asset($author->author_image)}}" alt="{{$author->name}}" width="150" class="img-thumbnail">
                                    @endif
                                </div>
                                <div class="col-lg-12">                                    
                                    <div class="form-group">
                                        <label>About Author</label>
                                        <textarea class="ckeditor form-control" name="about_author" placeholder="Describe the Category">@if(isset($author)){{$author->about}}@endif</textarea>                                        
                                    </div>
                                </div>                                
                            </div>
                            <input type="hidden" name="id" value="@if(isset($author)){{$author->id}}@endif">
                            <div class="btn-wrap mt-3">
                                <button type="submit" class="btn btn-primary btn-block">{{isset($author) ? 'Update' : 'Add'}}</button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

<script>
    $(document).ready(function(){
        tinymce.init({
                selector: '.ckeditor',
                plugins: 'lists link image code', // Add plugins you want (optional)
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image', // Customize toolbar (optional)
                menubar: true, // Hide the menubar (optional)
                height: 300,
                setup: function (editor) {

                    var placeholder = 'Enter Your Text';

                    function insertPlaceholder(){
                        if (editor.getContent() === '') {
                            editor.setContent('<p style="color: #888;">' + placeholder+'</p>');
                        }
                    }
                    editor.on('init', function(){
                        insertPlaceholder();
                    });
                    editor.on('focus', function (){
                        if (editor.getContent({format: 'text'}) === placeholder) {
                            editor.setContent('');
                        }
                    });
                    editor.on('blur', function(){
                        if (editor.getContent() === '') {
                            insertPlaceholder();
                        }
                    });

                    editor.on('change', function () {
                        editor.save();
                    });
                },
            });        
    })
</script>


@endsection
