@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">Auhors List</span>
                    </h4>                    
                </div>
            </div>            
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="display: inline;">Author List</h3>
                    <a href="{{route('admin.authors.create')}}" class="btn btn-sm btn-primary" style="float: right;">+ Add New Author</a>
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
                                    <th>Author Name</th>                                   
                                    <th>Author Designation</th>                                   
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach($authors as $key => $author)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $author->name }}</td>                                    
                                    <td>{{ $author->designation }}</td>                                    
                                    <th>
                                        <img src="{{asset($author->author_image)}}" alt="{{$author->name}}" width="100" height="100" class="img-thumbnail">
                                    </th>
                                                                     
                                    <td>{{ $author->created_at->format('d M Y h:i A') }}</td>
                                    <td>
                                        <a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>                                        
                                        <form action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
