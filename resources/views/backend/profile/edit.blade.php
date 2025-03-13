<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
    
    <button type="submit">Update Profile</button>
</form>
