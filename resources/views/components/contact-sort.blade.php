<div>
    <h5>Sort By : </h5>
    <select id="contactSort" onchange="filterContact()" class="form-select form-select-lg">
        <option value="default" @if ($sort == 'default') selected @endif>Default</option>
        <option value="name" @if ($sort == 'name') selected @endif>Name</option>
        <option value="created_at" @if ($sort == 'created_at') selected @endif>Date</option>
    </select>

    <script>
        function filterContact() {
            let sort = document.getElementById('contactSort').value;
            if (sort == 'default') {
                location.href = "{{ route('contacts.index') }}";
            } else {
                location.href = '/contacts?sort=' + sort;
            }
        }
    </script>
</div>
