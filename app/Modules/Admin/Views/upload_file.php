<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <form action="<?= base_url('Admin/prosesUpload') ?>" method="post" enctype="multipart/form-data">
        <?= token_csrf() ?>
        <input type="file" name="file_upload">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>