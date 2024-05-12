@extends('admin.layout.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <style>
        .card-book {
            background-color: #FFE2E6;
        }

        .card-author {
            background-color: #FFF4DE;
        }

        .card-genre {
            background-color: #DCFCE7;
        }

        .card-review {
            background-color: rgb(199, 247, 255);
        }

        .fa {
            font-size: 2em;
            border-radius: 50%;
            max-width: 50px;
            max-height: 50px;
        }

        .fa-address-book {
            background-color: #FE947A;
        }

        .fa-cubes {
            background-color: green;
        }
    </style>
    <div class="row">
        <div class="col-6 col-md-3">
            <div class="card card-book text-center p-3">
                <i class="fa fa-book p-4 mx-auto bg-danger text-white d-flex justify-content-center align-items-center "
                    aria-hidden="true"></i>
                <h1 class="font-weight-bold my-2">{{ $total_buku }}</h1>
                <h6 class="font-weight-normal m-0">Total Buku</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card card-author text-center p-3">
                <i class="fa fa-address-book p-4 mx-auto  text-white d-flex justify-content-center align-items-center "
                    aria-hidden="true"></i>
                <h1 class="font-weight-bold my-2">{{ $total_penulis }}</h1>
                <h6 class="font-weight-normal m-0">Total Penulis</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card card-genre text-center p-3">
                <i class="fa fa-cubes p-4 mx-auto text-white  d-flex justify-content-center align-items-center "
                    aria-hidden="true"></i>
                <h1 class="font-weight-bold my-2">{{ $total_genre }}</h1>
                <h6 class="font-weight-normal m-0">Total Genre</h6>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card card-review text-center p-3">
                <i class="fa fa-comments p-4 mx-auto bg-info  text-white d-flex justify-content-center align-items-center "
                    aria-hidden="true"></i>
                <h1 class="font-weight-bold my-2">{{ $total_review }}</h1>
                <h6 class="font-weight-normal m-0">Total Review</h6>
            </div>
        </div>
    </div>
@endsection
