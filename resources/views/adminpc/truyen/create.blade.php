@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
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

                    <form method="POST" action="{{route('truyen.store')}}" enctype ='multipart/form-data'>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên truyện</label>
                            <input type="text" class="form-control" value="{{old('tentruyen')}}" onkeyup ="ChangeToSlug();" name="tentruyen" id="slug" aria-describedby="Tên truyện" placeholder="Tên truyện...">                   
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Slug truyện</label>
                            <input type="text" class="form-control" value="{{old('slug_truyen')}}" name="slug_truyen" id="convert_slug" aria-describedby="Slug truyện" placeholder="Slug truyện...">                   
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tóm tắc tuyện</label>
                            <textarea class = "form-control" rows="4" style="resize: none;" name="tomtat"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Danh mục truyện</label>
                            <select class="form-select" name="danhmuc" aria-label="Default select example">       
                                @foreach($danhmuc as $key =>$muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>               
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Hình ảnh truyện</label>
                            <input type="file" class="form-control" name="hinhanh">                   
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kích hoạt</label>
                            <select class="form-select" name="kichhoat" aria-label="Default select example">       
                                <option value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            </select>               
                        </div>
                        <button type="submit" name = "themtruyen" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
