<x-layout>
    <div class="container">
        <h1 class="m-3">Create New Contact</h1>

        <div class="m-3">
            <form action="{{ route('contacts.index') }}" method="POST">
                @method('GET')
                @csrf
                <input type="hidden">
                <button type="submit" class="btn btn-success">Home</button>
            </form>
        </div>

        <form action="{{ route('contacts.store') }}" method="POST" class="row g-3 m-3">
            @csrf

            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            </div>

            <p>
                @error('name')
                    {{ $message }}
                @enderror
            </p>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>

            <p>
                @error('email')
                    {{ $message }}
                @enderror
            </p>

            <div class="col-12">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif
        </form>
    </div>
</x-layout>
