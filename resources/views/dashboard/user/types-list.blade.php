<table class="table table-bordered">
    <thead class="thead-inverse">
        <tr class="active">
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
        <tr>
            <td>{{ $type->id }}</td>
            <td>{{ $type->name }}</td>
            <td>{{ $type->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
