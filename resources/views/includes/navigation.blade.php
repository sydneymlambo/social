<nav class="p-6 bg-white flex justify-between mb-5">
    <ul class="flex items-center">
        <li>
            <a class="p-3" href="">Home</a>
        </li>
        <li>
            <a class="p-3" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li>
            <a class="p-3" href="/posts">Post</a>
        </li>
    </ul>

    <ul class="flex items-center">
        @if(auth()->user())
            <li>
                <a class="p-3" href="">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="p-3">Logout</button>
                </form>
            </li>
        @else
            <li>
                <a class="p-3" href="{{ route('register') }}">Register</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('login') }}">Login</a>
            </li>
        @endif
    </ul>
</nav>