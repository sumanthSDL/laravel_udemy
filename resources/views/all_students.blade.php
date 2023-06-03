@foreach ($all_students as $item)
    {{ $item->name }} <br>
    {{ $item->email }} <br>
    {{ $item->rPhone->phone }}<br><br>
@endforeach