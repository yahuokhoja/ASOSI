<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acocи</title>
    <link rel="stylesheet" href="asosi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortkut icon" href="favicon-32x32.png">
   <script src="fullcalendar-6.1.15\dist\index.global.js"></script>
    <script src="fullcalendar-6.1.15\dist\index.global.min.js"></script>
</head>
<body>
     <!-- <form action="a.php" method="post">
    <header class="p-3 text-bg-dark">
        
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                    </a>
                    

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="#" name="a" type="submit" class="js-btn"id="submit"
                        onclick=();>Қабули Mуштари</a></li>
    
                     
                        
                        
    
    
    
                        <li><a  href="#" class="nav-link px-2 text-white">Қисмҳои эҳтиётӣ</a></li>
                        <li><a href="\asosi\korgarhtml.php" class="nav-link px-2 text-white">Коргар</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Таҷҳизот</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Дигар</a></li>
                    </ul>
                    
                    
                    
                    
                    
                    
                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
                <form > 
                    <input  type="search"  name = "a"class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                    <button type="submit" > Ҷустуҷӯ</button>
                </form>
                </div>
                </header>
                </form>  -->
                <!-- <button class ="js-btn" >text</button>
                <div class="js-text-wrapper"></div> -->
                <?php
     
     require"blocs\headers.php";
     
     
     
    
    
    
    ?>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialDate: '2023-01-12',
    initialView: 'timeGridWeek',
    nowIndicator: true,
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
    },
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    selectable: true,
    selectMirror: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
      {
        title: 'All Day Event',
        start: '2023-01-01',
      },
      {
        title: 'Long Event',
        start: '2023-01-07',
        end: '2023-01-10'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-09T16:00:00'
      },
      {
        groupId: 999,
        title: 'Repeating Event',
        start: '2023-01-16T16:00:00'
      },
      {
        title: 'Conference',
        start: '2023-01-11',
        end: '2023-01-13'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T10:30:00',
        end: '2023-01-12T12:30:00'
      },
      {
        title: 'Lunch',
        start: '2023-01-12T12:00:00'
      },
      {
        title: 'Meeting',
        start: '2023-01-12T14:30:00'
      },
      {
        title: 'Happy Hour',
        start: '2023-01-12T17:30:00'
      },
      {
        title: 'Dinner',
        start: '2023-01-12T20:00:00'
      },
      {
        title: 'Birthday Party',
        start: '2023-01-13T07:00:00'
      },
      {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2023-01-28'
      }
    ]
  });

  calendar.render();
});

</script>
<style>

body {
  margin: 40px 10px;
  padding: 0;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 14px;
}

#calendar {
  max-width: 1100px;
  margin: 0 auto;
}

</style>
</head>
<body>

<div id='calendar'></div>

</body>
</html>






    
    
    
    <!-- <div class="container mt-4">
        <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">

            <h1>КОРГАР</h1>
    
                <form action="php\korgar.php" method="post">
    
                    <input type="text" class="form-control" 
                    name="name"
                    id="name" placeholder="Ном">
                    
                    <input type="text" class="form-control" 
                    name="telefone"
                    id="telefone" placeholder="telefone"> 

                    <input type="text" class="form-control" 
                    name="kor"
                    id="kor" placeholder="kor">

                    <input type="text" class="form-control"
                    name = "narhikor"
                    id="narhikor" placeholder="narhikor">

                    <input type="text" class="form-control" 
                    name="tamga"
                    id="tamga" placeholder="tamga"> -->

                     <!-- <input type="text" class="form-control" 
                    name="tashhis"
                    id="tashhis" placeholder="Ташхис">
                    <input type="text" class="form-control" 
                    name="kismiehtieti"
                    id="kismiehtieti" placeholder="Қисмҳои эҳтиётӣ">
                    <input type="text" class="form-control" 
                    name="narhikismiehtieti"
                    id="narhikismiehtieti" placeholder="Нархи Қисмҳои эҳтиётӣ">
                    <input type="text" class="form-control" 
                    name="ijrokunanda"
                    id="ijrokunanda" placeholder="Иҷрокунанда">
                    <input type="text" class="form-control" 
                    name="narhikor"
                    id="narhikor" placeholder="Нархи кор"> -->
                    <!-- <button class="btn btn-primary"
                    type="sabmit">ТАСДИҚ</button>
                
                </div>

        
        </div>     -->

            
                    

</body>


</html>