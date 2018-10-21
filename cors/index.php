<html>
<head>
<title>CORS EXAMPLE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $.post(
        'http://sandbox2.vh/cors/data.json',
        {},        
        function(data){
            console.log('Data returned from sandbox2');
            console.log(data);
        },
        'json'
    )
});
</script>
</head>
<body>
</body>
</html>
