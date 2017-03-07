<table class="table">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>FIRST</th>
            <th>LAST</th>
            <th>EMAIL</th>
            <th>ACTIVATED</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->first_name }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->type }}</td>
            <td>{{ $post->published }}</td>
            <td>EDIT / VIEW</td>
        </tr>
        @endforeach
    </tbody>
</table>
