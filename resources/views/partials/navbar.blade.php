<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-lg font-bold text-blue-600">SDS PMS</a>
        
        <div class="flex items-center space-x-4">
            @if ($type === 'home') 
                {{-- Option 1 --}}
                {{-- <a href="{{ route('about') }}" class="text-blue-500">About</a> --}}
                {{-- <a href="{{ route('contact') }}" class="text-green-500">Contact</a> --}}
            
            @elseif ($type === 'dashboard')
                {{-- Option 2 --}}
                <a href="{{ route('profile') }}" class="text-blue-500">Profile</a>
                <a href="{{ route('settings') }}" class="text-green-500">Settings</a>
            
            @elseif ($type === 'mc')
                {{-- Option 2 --}}
                <a href="{{ route('profile') }}" class="text-blue-500">Profile</a>
                {{-- <a href="{{ route('settings') }}" class="text-green-500">Settings</a> --}}

            @elseif ($type === 'profile')
                {{-- Option 4 --}}
                <a href="{{ route('dashboard') }}" class="text-blue-500">Dashboard</a>
                <a href="{{ route('edit-profile') }}" class="text-green-500">Edit Profile</a>
            @endif

            <a href="https://owa.ubd.edu.bn/owa" class="text-blue-500">UBD Mail</a>

            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>