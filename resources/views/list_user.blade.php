@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">{{ $title }}</h2>
    <x-table-user :users="$users" />
</div>
@endsection
