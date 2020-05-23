<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<?= $this->Html->charset(); ?>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    

    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') ?>
    
    <?= $this->Html->meta(
       'keyword', 
       'PHP,CakePHP,frameworks,mysql'
    );?>

    <?= $this->Html->meta(
      'description',
      'This is an awesome app'
    );?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?= $this->fetch('title') ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><?= $this->Html->link('Home','/',['class' => 'active']);?></li>
            <li><?= $this->Html->link('Create Post','/posts/create');?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<hr>
<hr>
 
   
    <section class="container clearfix">
        

        <div class="row">
            <div class="col-md-4 col-lg-3 col-sm-4">
                <?= $this->element('sidebar'); ?>
                
            </div>
            <div class="col-md-8 col-lg-9 col-sm-8">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                
            </div>
        </div>
    </section>
  
    <footer>
    </footer>
</body>
</html>
