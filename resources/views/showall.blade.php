@foreach ($students as $item)
name:{{ $item->name }};<br>
email:{{ $item->email }}<br><br>
    
@endforeach