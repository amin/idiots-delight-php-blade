@foreach ($cards as $column)
@foreach($column as $card)
<p>
    {{$card->getRank()}}
    {{$card->getSuit()}}
</p>
@endforeach
@endforeach