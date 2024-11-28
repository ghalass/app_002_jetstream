<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPTION</th>
                <th>QUANTITY</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
