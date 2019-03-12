<h1>Action Index</h1>
<h3><?=$hi?></h3>
<?if(isset($id) && $id != ''):?>
    ID = <?=$id?>
    <br>
    <br>
<?endif;?>
<?foreach ($names as $name):?>
    <p><?=$name?></p>
<?endforeach;?>
