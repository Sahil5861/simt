@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">@if (isset($blog)) Update @else Add @endif Blog</span>
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
                    <form method="post" action="{{route('admin.blogs.store')}}" enctype="multipart/form-data">
                        @csrf

                        @if (isset($blog))
                            <input type="hidden" name="id" value="{{$blog->id}}">
                        @endif
                        <div class="card-body">                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blog Title <span class="astrick">*</span></label>
                                        <input type="text" class="form-control" name="blog_title" id="blog_title" value="@if(isset($blog)){{$blog->blog_title}}@endif" placeholder="Enter Title" required>
                                        @error('title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category_ids">Select Categories:</label>                                        
                                        {{-- <span id="addCategory" style="border: 1px solid #000; padding:5px;">+</span> --}}
                                        <select name="category_ids[]" multiple required class="form-control selectpicker" data-live-search="true" data-live-search-style="begins">                                        
                                            @foreach ($categories as $category)                                            
                                                <option value="{{ $category->id }}"
                                                    {{ isset($blog) && in_array($category->id, $blog->categories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>SEO Url <span class="astrick">*</span> <span id="add_seo" role="button" onclick="generateSEO();" style="padding:3px;" title="Generate SEO Url"><i class="fas fa-exchange-alt"></i></span> </label>
                                        <input type="text" class="form-control" id="seo_url" name="seo_url" value="@if(isset($blog)){{$blog->seo_url}}@endif" placeholder="Enter SEO Url" required>
                                        @error('seo_url')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Select Blog Image <span class="astrick">*</span></label>
                                        <input type="file" class="form-control" name="image" accept="image/*">
                                        @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    @if (isset($blog))
                                        <img src="{{asset($blog->image)}}" alt="{{$blog->blog_title}}" width="150" class="img-thumbnail">
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="author_id">Select Author</label>
                                        <select name="author_id" id="author_id" class="form-control selectpicker" data-live-search="true" data-live-search-style="begins">
                                            <option value="">Select Author</option>
                                            @foreach ($authors as $key => $author)
                                                <option data-image="{{$author->author_image}}" data-name="{{$author->name}}" data-designation="{{$author->designation}}" value="{{$author->id}}" {{ (isset($current_author) && $author->id == $current_author->id) ? 'selected' : ''}}>{{$author->name}}</option>
                                            @endforeach                                            
                                        </select>
                                        @if (isset($current_author))                                            
                                            <img src="..." alt="image" id="author_image" width="200" height="300" class="img-thumbnail my-2">
                                        @endif
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Select Author Image</label>
                                        <input type="file" class="form-control" name="author_image" accept="image/*">
                                        @error('author_image')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    @if (isset($blog))
                                        <img src="{{asset($blog->author_image)}}" alt="{{$blog->blog_title}}" width="150" class="img-thumbnail">
                                    @endif
                                </div> --}}
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <lable>Author Designation <span class="astrick">*</span></lable>
                                        <input type="text" name="author_designation" id="author_designation"  value="{{isset($blog) ? $blog->author_designation : ''}}" id="author_designation" class="form-control" required placeholder="Author Designation" readonly>
                                        @error('author_designation')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>                            
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" value="@if(isset($blog)){{$blog->meta_title}}@endif" placeholder="Meta Title" required>
                                        @error('meta_title')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>

                                @if (isset($blog))
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Meta Keywords <span><small>(comma separated)</small></span></label>
                                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" required placeholder="Meta Keywords" value="{{isset($blog) ? $blog->meta_keywords :''}}">
                                            {{-- <select name="meta_keywords[]" id="meta_keywords" class="form-control" multiple>
                                                <option value="">Select Keywords</option>
                                                <option value="key_1" {{ in_array('key_1', explode(',', $blog->meta_keywords ?? '')) ? 'selected' : '' }}>Key 1</option>
                                                <option value="key_2" {{ in_array('key_2', explode(',', $blog->meta_keywords ?? '')) ? 'selected' : '' }}>Key 2</option>
                                                <option value="key_3" {{ in_array('key_3', explode(',', $blog->meta_keywords ?? '')) ? 'selected' : '' }}>Key 3</option>
                                            </select> --}}
                                            @error('meta_keywords')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>                                    
                                @else 
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Meta Keywords <span> <small>(comma separated)</small></span></label>
                                            {{-- <select name="meta_keywords[]" id="meta_keywords" class="form-control" multiple>
                                                <option value="">Select Keywords</option>
                                                <option value="key_1">Key 1</option>
                                                <option value="key_2">Key 2</option>
                                                <option value="key_3">Key 3</option>
                                            </select> --}}

                                            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" required placeholder="Meta Keywords">
                                            @error('meta_keywords')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endif

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        {{-- <textarea class="ckeditor form-control" id="meta_description" name="meta_description" placeholder="Describe the Category">@if(isset($blog)){{$blog->meta_description}}@endif</textarea> --}}
                                        <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="Meta Description" required value="{{ isset($blog) ? $blog->meta_description : '' }}">

                                    </div>
                                </div>


                                <div class="col-lg-12">                                    
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="ckeditor form-control" name="description" placeholder="Describe the Category">@if(isset($blog)){{$blog->description}}@endif</textarea>                                        
                                    </div>
                                </div>                                
                            </div>
                            <input type="hidden" name="id" value="@if(isset($blog)){{$blog->id}}@endif">
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

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla magni quia blanditiis nostrum beatae porro pariatur, repudiandae expedita iste neque quas corrupti iure natus, quo perferendis? Reprehenderit ex maxime adipisci nihil fugit molestiae magni voluptatum sit at veniam explicabo architecto ipsa, corrupti quidem nisi sequi. --}}



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

<script>
    $(document).ready(function(){
        var uploadUrl = "{{ route('admin.upload.image') }}";
        var csrfToken = "{{ csrf_token() }}";
        tinymce.init({
                // imagetools
                selector: '.ckeditor',
                relative_urls: false, // ✅ Prevents relative URLs
                remove_script_host: false, // ✅ Ensures full URLs are used
                convert_urls: true, // ✅ Converts all URLs to absolute
                plugins: 'lists link image imagetools code', // Add plugins you want (optional)
                toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image', // Customize toolbar (optional)
                images_upload_url: uploadUrl ,
                automatic_uploads: true,
                file_picker_types: 'image',
                images_upload_handler: function (blobInfo, success, failure) {
                    let formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());

                    fetch(uploadUrl, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken, 
                            'Accept': 'application/json'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(result => {
                        if (result.location) {
                            success(result.location); // ✅ Image URL returned from Laravel
                        } else {
                            failure('Image upload failed.');
                        }
                    }).catch(error => failure('Image upload failed: ' + error.message));
                },
                menubar: true, // Hide the menubar (optional)
                height: 800,
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
    function generateSEO(){
        let title = $('#blog_title').val().trim(); // Get title and remove extra spaces
        console.log(title);
        
        let seo_url = $('#seo_url');

        if (title !== '') {
            let formattedTitle = title.replace(/\s+/g, '-').toLowerCase(); // Replace spaces with "_"
            seo_url.val(formattedTitle); // Set the value in the SEO URL field
        }
    }
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
