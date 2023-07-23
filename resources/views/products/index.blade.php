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
                    @if (!empty($products) && count($products) > 0)
                        @foreach ($products as $product)
                            <tr>
                                <td><img style="width: 100px" src="{{ asset('images/' . $product->image) }}" alt="tes">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->kategorys_id }}</td>
                                <td>{{ $product->subKategorys_id }}</td>

                                <td>
                                    <div class="d-flex">
                                        {{-- <a href="#" class="btn btn-outline-dark btn-sm me-2"><i
                                            class="bi-person-lines-fill"></i></a> --}}
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                        <div>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i
                                                        class="bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
