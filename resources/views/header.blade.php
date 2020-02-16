@extends('layout')
@section('header')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <nav>
                    <div><a href="/">
                    <img src= "../assets/logo-interna.png" height="25px" title="Gympoint"/>
                    </a>
</div>

                <div>
                    <a href="./student">Students</a>
                    <a href="plans">Plans</a>
                    <a href="https://laravel-news.com">Enrollments</a>
                    <a href="https://blog.laravel.com">Student Help Request </a>
                </div>
                </nav>
                <aside>
                        <div><strong>Admin</strong></div>
                        <div><a href="#" class="redMinimalButton">Sair do sistema</a></div>


                            <!-- <input
                                type="button"
                                class="redMinimalButton"
                                onClick=""
                                value="Sair do sistema"
                            /> -->

                </aside>

            </div>
        </div>

@endsection
