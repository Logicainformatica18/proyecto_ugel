<table class="table table-responsive">
    <th>id</th>
    <th>Descripción</th>
    <th>Eliminar</th>
    <tbody>
        @foreach ($product->categorys as $item)
            <tr>
                <td>
                    {{ $item->pivot->id }}
                </td>
                <td>
                    {{ $item->description }}
                </td>
                <td>
                 <!-- Button trigger modal -->
                <button type="button" onclick="category_productDestroy({{ $item->pivot->id }},{{ $item->pivot->product_id }});" class="btn btn-danger">
                    delete
                </button>
                </td>

            </tr>
        @endforeach
</tbody>
</table>
