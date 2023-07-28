@extends('layouts.main')

@section('content')
    <div class="carousel-inner" style="height: 120px;>
        <div class="carousel-item active">
        <img src="{{ Vite::asset('resources/images/bgcontact.png') }}" class="d-block w-100" alt="...">
    </div>
    </div>

    {{-- end navbar --}}


    {{-- START CONTENT --}}
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Customers Suggestion</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Email</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Message</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suggestions as $suggestion)
                                        <tr>
                                            <td> {{ $suggestion->name }} </td>
                                            <td>{{ $suggestion->email }}</td>
                                            <td>{{ $suggestion->message }}</td>
                                            <td>
                                                <a href="#" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END CONTENT --}}
@endsection
