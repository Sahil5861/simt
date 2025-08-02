@extends('admin.layouts.app')
@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <div class="content-inner">
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex">
                <div class="d-flex">
                    <h4 class="page-title mb-0">
                        Dashboard - <span class="fw-normal">Admission Enquiries List</span>
                    </h4>                    
                </div>
            </div>            
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title" style="display: inline;">Admission Enquiries List</h3>
                    {{-- <a href="{{route('admin.blogs.create')}}" class="btn btn-sm btn-primary" style="float: right;">+ Add Blogs</a> --}}
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
                        <table id="admissionEnquiryTable" class="table datatale table-bordered table-striped">
                            <thead>
                                <tr>     
                                    <th>#</th>                                                                   
                                    <th>Name</th>                                   
                                    <th>Email</th>                                      
                                    <th>Phone Number</th>                                      
                                    <th>Program</th>                                      
                                    <th>State</th>                                      
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach($admission_enquries as $key => $admission_enqury)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $admission_enqury->name }}</td>                                    
                                    <td>                                        
                                        {{ $admission_enqury->email}}
                                    </td>
                                  
                                    <td>
                                        {{ $admission_enqury->phone}}
                                    </td>   
                                    <td>
                                        {{ strtoupper($admission_enqury->program)}}
                                    </td>   
                                    <td>
                                        {{ $admission_enqury->state}}
                                    </td>                                                                                                          
                                    <td>{{ $admission_enqury->created_at->format('d M Y h:i A') }}</td>

                                    <td>                                            
                                        <form action="{{ route('admin.admission-enquiry.destroy', $admission_enqury->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this?');">
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
