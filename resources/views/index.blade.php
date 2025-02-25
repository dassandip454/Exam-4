<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create') }}">Create New Contact</a>

    <form method="GET" action="{{ route('contacts.index') }}">
        <input type="text" name="search" placeholder="Search contacts..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <table>
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort_by' => 'name']) }}">Name</a></th>
                <th><a href="{{ route('contacts.index', ['sort_by' => 'created_at']) }}">Created At</a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact) }}">View</a>
                        <a href="{{ route('contacts.edit', $contact) }}">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $contacts->links() }}
</body>
</html>
