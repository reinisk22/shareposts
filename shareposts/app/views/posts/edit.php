
<?php require APPROOT . '/views/inc/header.php';?>

<div class="card card-body bg-light mt-5">
  <h2>Edit Post</h2>
    <p>Create a post</p>
    <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>
      <div class="form-group">
        <label for="Body">Body: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
        <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
      <a href="<?php echo URLROOT; ?>/posts" class=" float-right btn btn-outline-dark"><i class="fas fa-undo-alt"></i> Back</a>
    </form>
</div>

<?php require APPROOT . '/views/inc/footer.php';?>
