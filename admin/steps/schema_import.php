<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$hasSteps = (
    ($_POST["step_code"] == "schema_import") ||
    ($_POST["step_code"] == "schema_test")
);

if ($_SERVER["REQUEST_METHOD"] == "POST" && $hasSteps && check_bitrix_sessid('send_sessid')) {
    /** @noinspection PhpIncludeInspection */
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_admin_js.php");

    $params = !empty($_POST['params']) ? $_POST['params'] : array();

    $schemaManager = new \Sprint\Migration\SchemaManager($params);

    if ($_POST["step_code"] == "schema_test") {
        $schemaManager->setTestMode(1);
    }

    $ok = false;
    $error = false;

    try {
        $schemaManager->import();

        $ok = true;

    } catch (\Sprint\Migration\Exceptions\RestartException $e) {

        $json = json_encode(array(
            'params' => $schemaManager->getRestartParams(),
        ));

        ?>
        <script>
            schemaExecuteStep('<?=$_POST["step_code"]?>', <?=$json?>);
        </script>
        <?
    } catch (\Exception $e) {
        \Sprint\Migration\Out::outErrorText($e->getMessage());
        $error = true;

    } catch (\Throwable $e) {
        \Sprint\Migration\Out::outErrorText($e->getMessage());
        $error = true;
    }

    $progress = $schemaManager->getProgress();
    foreach ($progress as $type => $val) {
        ?>
        <script>
            schemaProgress('<?=$type?>',<?=$val?>);
        </script>
        <?
    }

    if ($ok) {
        ?>
        <script>
            schemaProgressReset();
            schemaRefresh();
        </script>
        <?
    }

    if ($error) {
        ?>
        <script>
            schemaRefresh();
        </script>
        <?
    }


    /** @noinspection PhpIncludeInspection */
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_admin_js.php");
    die();
}