@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Car Details</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
            body {
                color: #566787;
                background:#9e3333;
                font-family: 'Varela Round', sans-serif;
                font-size: 13px;
            }
            .table-wrapper {
                background-color: #ffffff9d;
                padding: 20px 25px;
                border-radius: 10px;
                box-shadow: 0 1px 1px rgba(0, 0, 0, .05);

            }
            .table-title {
                padding-bottom: 15px;
                background: #070614;
                color: #fff;
                padding: 16px 30px;
                min-width: 100%;
                margin: -20px -25px 10px;
                border-radius: 3px 3px 0 0;
            }
            .table-title h2 {
                margin: 5px 0 0;
                font-size: 24px;
            }
            .card-body .row .form-group {
                margin-bottom: 20px;
            }
            .card-body .form-control-plaintext {
                font-size: 16px;
                color: #333;
            }
            .btn {
                font-size: 14px;
                padding: 10px 15px;
                margin-top: 10px;
            }
            .zoom-effect {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
            .zoom-effect:hover {
                transform: scale(1.05);
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            }
            hr {
                margin: 20px 0;
            }

            .card-body{
                background-color: #ffffff94;
                border-radius:10px;

            }

            .form-control-plaintext{
                font-size: 20px;
                font-weight: bold;
                background-color:#ffffff;
                width:50%;
                border-width:10px;
            }
        </style>
    </head>
    <body>
        <div class="container-xl">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Student Details</h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="make" class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext text-muted">{{$students->name}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="model" class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext text-muted">{{$students->email}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-3 col-form-label">Phone</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext text-muted">{{$students->phone}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="year" class="col-md-3 col-form-label">Date of Birth</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext text-muted">{{$students->dob}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colour" class="col-md-3 col-form-label">College</label>
                                <div class="col-md-9">
                                    <p class="form-control-plaintext text-muted">{{$students->college->name}}</p>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-3">
                                    <a href="{{ route('students.edit', $students->id)}}" class="btn btn-md btn-success zoom-effect">Edit</a>
                                    <a href="{{ route('students.index')}}" class="btn btn-md btn-dark zoom-effect">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </body>
@endsection

<!---
// This is the show page for the student.
// It displays the details of the student.
// It also contains the edit and cancel buttons that take you to the edit and index pages respectively.
-->