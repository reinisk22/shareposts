
<?php require APPROOT . '/views/inc/header.php';?>

<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
  Written by <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?>
</div>
<p><?php echo $data['post']->body; ?></p>

<?php if ($data['post']->user_id == $_SESSION['user_id']): ?>
<hr>
<a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>

<form action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post" class="float-right ml-1">
<input type="submit" Value="Delete" class="btn btn-danger">
</form>
<?php endif;?>
<a href="<?php echo URLROOT; ?>/posts" class=" float-right btn btn-outline-dark"><i class="fas fa-undo-alt"></i> Back</a>


<?php require APPROOT . '/views/inc/footer.php';?>
