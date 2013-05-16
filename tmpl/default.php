<?php
/**
 * Style 1
 */
// no direct access
defined('_JEXEC') or die;

?>


<?php if($mod_title): ?>
<h3><?php echo $mod_title;?></h3>
<?php endif; ?>

<div class="<?php echo $mod_class;?>">
<?php foreach ($list as $item) : ?>
<?php $images = json_decode($item->images);?>
  <div class="span">
    <h3 class="m_title"><?php echo $item->title; ?></h3>
    <?php echo $item->introtext; ?>
    <a href="<?php echo $item->link; ?>" class="hoverBorder plus">
      <img src="<?php echo $images->image_intro; ?>" alt="<?php echo $item->title; ?>">
      <h6><?php echo JText::_('MOD_TESTIMONIALS_READMORE'); ?></h6>
    </a>
  </div>
<?php endforeach; ?>
</div>