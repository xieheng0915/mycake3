<h3>Latest Posts</h3>
<ul class="list-group">
    <?php foreach($posts as $post): ?>
        <li class="list-group-item">
        <?= $this->Html->link($post['title'],'/post/'.$post['id']) ?>
        </li>
        
    <?php endforeach; ?>
</ul>