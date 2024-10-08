<x-layout>

    <div class="container">
        <div class="row d-flex justify-contain-between">

            <div class="text-center mt-5">
                <h1>All Contacts</h1>
            </div>

            <div class="reverse-col-1 m-5">
                <a href="{{ route('contacts.index') }}">
                    <button class="btn btn-primary px-3">Back</button>
                </a>
            </div>

            <div class="col-2 mx-5">
                <x-contact-sort :sort="request()->get('sort')" />
            </div>

            <div class="col-5 mx-5">
                <form action="{{ route('contacts.index') }}" method="POST">
                    @method('GET')
                    @csrf
                    <input type="text" class="form-control" name="search">
                    <button type="submit" class="btn btn-primary mt-3">Search</button>
                </form>
            </div>

            <div class="col-2 mx-1">
                <a href="{{ route('contacts.create') }}">
                    <button type="submit" class="btn btn-success">Create New Contact</button>
                </a>
            </div>

            @foreach ($contacts as $contact)
                <div class="col-3 my-5 mx-5 p-3 border">
                    <p><b>ID : </b>{{ $contact->id }}</p>
                    <p><b>Name : </b>{{ $contact->name }}</p>
                    <p><b>E-mail : </b>{{ $contact->email }}</p>
                    <p><b>Phone : </b>{{ $contact->phone }}</p>
                    <p><b>Address : </b>{{ $contact->address }}</p>
                    <p><b>Created Date : </b>{{ $contact->created_at }}</p>
                    <p><b>Updated Date : </b>{{ $contact->updated_at }}</p>

                    <div class="container">
                        <div class="row d-flex justify-content-center">

                            <div class="col-4">
                                <a href="{{ route('contacts.show', $contact) }}">
                                    <button type="submit" class="btn btn-primary px-4">View</button>
                                </a>
                            </div>

                            <div class="col-4">

                                <a href="{{ route('contacts.edit', $contact) }}">
                                    <button type="submit" class="btn btn-secondary px-4">Edit</button>
                                </a>
                            </div>

                            <div class="col-4">
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="mb-2">
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden">
                                    <button type="submit" class="btn btn-danger px-3">Delete</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
