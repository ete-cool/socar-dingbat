<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SOCAR DINGBAT FONT</title>
        <?= css([ 'assets/css/base.css' ]) ?>
        <?= css([ 'assets/css/index.css' ]) ?>
        <?= css([ 'assets/css/drawing.css' ]) ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        <script>
            $( function() {
                $( "#draggable01" ).draggable();
            } );
            $( function() {
                $( "#click-film" ).draggable();
            } );
            $( function() {
                $( "#draggable03" ).draggable();
            } );
            $( function() {
                $( "#draggable04" ).draggable();
            } );
            $( function() {
                $( "#draggable05" ).draggable();
            } );
            $( function() {
                $( "#draggable06" ).draggable();
            } );
            $( function() {
                $( "#draggable07" ).draggable();
            } );
            $( function() {
                $( "#try" ).draggable();
            } );
            $( function() {
                $( "#draggable09" ).draggable();
            } );
            $( function() {
                $( "#draggable10" ).draggable();
            } );
        </script>
        <script>
            $(document).ready(function () {
                $(".page-title a").on('click', function (event) {
                    if (this.hash !== "") {
                        event.preventDefault();
                        var hash = this.hash;

                        $('html, body').animate({
                            scrollTop: $(hash)
                                .offset()
                                .top
                        }, 800, function () {
                            window.location.hash = hash;
                        });
                    }
                });
            });
        </script>
    </head>
    <body>