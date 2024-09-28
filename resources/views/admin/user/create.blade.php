<x-admin-layout>
    <form action="{{ url('userstore') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required>
        </div>
        <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" class="form-control" value="{{ old('role') }}" id="role" placeholder="Enter Role" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin-layout>
