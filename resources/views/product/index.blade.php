@extends('dashboard')
@section('content')
<head>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Snippet - GoSNippets</title>
<link href='' rel='stylesheet'>
<link href='' rel='stylesheet'>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: 'Varela Round', sans-serif;
    }

    .modal-confirm {
        color: #636363;
        width: 400px;
    }

    .modal-confirm .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
        text-align: center;
        font-size: 14px;
    }

    .modal-confirm .modal-header {
        border-bottom: none;
        position: relative;
    }

    .modal-confirm h4 {
        text-align: center;
        font-size: 26px;
        margin: 30px 0 -10px;
    }

    .modal-confirm .close {
        position: absolute;
        top: -5px;
        right: -2px;
    }

    .modal-confirm .modal-body {
        color: #999;
    }

    .modal-confirm .modal-footer {
        border: none;
        text-align: center;
        border-radius: 5px;
        font-size: 13px;
        padding: 10px 15px 25px;
    }

    .modal-confirm .modal-footer a {
        color: #999;
    }

    .modal-confirm .icon-box {
        width: 80px;
        height: 80px;
        margin: 0 auto;
        border-radius: 50%;
        z-index: 9;
        text-align: center;
        border: 3px solid #f15e5e;
    }

    .modal-confirm .icon-box i {
        color: #f15e5e;
        font-size: 46px;
        display: inline-block;
        margin-top: 13px;
    }

    .modal-confirm .btn,
    .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #60c7c1;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        min-width: 120px;
        border: none;
        min-height: 40px;
        border-radius: 3px;
        margin: 0 5px;
    }

    .modal-confirm .btn-secondary {
        background: #c1c1c1;
    }

    .modal-confirm .btn-secondary:hover,
    .modal-confirm .btn-secondary:focus {
        background: #a8a8a8;
    }

    .modal-confirm .btn-danger {
        background: #f15e5e;
    }

    .modal-confirm .btn-danger:hover,
    .modal-confirm .btn-danger:focus {
        background: #ee3535;
    }

    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>
</head>
    
 
<body>
     <x-success-status class="mb-4" :status="session('message')" />
        <section class="content">
        <a href="{{ route('product.create') }}" button class="btn btn-danger" style="margin-left: 80%; font-size:15px;">
                                        Add Product</a>
                                        <div class="container-fluid">
        <div class="row">
          <div class="col-md-10" >
            <div class="card" style="margin-top: 12%;">
             
              <!-- /.card-header -->
              <div class="card-body" style="margin-bottom: 5%;">
      
                <table class="table table-bordered" >
                  <thead>
                    <tr>
                      <th> Catogory Name</th>
                      <th>product name</th>
                      <th>image</th>
                      <th>action</th>
                  </tr>
                </thead> 
            <tbody>
                @foreach ($catid as $data)
                    <tr>
                       
                        <td>{{ $data->catogory }}</td>
                        <td>{{ $data->product_name }}</td>
                       
                <td><img src="{{asset('storage/images/'.$data->image) }}" width="35%" height="25%" ></td>
                        <td><a href="#myModal" data-toggle="modal" ><i class="fa fa-trash" aria-hidden="true" style="color:red"></i></a></td>

                    </tr>
                    @endforeach
           </tbody>
        </table>

 @endsection
 
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <div class="icon-box">
                    <i class="material-icons">&#xE5CD;</i>
                </div>
                <h4 class="modal-title w-100">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              
             <a button type="button"  href="{{ route('product.delete',$data->id) }}"  class="btn btn-danger"  >Delete</a >
          
         </div>
        </div>
    </div>
</div>

</body>

<script type='text/javascript'></script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
<script type='text/javascript' src=''></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src=''></script>