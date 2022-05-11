@extends('../layout')
{{-- @section('slide')
  @include('pages.slide')
@endsection --}}
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
            </div>
            <div class="col-md-9">
                <style type="text/css">
                .infortruyen{
                    list-style: none;
                }
                </style>
                <ul class="infortruyen">
                    <li> Tác giả: Hiro</li>
                    <li> Thể loại: action</li>
                    <li> Số chap: 100</li>
                    <li> Lượt xem: 2334</li>
                    <li><a href="#">Danh sách chương</a></li>
                    <li><a href="#" class="btn btn-primary">Đọc online</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <p>Giới thiệu về tiểu thuyết Harry Boter</p>
        </div>
        <hr>
        <h4>Mục lục</h4>
        <ul class="mucluctruyen">
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
            <li><a href="#">Chương 1</a></li>
        </ul>
        <h4>Sách cùng danh mục</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                  <a href="">
                  <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
                  <div class="card-body">
                    <h5>This is a wider card with supporting text</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 
                  </div>
                  </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                  <a href="">
                  <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
                  <div class="card-body">
                    <h5>This is a wider card with supporting text</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 
                  </div>
                  </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                  <a href="">
                  <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
                  <div class="card-body">
                    <h5>This is a wider card with supporting text</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 
                  </div>
                  </a>
                </div>
            </div> 
            <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                  <a href="">
                  <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
                  <div class="card-body">
                    <h5>This is a wider card with supporting text</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                 
                  </div>
                  </a>
                </div>
            </div>  
        </div>
    </div>
    <div class="col-md-3">
        <h3>Truyện hot</h3>
    </div>
</div>
@endsection