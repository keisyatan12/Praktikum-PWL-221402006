@extends('admin.layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Password</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            @if(session('success'))
                            <p class="alert alert-success">{{ session('success') }}</p>
                            @endif
                            @if($errors->any())
                            @foreach($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                            <form  method="GET">
                                @csrf
                                <div class="mb-3">
                                    <label>Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="old_password" />
                                </div>
                                <div class="mb-3">
                                    <label>New Password <span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="new_password" />
                                </div>
                                <div class="mb-3">
                                    <label>New Password Confirmation<span class="text-danger">*</span></label>
                                    <input class="form-control" type="password" name="new_password_confirmation" />
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Change</button>
                    
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- /.container-fluid -->
@endsection
            