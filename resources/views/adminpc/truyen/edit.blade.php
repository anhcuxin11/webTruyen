@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype ='multipart/form-data'>
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->tentruyen}}" onkeyup ="ChangeToSlug();" name="tentruyen" id="slug" aria-describedby="Tên truyện" placeholder="Tên truyện...">                   
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug" aria-describedby="Slug truyện" placeholder="Slug truyện...">                   
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắc tuyện</label>
                            <textarea class = "form-control" rows="4" style="resize: none;" name="tomtat">{{$truyen->tomtat}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Danh mục truyện</label>
                            <select class="form-select" name="danhmuc" aria-label="Default select example">       
                                @foreach($danhmuc as $key =>$muc)
                                <option {{$muc->id==$truyen->danhmuc_id ? 'selected' : ''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>               
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hình ảnh truyện</label>
                            <input type="file" class="form-control" name="hinhanh">    
                            <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" width="100" height="100">               
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="form-select" name="kichhoat" aria-label="Default select example">       
                                @if($truyen->kichhoat == 0)      
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                @else
                                    <option value="0">Kích hoạt</option>
                                    <option selected value="1">Không kích hoạt</option>
                                @endif
                            </select>               
                        </div>
                        <button type="submit" name = "themtruyen" class="btn btn-primary">Cập nhật</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
