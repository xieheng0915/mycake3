
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?= $post['title'] ?></h3>
  </div>
  <div class="panel-body">
  <?= $post['body'] ?>
  <?= $this->Html->image($post['image'],['alt' => 'myimage']); ?>

  
  <?= $this->Html->nestedList($languages); ?>

  <br>
  <table class="table table-striped">
    <?= $this->Html->tableHeaders(
      ['Id', 'Name', 'Email']
    ); ?>

    <?= $this->Html->tableCells([
      ['1', 'John Doe', 'jdoe@gmail.com'],
      ['2', 'Doug Williams', 'dwill@gmail.com'],
      ['3', 'Charlie Johnson', 'cjohn@gmail.com'],
    ]); ?>
  </table>
  
</div>  
</div>