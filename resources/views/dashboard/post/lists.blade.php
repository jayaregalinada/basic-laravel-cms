<table class="table">
    <thead class="thead-inverse">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>TYPE</th>
            <th>PUBLISHED</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->user_id }}</td>
            <td>{{ $post->type }}</td>
            <td>{{ $post->published }}</td>
            <td>EDIT / VIEW</td>
        </tr>
        @endforeach
    </tbody>
</table>
