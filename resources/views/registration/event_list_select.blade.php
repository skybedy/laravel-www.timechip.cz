@if(count($eventList) > 1)
  <div class="row mb-5">
      <label for="event_order" class="col-sm-2 col-form-label text-end">Vyberte závod</label>
      <div class="col-sm-9">
        <div class="input-group">
          <span class="input-group-text"><span class="fas fa-list" style="width:1.2rem"></span></span>
          <select class="form-select" id="event_order" name="event_order" onchange="window.location = '/registrace/{{ $race_name }}/{{ $race_year }}/{{ $race_id }}/'+this.options[this.selectedIndex].value+'';">
          <option selected disabled>Vyberte závod</option>
          @foreach($eventList as $event)
            <option value="{{ $event->poradi_podzavodu }}" 
            @if(($event->poradi_podzavodu == $current_event_order))
              selected
            @endif
            >{{ $event->registration_name }}</option>
          @endforeach
        </select>
        </div>
      </div>
  </div>
@else
  <input type="hidden" name="event_order" value="{{ $eventList[0]->poradi_podzavodu }}"
@endif
