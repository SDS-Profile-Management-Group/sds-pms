<nav class="bg-white shadow-md p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ auth()->check() ? url('/home') : url('/auth/authentication') }}" 
            class="text-lg font-bold text-blue-600">
            SDS PMS
        </a>
        
        {{-- Always visible links --}}
        <div class="flex items-center space-x-4">
            <a href="https://myubd.ubd.edu.bn/group/myubd" class="text-blue-500">MyUBD</a>
            <a href="https://smrs.ubd.edu.bn/orbeon/uis-welcome/login/" class="text-blue-500">GIS UBD</a>
            <a href="https://ubd.instructure.com/login/canvas" class="text-blue-500">UBD Canvas</a>

            {{-- Authenticated user links --}}
            @auth
                @if ($user_type === 'staff')
                    <a href="{{ route('module-overview') }}" class="text-blue-500">Module Overview</a>
                    @if ($privilege === 'full')
                        <a href="{{ route('module-overview') }}" class="text-blue-500">Major Overview</a>
                    @endif

                @elseif ($user_type === 'student')
                    <a href="{{ route('cgpa-overview') }}" class="text-blue-500">CGPA</a>
                    <a href="{{ route('module-tracker') }}" class="text-green-500">Module Tracker</a>
                @endif
            @endauth
            
            @if ($type === 'dashboard')
                <a href="{{ route('profile-overview', ['user_id' => auth()->user()->asg_username]) }}" class="text-blue-500">Profile</a>

            @elseif ($type === 'profile')
                <a href="{{ route('home') }}" class="text-blue-500">Dashboard</a>
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