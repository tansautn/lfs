@extends('fusehtml.layout',['pageTitle' => 'HOME','useAside' => true,'useQuickPannel' => false])

@section('content')
<div class="container bg-fuse-dark text-auto">

        <div class="card bg-fuse-dark text-auto">
            <div class="card-header">Dashboard</div>

            <div class="card-body bg-fuse-dark text-auto">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>

</div>
@endsection
