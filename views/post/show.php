<h1>SHOW</h1>
<?$this->registerJsFile('@web/web/js/main.js',['depends'=>'\yii\web\YiiAsset']);    ?>

<?

$script = <<< JS
    $.ajax({
            url:'',
            type:'post',
            data:{'test':124},
            success: function(data) {
              console.log(data);
            },
            error: function() {
              console.log('error ajax');
            }
        });
JS;

$this->registerJs($script);

?>
