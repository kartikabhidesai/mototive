@extends('backend.layout.app')
@section('content')
<section class="pcoded-main-container">{{ csrf_field() }}
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin-dashboard') }}"><i class="feather icon-home"></i>&nbsp;&nbsp;Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Portfolio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card support-bar overflow-hidden">
                    <div class="card-body pb-0">
                        <h2 class="m-0">Portfolio List</h2>
                        <span class="text-c-blue">&nbsp;</span>

                    </div>

                    <div class="card-footer bg-primary text-white">
                        <div class="row text-center">

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] start -->
            <div class="modal-content">

                <form id="editportfolio" name="editproductform" method="post"  enctype="multipart/form-data">
                    <div class="col-sm-12">
                        <div class="modal-body">
                            {{ csrf_field() }}
                            @foreach($portfolio as $value)@endforeach

                            <div class="row">
                                <div class="col-md-12 p-b-20">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter portfolio Name" value="{{ $value->name }}"><br>
                                        <input type="text" class="form-control" name="link" placeholder="Enter Portfolio Live Link" value="{{ $value->livelink }}"><br>
                                        <input type="text" class="form-control" name="technology" placeholder="Enter Portfolio Technology" value="{{ $value->technology }}"><br>
                                        <input type="text" class="form-control" name="short" placeholder="Enter Portfolio Short-Description in 30 words" value="{{ $value->short_description }}"><br>
                                        <input type="text" class="form-control" name="description" placeholder="Enter Portfolio Description" value="{{ $value->description }}"><br>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-12 p-b-25">
                                    <div class="form-group">
                                        <select class="form-control" name="type" id="type">
                                            <option value="">Select Project Type</option>
                                            @foreach($type as $key)
                                            <option value="{{ $key->id }}" {{ $value->category == $key->id ? 'selected': '' }}>{{ $key->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

<!--                            <div class="row">
                                <div class="col-md-12 p-b-25">
                                    <div class="form-group">
                                        <input type="file" name="image"  class="form-control" name="image">
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="col-md-12 p-b-25">
                                    <div class="form-group">
                                        @for($i = 0; $i < count($portfolio); $i++)
                                        <image height='100px' src='{{ url('public/uploads/portfolio/',$portfolio[$i]->image_name) }}'>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 p-b-25 append">

                                    <div class="row">
                                        <div class="col-md-10 p-b-25">
                                            <div class="form-group">
                                                <input type="file" name="addimage[]"  class="form-control" name="image">
                                            </div>
                                        </div>
                                        <div class="col-md-2 p-b-25">
                                            <div class="form-group">
                                                <button type="button" class="btn  btn-primary addimage">Add Images</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn  btn-success">Edit & Save</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- [ form-element ] end -->
        </div>
    </div>
</section>

@endsection