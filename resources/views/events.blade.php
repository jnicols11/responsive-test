<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
            var events = {!! json_encode($events->toArray()) !!}

            // Set onChange function for input search bar
            document.querySelector('#input-search').addEventListener('change', function() {
                var search = document.getElementById('input-search').value;
                var titles = document.querySelectorAll('.item-title');

                for (var i = 0; i < titles.length; i++) {
                    var title = titles[i];

                    if (!title.textContent.includes(search)) {
                        title.parentElement.style.visibility='hidden';
                    } else {
                        title.parentElement.style.visibility='visible';
                    }
                }
            });

            // Set onChange function for Location selector
            document.querySelector('#location').addEventListener('change', function() {
                var location = document.getElementById('location').value;

                for (var i = 0; i < events.length; i++) {
                    var event = events[i];

                    if (event.location != location) {
                        // Hide the element
                        event.active = 'n';
                    } else {
                        // Show the element
                        event.active = 'y'
                    }
                }
            });

            // Set onChange function for min event length
            document.querySelector('#length-start').addEventListener('change', function() {
                var minLength = document.getElementById('length-start').value;

                for (var i = 0; i < events.length; i++) {
                    var event = events[i];

                    if (event.eventLengthInHours < minLength) {
                        // Hide the element
                        event.active = 'n';
                    } else {
                        // Show the element
                        event.active = 'y';
                    }
                }
            });

            // Set onChange function for max event length
            document.querySelector('#length-end').addEventListener('change', function() {
                var maxLength = document.getElementById('length-end').value;

                for (var i = 0; i < events.length; i++) {
                    var event = events[i];

                    if (event.eventLengthInHours > maxLength) {
                        // Hide the element
                        event.active = 'n';
                    } else {
                        // Show the element
                        event.active = 'y';
                    }
                }
            });

            // Set onChange function for min cost of event
            document.querySelector('#mincost').addEventListener('change', function() {
                var minCost = document.getElementById('mincost').value;

                for (var i = 0; i < events.length; i++) {
                    var event = events[i];

                    if (event.seatCost < minCost) {
                        // Hide the element
                        event.active = 'n';
                    } else {
                        // Show the element
                        event.active = 'y';
                    }
                }
            });

            // Set onChange function for max cost of event
            document.querySelector('#maxcost').addEventListener('chagne', function() {
                var maxCost = document.getElementById('maxcost').value;

                for (var i = 0; i < events.length; i++) {
                    var event = events[i];

                    if (event.seatCost > maxCost) {\
                        // Hide the element
                        event.active = 'n';
                    } else {
                        // Show the element
                        event.active = 'y';
                    }
                }
            });

        </script>
    </head>
    <body>
        <!-- Loop through events send with controller -->
        @foreach($events as $event)
            @if ($event->active == 'y')
                <!-- here is where Code would go for event grid -->
            @endif
        @endforeach

        <!--Search component -->

    </body>
</html>
