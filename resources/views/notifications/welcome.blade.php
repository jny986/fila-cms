<fila-cms::layouts.email>
    <h1>Welcome {{ $user?->name ?? 'User' }}</h1>
    <h2>You're now ready to explore the platform.</h2>
    <p>Click this button to add details for your profile.</p>
    <a href="{{ route('user-profile-information.show') }}" class="btn">View Profile</a>
    <p>From the {{ $appName }} Team</p>
</fila-cms::layouts.email>
