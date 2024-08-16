<x-layout>

    <div class="text-center m-3">
        <h1>Contact</h1>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-7 mb-3">
                <form action="{{ route('contacts.index') }}" method="POST">
                    @method("GET")
                    @csrf
                    <input type="hidden">
                    <button type="submit" class="btn btn-primary">Home</button>
                </form>
            </div>

            <div class="col-7 border p-5">
                <p><b>ID : </b>{{ $contact->id }}</p>
                <p><b>Name : </b>{{ $contact->name }}</p>
                <p><b>E-mail : </b>{{ $contact->email }}</p>
                <p><b>Phone : </b>{{ $contact->phone }}</p>
                <p><b>Address : </b>{{ $contact->address }}</p>
                <p><b>Created Date : </b>{{ $contact->created_at }}</p>
                <p><b>Updated Date : </b>{{ $contact->updated_at }}</p>
            </div>

        </div>
    </div>

</x-layout>
