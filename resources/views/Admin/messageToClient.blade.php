@extends('Admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{route('insert_message')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    @csrf
                    

                    <div class="card-body">
                        <h4 class="card-title">Add New Message</h4>
                        <div class="form-group row">
                            <label for="name"
                                class="col-sm-3 text-end control-label col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designition"
                                class="col-sm-3 text-end control-label col-form-label">Designition</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="designition" name="designition"
                                    placeholder="Your designition" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-3 text-end control-label col-form-label"
                                place>Message</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" id="message" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                class="col-sm-3 text-end control-label col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div>
                    </div>

                    {{-- error validation --}}
                    @foreach($errors->all() as $error)
                        <p class="ml-1 h4" style="color: red">{{$error}}</p>
                    @endforeach
                    {{-- error validation --}}

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
                        <h5 class="card-title">Message Table</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designition</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messagelists as $messagelist)
                                    <tr>
                                        <td>{{$messagelist->id}}</td>
                                        <td><img width="60px" src="{{asset($messagelist->image)}}"></td>
                                        <td>{{$messagelist->name}}</td>
                                        <td>{{$messagelist->designition}}</td>
                                        <td>{{$messagelist->message}}</td>
                                        <td>
                                            {{-- <button class="btn btn-primary" type="submit"><a href="{{url('/message_edit/')}}/{{$messagelist->id}}">
                                                    <i class="far fa-edit" style="color: white;"></i>
                                                </a></button> --}}
                                            <button class="btn btn-danger" type="submit"><a href="{{url('/messageDelete/')}}/{{$messagelist->id}}" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Designition</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
@endsection