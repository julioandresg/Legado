<?php if($this->constrainImage):?>
	<a href='<?=$url;?>'><img width="<?=$this->width;?>px" height="<?=$this->height;?>px" src='<?=$src;?>' alt='<?=$alt;?>' /></a>
<?php else: ?>
	<a href='<?=$url;?>'><img  src='<?=$src;?>' alt='<?=$alt;?>' /></a>
<?php endif ?>
