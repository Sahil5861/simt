@extends('admin.layouts.app')
@section('title', 'Blogs Show')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">Blog</span>
                    </h4>                    
                </div>
            </div>            
        </div>    
        <div class="content">
            <div class="card">
                <div class="card-body">
                    @include('frontend.blogsdetail', ['blog' => $blog, 'blogs' => $blogs])
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
