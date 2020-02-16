@extends('../header')
@section('content')
    <p>Planos:</p>

    @foreach ($plans as $plans)
    <p>{{ $plans->title }}</p>
    @endforeach

@endsection

