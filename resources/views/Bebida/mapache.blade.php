<html>
    <head>
    </head>
    <body>
        Hola mundo
        <div class="asd">
            <p id="texto1"></p>
            <p id="texto2"></p>
        </div>
    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        fetch('/mapaches',{
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            credentials: 'same-origin',
        }).then(function(response){
            response.json().then(function(data){
                $('.asd #texto1').text(data.mapaches);
                $('.asd #texto2').text(data.tanukis);
            })
        })
    })
</script>