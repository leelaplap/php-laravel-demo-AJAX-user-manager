@extends('layouts.app')
@section('content')
    <div class="col-12 col-md-12 d-flex justify-content-center">
        <div class="col-12 col-md-8">
            <form class="form-inline my-2 my-lg-0 d-flex justify-content-center">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search-customer">
            </form>



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add new customer
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form>
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="email" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="email" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="email" class="form-control" placeholder="Enter Name">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>



            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="list-customer">
                @foreach($customers as $key =>$customer)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->address}}</td>
                        <td>
                            <button class="btn btn-danger">Delete</button>
                            <button class="btn btn-secondary">Edit</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
