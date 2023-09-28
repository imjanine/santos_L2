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

        .btn-primary {
            background-color: #EE82EE;
            border-color: #EE82EE;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }

        .btn.btn-primary.btn-block {
            background-color: #EE82EE;
            border-color: #EE82EE;
            color: #fff;
        }

        .btn.btn-primary.btn-block:hover {
            background-color: #FFB6C1;
            border-color: #FFB6C1;
        }

        .btn.btn-primary.btn-back {
            background-color: transparent;
            border-color: #EE82EE;
            color: #EE82EE;
        }

        .btn.btn-primary.btn-back:hover {
            background-color: transparent;
            border-color: #FFB6C1;
            color: #FFB6C1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Upload Music</h2>
        <form action="<?= site_url('music/upload') ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="music_file" class="form-label">Select Music:</label>
                <input type="file" name="music_file" class="form-control" accept=".mp3, .ogg" required>
            </div>
            <div class="mb-3">
                <label for="playlist" class="form-label">Select Playlist:</label>
                <select name="playlist" class="form-select">
                    <option value="none">Select a Playlist</option>
                    <?php if (isset($playlist)): ?>
                        <?php foreach ($playlist as $pl): ?>
                            <option value="<?= $pl['playlist_name'] ?>">
                                <?= $pl['playlist_name'] ?>
                            </option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-block">Upload</button>
        </form>
        <br>
        <a class="btn btn-primary btn-back" href="/music">Go Back</a>
    </div>
    <!-- Include Bootstrap JS and jQuery (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
