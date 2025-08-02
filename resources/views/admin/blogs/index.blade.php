@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">Blogs List</span>
                    </h4>                    
                </div>
            </div>            
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="display: inline;">Blogs List</h3>
                    <a href="{{route('admin.blogs.create')}}" class="btn btn-sm btn-primary" style="float: right;">+ Add Blogs</a>
                </div>                
                <div class="card-body"> 
                    @if(session()->has('success'))
                    <div class="alert alert-success fade in alert-dismissible show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-danger fade in alert-dismissible show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
                        </button>
                        {{ session()->get('error') }}
                    </div>

                    @elseif(session()->has('message'))
                    <div class="alert alert-success fade in alert-dismissible show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true" style="font-size:20px; color:#fff;">×</span>
                        </button>
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="blogTable" class="table datatale table-bordered table-striped">
                            <thead>
                                <tr>     
                                    <th>#</th>                               
                                    <th>Title</th> 
                                    <th>Author Name</th>                                   
                                    <th>Author Designation</th>  
                                    <th>Categories</th>                                 
                                    <th>Key Words</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach($blogs as $key => $blog)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $blog->blog_title }}</td>                                    
                                    <td>                                        
                                        {{ $blog->author ? $blog->author->name : 'Unknown' }}
                                    </td>
                                  
                                    <td>
                                        {{ $blog->author ? $blog->author->designation : 'Unknown' }}
                                    </td> 
                                    <td>
                                        @foreach($blog->categories as $category)
                                            <span class="badge bg-primary">{{ $category->title }}</span>
                                        @endforeach
                                    </td>                                   
                                    <td>
                                        @php
                                            $keywords = explode(',', $blog->meta_keywords);
                                        @endphp
                                        @foreach($keywords as $keyword)
                                            <span class="badge bg-primary">{{ trim($keyword) }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $blog->created_at->format('d M Y h:i A') }}</td>

                                    <td>
                                        <div style="display: flex; justify-content:center;align-items:center; gap:5px;">
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('blogs.details', $blog->id) }}" target="__blank" class="btn btn-sm btn-info" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach         
                            </tbody>
                        </table>                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
