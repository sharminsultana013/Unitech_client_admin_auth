@extends('Admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{route('insert_address')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    @csrf


                    <div class="card-body">
                        <h4 class="card-title">Add Address Information</h4>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-end control-label col-form-label">Address</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="address" name="address"
                                    placeholder="Address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-end control-label col-form-label"
                                place>Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="mobile" name="mobile"
                                    placeholder="Mobile" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname"
                                class="col-sm-3 text-end control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Address</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach($address as $addr)
                                    <tr>
                                        <td>{{$addr->id}}</td>
                                        <td>{{$addr->address}}</td>
                                        <td>{{$addr->mobile}}</td>
                                        <td>{{$addr->email}}</td>
                                        <td>
                                            <button class="btn btn-danger" type="submit"><a href="{{url('/addressDelete/')}}/{{$addr->id}}" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                        </td>
                                    </tr>
                                   @endforeach 
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection