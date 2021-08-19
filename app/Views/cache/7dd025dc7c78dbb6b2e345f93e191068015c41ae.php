<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(base_url('assets/external/FullCalendar/main.min.css')); ?>" />
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
    <script src="<?php echo e(base_url('assets/external/FullCalendar/main.min.js')); ?>"></script>
    <script src='<?php echo e(base_url('assets/external/FullCalendar/locales-all.js')); ?>'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                // themeSystem: themeSystem,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                // timeZone: 'UTC',
                locale: 'id',
                initialDate: '<?php echo e(date('Y-m-d')); ?>',
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                // editable: true,
                selectable: true,
                nowIndicator: true,
                dayMaxEvents: true, // allow "more" link when too many events
                // showNonCurrentDates: false,
                events: <?php echo json_encode($agenda_thn); ?>

            });
            calendar.render();
        });
    </script>
</body>

</html>
<?php /**PATH D:\PROJECT\xampp\htdocs\epikir_new\app\Modules\Landing\Views/content/publikasi/calendar.blade.php ENDPATH**/ ?>