holaa
<table class="table table-responsive">
    <th>id</th>
    <th>Descripción</th>
    <th>Eliminar</th>
    <tbody>

        @foreach ($role->permissions as $item)
            <tr>
                <td>
                    {{ $item->pivot->permission_id }}
                </td>
                <td>
                    {{ $item->name}}
                </td>
                <td>
                 <!-- Button trigger modal -->
                <button type="button" onclick="rolePermissionDestroy('{{ $item->name }}',{{ $item->pivot->role_id }});" class="btn btn-danger">
                    delete
                </button>
                </td>

            </tr>
        @endforeach
</tbody>
</table>
