
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->


    <title>Document</title>
</head>
<body>
   

    
<svg class="TicketPC__LocationRouteSVG-sc-1mxgwjh-4 dSQflF" xmlns="http://www.w3.org/2000/svg" width="14" height="74" viewBox="0 0 14 74">
    <path fill="none" stroke="#787878" stroke-linecap="round" stroke-width="2" stroke-dasharray="0 7" d="M7 13.5v46">
    </path>
    <g fill="none" stroke="#484848" stroke-width="3">
        <circle cx="7" cy="7" r="7" stroke="none"></circle>
        <circle cx="7" cy="7" r="5.5"></circle>
    </g>
    <path d="M7 58a5.953 5.953 0 0 0-6 5.891 5.657 5.657 0 0 0 .525 2.4 37.124 37.124 0 0 0 5.222 7.591.338.338 0 0 0 .506 0 37.142 37.142 0 0 0 5.222-7.582A5.655 5.655 0 0 0 13 63.9 5.953 5.953 0 0 0 7 58zm0 8.95a3.092 3.092 0 0 1-3.117-3.06 3.117 3.117 0 0 1 6.234 0A3.092 3.092 0 0 1 7 66.95z" fill="#787878"></path>
</svg>





<form method="get" action="{{ route('check1') }}">
@csrf

<div>


    
    

    <input type="text" name="key" value="">
    <input type="submit">
</div>
</form>

</body>
</html>


