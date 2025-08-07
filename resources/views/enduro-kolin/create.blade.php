<div>{{$racer->jmeno}} {{$racer->prijmeni}}</div><br>

    


<form class="" action="{{ route('enduro_kolin.store',$racer->kod) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$racer->id}}">
      <select name="rocnik">
            <option>Vyberte rocnik</option>
            @for ($i= 1924;$i <= 2013; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
      </select>
         <button type="submit" class="">Odeslat</button>

                              
</form>