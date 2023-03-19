
<div class="row mb-3">
      <label for="country" class="col-sm-2 col-form-label text-end">Vyberte závod</label>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="input-group-text"><span class="fas fa-globe" style="width:1.2rem"></span></span>
        <select class="form-select" id="country" name="country" onchange="window.location = '/registrace/{{ $race_year }}/{{ $race_id }}/'+this.options[this.selectedIndex].value+'';">
        <option>Vyberte závod</option>
        @foreach($eventList as $event)
           <option value="{{ $event->poradi_podzavodu }}" 
           @if(($event->poradi_podzavodu == $current_event_order))
            selected="selected"
           @endif
           >{{ $event->nazev }}</option>
        @endforeach
      </select>
      </div>
    </div>
</div>
