@extends('layouts.app-master')

@section('content')
<div class="all-category-container">
    <h1>All Categories</h1>
    <div class="list-types">
        @for($i = 0; $i < $types->count(); $i++ )
            <i><a class="btn btn-outline-primary" href={{route($types[$i]->route)}}>{{$types[$i]->name}}</a></i>
            @endfor
    </div>

</div>
@endsection

