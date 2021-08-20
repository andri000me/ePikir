<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ base_url('assets/external/FullCalendar/main.min.css') }}" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            font-size: 14px;
        }

        .fc a {
            color: #ff8605;
        }

        .fc .fc-toolbar-chunk h2 {
            margin-block: 10px !important;
        }

        @media(max-width: 480px) {
            .fc-toolbar {
                display: block !important;
            }
        }

        #calendar {
            padding: 20px;
        }

    </style>
</head>

<body>
    <div id='calendar'></div>
    <script src="{{ base_url('assets/external/FullCalendar/main.min.js') }}"></script>
    <script src='{{ base_url('assets/external/FullCalendar/locales-all.js') }}'></script>
    <script src='{{ base_url('assets/js/calendar.js') }}'></script>
    <script>
        showCalendar({!! json_encode($agenda_thn) !!}, '{{ date('Y-m-d') }}');
    </script>
</body>

</html>
