<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        label{
            display: inline-block;
            width: 200px;
        }
    </style>
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                        <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                    <button id="bannerClose" class="btn border-0 p-0">
                        <i class="mdi mdi-close text-white me-0"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

@include('admin.sidebar')

@include('admin.navbar')
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center" style="padding-top: 100px">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{session()->get('message')}}
                </div>
            @endif

            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div style="padding: 15px">
                    <label for="">Doctor Name</label>
                    <input type="text" style="color: black" name="name" placeholder="Enter the Name">
                </div>

                <div style="padding: 15px">
                    <label for="">Phone</label>
                    <input type="number" style="color: black" name="number" placeholder="Enter the Phone">
                </div>

                <div style="padding: 15px">
                    <label for="">Speciality</label>
                    <select name="speciality" style="color: black; width: 200px">
                        <option>--Select--</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Ophthalmology">Ophthalmology</option>
                        <option value="Otorhinolaryngology">Otorhinolaryngology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Obstetrics and Gynaecology">Obstetrics and Gynaecology</option>
                        <option value="General Surgeon">General Surgeon</option>
                        <option value="Pediatric">Pediatric</option>
                        <option value="Orthopedics">Orthopedics</option>
                    </select>
                </div>

                <div style="padding: 15px">
                    <label for="">Room Number</label>
                    <input type="text" style="color: black" name="room" placeholder="Enter Room No">
                </div>

                <div style="padding: 15px">
                    <label for="">Doctor's Image</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@include('admin.script')
</body>
</html>