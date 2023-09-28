<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Management</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #EE82EE; 
            color: #000; 
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
        }

        h2 {
            color: #EE82EE; 
        }

        .form-label {
            font-weight: bold;
            color: #EE82EE; 
        }

        .form-control,
        .form-select {
            background-color: #fff; 
            border: 1px solid #EE82EE; 
            color: #000;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #fff;
            border: 1px solid #EE82EE;
            color: #000;
            box-shadow: none;
        }

        .btn-success {
            background-color: #EE82EE;
            border-color: #EE82EE;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }

        .table {
            background-color: #fff; 
            color: #000; 
            border: 1px solid #EE82EE; 
        }

        .table thead th {
            background-color: #EE82EE;
            color: #fff; 
        }

        .btn-danger {
            background-color: #FF3E3E;
            border-color: #FF3E3E;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #FF6565; 
            border-color: #FF6565;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Add New Playlist</h2>
        <form action="<?= site_url('music/add_playlist') ?>" method="post">
            <div class="mb-3">
                <label for="playlist_name" class="form-label">Playlist Name:</label>
                <input type="text" name="playlist_name" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Add Playlist</button>
        </form>
    </div>
    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Playlist</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($playlist as $playlist): ?>
                    <tr>
                        <td>
                            <?= $playlist['playlist_name'] ?>
                        </td>
                        <td>
                            <a href="<?= site_url('music/delete_playlist/' . $playlist['id']) ?>"
                                class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container mt-4">
        <a class="btn btn-primary btn-back" href="/music">Go back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
