<h3>Create Posts</h3>

<?= $this->Form->create(); ?>
    <?= $this->Form->input('title', array(
                                'label' => 'Post Title',
                                'class' => 'form-control'
    )); ?>

    <?= $this->Form->input('body', array(
                                'label' => 'Post Body',
                                'type' => 'textarea',
                                'escape' => false,
                                'class' => 'form-control'
    )); ?>
    <?= $this->Form->input('category', array(
                                'label' => 'Category',
                                'type' => 'select',
                                'class' => 'form-control',
                                'empty' => 'Select one',
                                'options' => ['Web Development', 'Design', 'AI Learning']
    )); ?>
    <?= $this->Form->input('author', array(
                                'label' => 'Author',
                                'class' => 'form-control'
    )); ?>
    <br>
   

    <br>
    <?= $this->Form->submit('Submit', array('class' => 'btn btn-primary')); ?>
<?= $this->Form->end(); ?>
