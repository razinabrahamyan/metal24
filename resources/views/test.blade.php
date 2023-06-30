<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($marketPricesByCategory as $marketPrice)

    @foreach($marketPrice as $categoryPrice)
        <div>
            {{"array('product_id'=>1, 'price_below' => ".str_replace(' ', '', $categoryPrice->metalPrice->price_below).", 'price_from_to' => ".str_replace(' ', '', $categoryPrice->metalPrice->price_from_to)." , 'price_above_from_to' => ".str_replace(' ', '', $categoryPrice->metalPrice->price_above_from_to)." ,'by_wholesale' => ".str_replace(' ', '', $categoryPrice->metalPrice->by_wholesale)." , 'weight' => '".$categoryPrice->metalPrice->weight."' ,'type' => '".$categoryPrice->title."'),"}}
        </div>

    @endforeach
@endforeach

</body>
</html>
