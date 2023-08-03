@extends('layouts.main')

@section('content')
@if(session('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <h1>tes</h1>
@endsection
