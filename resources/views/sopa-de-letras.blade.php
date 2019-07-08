<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sopa de Letras</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Sopa de Letras
                </div>
                <select class="custom-select" id="tablero" name="tablero">
                    <option value="">Seleccione un tablero para jugar</option>
                    @foreach($options as $option)
                        <option value="{{ $option }}">Tablero de {{ $option }}</option>
                    @endforeach
                </select>
                <p id="message"></p>

                @include('_flash-message')

            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tablero').change(function () {
            let value = $(this).val();
            let $message = $("#message");

            if (!value) {
                $message.empty();
                return;
            }

            $message.removeClass().empty().append('Analizando matriz...');

            $.ajax({
                data: {
                    'tablero': value,
                    '_token': '{{ csrf_token() }}'
                },
                url: '{{ route('resolver') }}',
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    $message.removeClass().addClass('success').empty().append('La palabra "OIE" aparece <strong>' + response.result + '</strong> veces en la matriz seleccionada.');
                },
                error: function (response) {
                    if (response.responseJSON.hasOwnProperty('errors')) {
                        $.each(response.responseJSON.errors, function(key, value) {
                            $message.removeClass().addClass('error').empty().append('Error: ' + value);
                        });
                    } else {
                        $message.removeClass().addClass('error').empty().append('Error: ' + response.responseJSON.message);
                    }
                }
            })
        });
    });
</script>
