<nav class='border-b border-border px-6'>
    <div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
        <div>
            <a href="/">
                <img src="/images/logo.png" alt="logo" width="100">
            </a>
        </div>

        <div class="flex gap-x-5 items-center">
            @auth
                <form action="/logout" method='post'>
                @csrf
                <button>Logout</button>
                </form>
            @endauth
            @guest
            <a href="/register">Register</a>
            <a href="/login" class="btn">Login</a>

            @endguest
        </div>
    </div>
</nav>