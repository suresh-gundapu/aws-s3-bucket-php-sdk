<?php include_once 'file_upload.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>AWS-S3-PHP SDK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>AWS-S3-PHP SDK -FILE Upload</h1>
  </div>
  <div class="container mt-5">
    <?php if (!empty($statusMsg)) { ?>
      <div class="alert alert-<?php echo $status ?>"><?php echo $statusMsg; ?>
      </div>
    <?php
    } ?>
    <div class="card border-primary my-4">
      <div class="card-header bg-primary">
        <div class="card-title text-white">AWS - File Upload </div>
      </div>
      <div class="card-body">
        <form class="row g-3" method="post" enctype="multipart/form-data">
          <div class="col-auto">
            <div class="mb-3">
              <input class="form-control" type="file" id="formFile" name="file">
            </div>
          </div>
          <div class="col-auto">
            <input type="submit" class="btn btn-primary" name="submit" value="Upload">
          </div>
        </form>
      </div>
    </div>
    <div>
      <?php if (!empty($s3_file_link)) { ?>

        <div class="result">
          <p><b>Object URL:</b> <a href="<?php echo $s3_file_link; ?>" target="_blank">
              <?php echo $s3_file_link; ?></a></p>
        </div>
      <?php } ?>
    </div>
  </div>

</body>

</html>