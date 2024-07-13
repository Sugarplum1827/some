<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Patient</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Search Patient</h1>
    <input type="text" id="search" placeholder="Search for patients...">
    <div id="result"></div>

    <script>
        $(document).ready(function(){
            $('#search').on('input', function(){
                var search = $(this).val();
                if(search != ''){
                    $.ajax({
                        url: 'search_autocomplete.php',
                        method: 'POST',
                        data: {query: search},
                        success: function(data){
                            $('#result').html(data);
                        }
                    });
                } else {
                    $('#result').html('');
                }
            });

            $(document).on('click', 'li', function(){
                var name = $(this).text();
                window.location.href = "result.php?name=" + name;
            });
        });
    </script>
    <a href="add.php">add Up</a>
</body>
</html>