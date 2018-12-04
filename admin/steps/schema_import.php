<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$hasSteps = (
($_POST["step_code"] == "schema_import")
);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $hasSteps && check_bitrix_sessid('send_sessid')) {
    /** @noinspection PhpIncludeInspection */
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_js.php");

    $params = !empty($_POST['params']) ? $_POST['params'] : array();

    $schemaManager = new \Sprint\Migration\SchemaManager($params);

    $ok = false;

    try {
        $schemaManager->import();

        $ok = true;

    } catch (\Sprint\Migration\Exceptions\RestartException $e) {

        $json = json_encode(array(
            'params' => $schemaManager->getRestartParams(),
        ));

        ?><script>schemaProgress(<?=$schemaManager->getProgress()?>);</script><?
        ?><script>schemaExecuteStep('schema_import', <?=$json?>);</script><?
    }

    ?><script>schemaProgress(<?=$schemaManager->getProgress()?>);</script><?

    if ($ok){
        ?><script>schemaEnableButtons(1)</script><?
    }


    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_admin_js.php");
    die();
}