<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        {{ Auth::id() }}
        @vite('resources/js/app.js')
    </body>
    <script>
        // setTimeout(() => {
        //     window.Echo.channel('testChannel')
        //         .listen('testingEvent', (e) => {
        //             console.log(e);
        //         })
        // }, 200);


        setTimeout(() => {
            window.Echo.private('private-channel.user.{{ Auth::id() }}')
                .listen('PrivateEvent', (e) => {
                    console.log(e);
                })
        }, 400);
    </script>

</html>
