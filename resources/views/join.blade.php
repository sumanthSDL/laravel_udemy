@foreach($result as $item)
    Name:{{ $item->name}}<br>
    Amount:{{ $item->fee_amount }}<br>
    Month:{{ $item->fee_month }}<br>
@endforeach