<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-lg font-bold text-blue-600">SDS PMS</a>
        
        <div class="flex items-center space-x-4">
            <a href="https://myubd.ubd.edu.bn/group/myubd" class="text-blue-500">MyUBD</a>
            <a href="https://smrs.ubd.edu.bn/orbeon/uis-welcome/login/" class="text-blue-500">GIS UBD</a>
            <a href="https://ubd.instructure.com/login/canvas" class="text-blue-500">UBD Canvas</a>
            
            @if ($type === 'home') 
                {{-- Option 1 --}}
                {{-- <a href="{{ route('about') }}" class="text-blue-500">About</a> --}}
                {{-- <a href="{{ route('contact') }}" class="text-green-500">Contact</a> --}}

            @elseif ($type === 'major')
                <a href="" class="text-blue-500">NavBtn1</a>
                <a href="" class="text-green-500">NavBtn2</a>
            
            @elseif ($type === 'dashboard')
                <a href="{{ route('home') }}" class="text-blue-500">Home</a>
                <a href="{{ route('settings') }}" class="text-green-500">Settings</a>
            
            @elseif ($type === 'mt')
                <a href="{{ route('home') }}" class="text-blue-500">Home</a>
                {{-- <a href="{{ route('settings') }}" class="text-green-500">Settings</a> --}}

            @elseif ($type === 'profile')
                <a href="{{ route('dashboard') }}" class="text-blue-500">Dashboard</a>
                <a href="{{ route('edit-profile') }}" class="text-green-500">Edit Profile</a>
            @endif

            <a href="https://owa.ubd.edu.bn/owa" class="text-blue-500">UBD Mail</a>

            {{-- Only shows when user is authenticated --}}
            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-700">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>