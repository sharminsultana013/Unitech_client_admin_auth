@extends('Admin.layout')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="{{route('insert_slider')}}" method="post" class="form-horizontal" class="dropzone" enctype="multipart/form-data">
                    @csrf


                    <div class="card-body">
                        <h4 class="card-title">Add New image for The Slider</h4>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image"/>
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
                        <h5 class="card-title">Gallery Images</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sliderlists as $sliderlist)
                                    <tr>
                                        <td>{{$sliderlist->id}}</td>
                                        <td><img width="60px" src="{{asset($sliderlist->image)}}"></td>
                                        <td>
                                            <button class="btn btn-danger" type="submit">
                                                <a href="{{url('/sliderDelete/')}}/{{$sliderlist->id}}" title="delete">
                                                <i class="far fa-trash-alt" style="color: white;"></i>
                                            </a>
                                        </button>
                                        </td>
                                    </tr>
                                    @endforeach 
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection