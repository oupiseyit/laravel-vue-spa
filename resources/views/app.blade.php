@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <main id="app">
                <navigation></navigation>
                <div class="py-5">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
</div>
@endsection
