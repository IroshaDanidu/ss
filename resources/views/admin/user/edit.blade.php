<x-admin-layout>
    <form action="{{ route('user.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" id="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" id="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter New Password (leave blank if not changing)">
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" value="{{ old('role', $user->role) }}" id="role" placeholder="Enter Role" required>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
    </x-admin-layout>
