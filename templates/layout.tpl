<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $this->title ?></title>
        <?php foreach ($this->css as $style): ?>
			<link rel="stylesheet" type="text/css" href="<?php echo $this->css_folder . $style ?>.css"/>
		<?php endforeach; ?>
    </head>
    <body>
    <div id="header">
    	<?php $this->RenderHeader(); ?>
    </div>
    <div id="content">
    	<?php $this->RenderBody(); ?>
    </div>
    </body>
</html>