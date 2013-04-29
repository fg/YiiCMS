<!doctype html>
<html lang="tr">
	<head>
		<title>Admin Panel</title>
		<meta charset="utf-8">
		<link href="<?php echo Yii::app()->request->baseUrl; ?>/style/back/css/main.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php 
			$this->widget('bootstrap.widgets.TbNavbar', array(
				'brand' => 'Film Adası',
				'brandOptions' => array('style'=>'width:auto;margin-left: 0px;'),
				'fixed' => 'top',
				'htmlOptions' => array('style' => 'position:absolute'),
				'items' => array(
					array(
						'class' => 'bootstrap.widgets.TbMenu',
						'items' => array(
							'---',
							array('label' => 'Anasayfa', 'url' => '#', 'active' => true),
							array('label' => 'Sayfalar', 'url' => '#','items' => array(
								array('label'=>'Sayfa Ekle', 'url'=> Yii::app()->createUrl('admin/page/create')),
								array('label'=>'Sayfa Listesi', 'url'=> Yii::app()->createUrl('admin/page/list')),
								 )),
							array('label' => 'Kategoriler', 'url' => '#', 'items' => array(
								array('label' => 'Kategori Ekle', 'url' => Yii::app()->createUrl('admin/category/create')),
								array('label' => 'Kategori Listesi', 'url' => Yii::app()->createUrl('admin/category/list')),
								)),
							array('label' => 'Filmler', 'url' => '#', 'items' => array(
								array('label' => 'Film Ekle', 'url' => Yii::app()->createUrl('admin/movie/create')),
								array('label' => 'Film Listesi', 'url' => Yii::app()->createUrl('admin/movie/list')),
								)),
							array('label' => 'Link', 'url' => '#'),
							
							'---',
						)
					),
					array(
						'class'=>'bootstrap.widgets.TbMenu',
						'htmlOptions'=>array('class'=>'pull-right'),
						'items'=>array(
							'---',
							array('label'=>'Hesabım', 'url'=>'#', 'items'=>array(
								array('label'=>'Ayarlar', 'url'=>'#'),
								array('label'=>'Şifremi Değiştir', 'url'=>'#'),
								'---',
								array('label'=>'Çıkış Yap', 'url'=>Yii::app()->createUrl('admin/site/logout')),
							)),
						),
					),
				)
			));	
		?>
		<div class="container">
			<div class="span12" style="background:#FFF;">
				<div style="width:95%; margin-top: 50px; margin-left:auto; margin-right:auto;">
					<?php echo $content;?>
				</div>
			</div>
		</div>
	</body>
</html>
