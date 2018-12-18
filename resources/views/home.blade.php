
@extends('layouts.app')

@section('title')
    trylaravel - Cart
@endsection

@section('content')



<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</body>
</html>

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="container">
                <left><h1 style="color:#ff1493;">Details</h1></left><br>
                    @if(Session::has('user'))
                        <div class="row">
                            <div class="col-md-12">
                                <table align="center" class="table text-center">
                            <thead>
                            <tr>
                            <th></th>
                            <th><center>Name</center></th>
                            <th><center>Price</center></th>
                            <th><center>Quantity</center></th>
                            <th><center>Reduce Qty.</center></th>
                            <th><center>Remove Product</center></th>
                            <th><center>Total</center></th>
                            </tr>
                    @endif

                    <div>Name:</div>
                    <div>Email:</div>
                    <div>Age:</div>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
