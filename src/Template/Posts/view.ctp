<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?= $post['title'] ?></h3>
  </div>
  <div class="panel-body">
    <?= $post['body'] ?>
    <br>  
  </div>  
</div>

<?= $this->Form->postLink('delete',
                          ['action' => 'delete', $post['id']],
                          ['confirm' => 'Are you sure to delete the post?',
                          'class' => 'btn btn-danger pull-right']); ?>
                          
<?= $this->Html->link('Edit Post', ['action' => 'edit', $post['id']], ['class' => 'btn btn-default']); ?>