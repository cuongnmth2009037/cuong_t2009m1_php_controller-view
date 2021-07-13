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
<p><span><b>EventName:</b></span> <span>{{$eventName}}</span></p>
<p><span><b>BandName:</b></span> <span>{{$bandName}}</span></p>
<p><span><b>StartDate:</b></span> <span>{{$startDate}}</span></p>
<p><span><b>EndDate:</b></span> <span>{{$endDate}}</span></p>
<p><span><b>Portfolio:</b></span> <span>{{$portfolio}}</span></p>
<p><span><b>TicketPrice:</b></span> <span>{{$ticketPrice}}</span></p>
<p><span><b>Status:</b></span> <span>
        @switch($status)
            @case(1)
            Đang diễn ra
            @break

            @case(2)
            Sắp diễn ra
            @break

            @case(3)
            Đã diễn ra
            @break

            @case(0)
            Tạm hoãn
            @break
        @endswitch
    </span></p>
</body>
</html>
