<?php
require_once('../../../wp-load.php');
$bogacontestant->setID($_POST['contestant_id']);
echo $bogacontestant->create_img($_POST['main'], $_POST['path'], intval($_POST['post_id']));