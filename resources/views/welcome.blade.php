@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    {{ Auth::user()->name }}
                    Your Application's Landing PageSSS.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
