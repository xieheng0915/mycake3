   
<?php foreach($posts as $post): ?>
    <div class="well">
        <h3><?= $this->Html->link($post['title'],'/posts/'.$post['id']) ?></h3>

        <small><strong><?= $post['created']->format(DATE_RFC850); ?></strong></small>
        <br>
        <?= $this->Text->truncate($post['body'],200,['ellipsis' => '...', 'exact' => false]); ?>
        <hr>
        <?= $this->Html->link('Read More', '/posts/'.$post['id']) ?>
    </div>
  
<?php endforeach; ?>
