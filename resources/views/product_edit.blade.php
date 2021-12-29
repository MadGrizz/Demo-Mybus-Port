@extends('layouts.app')

@section('title', 'Edit Product Page')

@section('content')
<div class="container-fluid">
    <div id="app">
        <edit-product id="{!!$id!!}"></edit-product>
    </div>
    
</div>
@endsection

<script src="js/app.js" charset="UTF-8"></script>