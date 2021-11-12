@extends('layouts.app')

@section('content')

<div class="container">
    <div class="h1 text-center m-5">Unit page</div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Unit Type</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($units as $unit)
                <tr>
                    <td>{{ $unit->unit_type }}</td>
                    <td>{{ $unit->description }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
