@extends('../layout')
@section('slide')
  @include('pages.slide')
@endsection
@section('content')

<h3>TRUYỆN MỚI CẬP NHẬT</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      @foreach ($truyen as $key => $value)
        
     
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
     
          <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          <div class="card-body">
            <h5>{{$value->tentruyen}}</h5>
            <p class="card-text">{{$value->tomtat}}</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
      
        </div>
      </div>  
      @endforeach
    </div> 
 
    <a href = "" class="btn btn-success" >Xem tất cả</a>
  </div>
</div>

<!------------Truyện hay xem nhiều---------------->
<h3>TRUYỆN HAY XEM NHIỀU</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>       
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>       
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>  

    </div> 
    
    <a href = "" class="btn btn-success" >Xem tất cả</a>
  </div>
</div>

<!------------Blogs---------------->
<h3>BLOGS</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>  
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>       
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>       
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/harrybotter131.jpg')}}">
          <div class="card-body">
            <h3>This is a wider card with supporting text</h3>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-secondary">Xem</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fa fa-eye">5342</i></a>
              </div>
              <small class="text-muted">9 mins ago</small>
            </div>
          </div>
        </div>
      </div>  

    </div>  

    <a href = "" class="btn btn-success" >Xem tất cả</a>
  </div>
</div>

@endsection