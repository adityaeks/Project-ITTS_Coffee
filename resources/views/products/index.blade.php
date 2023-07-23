@extends('layouts.app')
@section('Content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Harga</th>
                        <th>Kategori</th>
                        <th>Sub-Kategori</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Purnama</td>
                        <td>Anaking</td>
                        <td>purnama.anaking@gmail.com</td>
                        <td>20</td>
                        <td>tes</td>
                        <td>
                            <div class="d-flex">
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-person-lines-fill"></i></a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="#" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
