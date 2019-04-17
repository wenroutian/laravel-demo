@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">自我介绍</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1 style="display: inline">samxiao</h1>

                        <h2 style="color:blue">标签</h2>

                        <h3 style="display: inline;color: darkblue">php</h3>

                        <h3 style="display: inline;color: #2a9055">golang</h3>

                        <h3 style="display: inline;color: #000;">docker</h3>

                        <h3 style="display: inline;color: pink">openresty</h3>


                        <h5 style="color:red">工作年限 3年</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
