@extends('layouts.app')

@section('content')
<div class="profile-header">
    <div class="container">
        <h1><b>Welcome {{ Auth::user()->name }}</b></h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <p class="text-muted" style="font-size:14px;text-align:center">Navigation Menu</p>
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" style="border-radius:15px 15px 0px 0px">My Profile</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile" style="border-radius:0px 0px 15px 15px">Payment History</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <div class="card" style="border-radius:15px">
                        <div class="car-body p-4">
                            <h3><b>My Profile</b></h3>
                            <hr>
                            <p>Name : {{ Auth::user()->name }}</p>
                            <p>Email : {{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <div class="card" style="border-radius:15px">
                        <div class="car-body p-4">
                            <h3><b>Payment History</b></h3>
                            <br>
                            @if (Auth::user()->hasAnyRole('admin'))
                            <hr>
                            <center>
                                <h3 class="text-muted pt-5">This section is not applicable for admin</h3>
                            </center>
                            <br>
                            @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
