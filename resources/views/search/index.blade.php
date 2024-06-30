<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Search</h1>
    <div class="form-group">
        <label for="search">Search by Name, Designation, or Department</label>
        <input type="text" id="search" class="form-control" placeholder="Enter search term">
    </div>
    <button id="search-btn" class="btn btn-primary">Search</button>
    
    <h2 class="mt-5">Results</h2>
    <div id="results"></div>
</div>

<script>
    $('#search-btn').on('click', function() {
        var searchTerm = $('#search').val();

        $.ajax({
            url: '{{ route('search.results') }}',
            type: 'GET',
            data: {
                search: searchTerm
            },
            success: function(data) {
                $('#results').empty();
                if (data.length === 0) {
                    $('#results').append('<p>No results found</p>');
                } else {
                    $.each(data, function(index, user) {
                        $('#results').append('<div class="result-item"><h3>' + user.name + '</h3><p>' + user.designation.name + '</p><p>' + user.department.name + '</p></div><hr>');
                    });
                }
            }
        });
    });
</script>
</body>
</html>
