@foreach ($all_students as $item)
    {{ $item->name }} <br>
    {{ $item->email }} <br>
    @foreach($item->rPhone as $single)
    {{ $single->phone }}<br><br>
    @endforeach
@endforeach