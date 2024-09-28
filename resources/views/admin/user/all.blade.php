<x-admin-layout>
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Users List</h2>
            <a href="{{ url('createuser') }}" class="btn btn-primary">Add User</a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Users Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->role }}</td>
                        <td>{{ $item->email }}</td>
                        <td class="d-flex">
                            <a href="{{ url('edituser/' . $item->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{ url('deleteuser/' . $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
