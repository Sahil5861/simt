@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">@if (isset($blogcategory)) Update @else Add @endif Blog Category</span>
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
                    <form method="post" action="{{route('admin.blogs.category.store')}}" enctype="multipart/form-data">
                        @csrf

                        @if (isset($blogcategory))
                            <input type="hidden" name="id" value="{{$blogcategory->id}}">
                        @endif
                        <div class="card-body">                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Category Title <span class="astrick">*</span></label>
                                        <input type="text" class="form-control" name="category_title" value="@if(isset($blogcategory)){{$blogcategory->title}}@endif" placeholder="Enter Title" required>
                                        @error('category_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>                                 
                            </div>
                            <input type="hidden" name="id" value="@if(isset($blogcategory)){{$blogcategory->id}}@endif">
                            <div class="btn-wrap mt-3">
                                <button type="submit" class="btn btn-primary btn-block">{{isset($blog) ? 'Update' : 'Add'}}</button>
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

<script>
    $('#author_id').on('change', function () {
        let selectedOption = $(this).find(':selected'); // Get the selected option
        let image = selectedOption.data('image'); // Get data-name from selected option
        let designation = selectedOption.data('designation'); // Get data-designation from selected option

        
        $('#author_designation').val(designation);

        $('#author_image').attr('src', `{{ asset('') }}${image}`);
        console.log(image, designation); // Check if values are correct
    }); 


    $(document).ready(function (){
        let selectedOption = $('#author_id').find(':selected'); // Get the selected option
        let image = selectedOption.data('image'); // Get data-name from selected option
        let designation = selectedOption.data('designation'); // Get data-designation from selected option

        
        $('#author_designation').val(designation);

        $('#author_image').attr('src', `{{ asset('') }}${image}`);
        console.log(image, designation); // Check if values are correct
    })

</script>


@endsection
