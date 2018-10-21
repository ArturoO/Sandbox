<html>
<head>
<title>JSONP EXAMPLE</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function handleJsonpData(data)
{
    data.forEach(function(item, index){
        var candidateHtml = '<tr>';
        candidateHtml += '<td>'+(index+1)+'</td>';            
        candidateHtml += '<td>'+(item.name)+'</td>';
        candidateHtml += '<td>'+(item.surname)+'</td>';
        candidateHtml += '<td>'+(item.age)+'</td>';
        candidateHtml += '</tr>';
        $('#candidates').append(candidateHtml);
    })
}

jQuery(document).ready(function($) {
    var scriptId="jsonp-request";    
    var scriptSrc="http://sandbox2.vh/jsonp/data.php?callback=handleJsonpData&timestamp="+Date.now();   //timestamp prevents the browser caching
    var $scriptTag = $("<script><\/script>");   //escaping / character
    $scriptTag.attr('id', scriptId);
    $scriptTag.attr('src', scriptSrc);
    $('body').append($scriptTag);   //load data
     $('#'+scriptId).remove();  //data is loaded, remove tag
});
</script>
</head>
<body>
    <table id="candidates">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Age</th>
        </tr>
    </table>
</body>
</html>
