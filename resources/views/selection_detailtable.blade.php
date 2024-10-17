       
       @if (optional($selection->associate)->selection_detail == '')
       @else
       Asociar con:
           <select name="associate_detail_id" id="associate_detail_id" class="form-control">
               <option value="">Ninguno</option>
               @foreach ($selection->associate->selection_detail as $item)
                   <option value="{{ $item->id }}">{{ $item->description }}</option>
               @endforeach
           </select>
       @endif

       <p></p>
       <table class="table table-responsive">
           <th>id</th>
           <th>Descripción</th>
           <th>Asociado a</th>
           <th>Eliminar</th>
           <tbody>
               @php
                   $enumeracion = 0;
               @endphp
               {{-- {{$selection_detail->selection_detail}} --}}
               @foreach ($selection->selection_detail as $item)
                   <tr>
                       <td>
                           {{ $enumeracion = $enumeracion + 1 }}
                       </td>
                       <td>
                           {{ $item->description }}
                       </td>
                       <td>
                           {{ optional($item->associate_detail)->description }}
                       </td>
                       <td>
                           <!-- Button trigger modal -->
                           <button type="button"
                               onclick="selection_detailDestroy('{{ $item->id }}',{{ $item->selection->id }});"
                               class="btn btn-danger">
                               delete
                           </button>
                       </td>

                   </tr>
               @endforeach

           </tbody>
       </table>
