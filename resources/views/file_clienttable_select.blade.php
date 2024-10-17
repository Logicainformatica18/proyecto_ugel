
 <select name="selection_detail_id" id="selection_detail_id" class="form-control">
     @foreach ($survey_details as $item)
         <option value="{{ $item->id . '-' . $item->description }}">
             {{ $item->description }} </option>
     @endforeach
 </select>
