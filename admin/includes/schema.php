<?php
/** @var $versionManager \Sprint\Migration\VersionManager */

$schemaManager = new \Sprint\Migration\SchemaManager();

?>
<div id="schema-container" data-sessid="<?= bitrix_sessid() ?>">
    <div class="sp-group">
        <div class="sp-group-row2">
            <div class="sp-block sp-block-scroll sp-white">
                <div id="schema_list" class="sp-scroll"></div>
            </div>
            <div class="sp-block sp-block-scroll">
                <div id="schema_log" class="sp-scroll"></div>
            </div>
        </div>
    </div>

    <div class="sp-group">
        <div class="sp-group-row1">
            <div class="sp-block">
                <input type="button" value="<?= GetMessage('SPRINT_MIGRATION_SCHEMA_COMPARE') ?>" class="sp-schema-compare adm-btn-green"/>
                <input type="button" value="<?= GetMessage('SPRINT_MIGRATION_SCHEMA_IMPORT') ?>" class="sp-schema-import"/>
                <input type="button" value="<?= GetMessage('SPRINT_MIGRATION_SCHEMA_EXPORT') ?>" class="sp-schema-export"/>

                <div style="float: right;width: 300px;" id="schema_progress">
                    <div style="height: 10px;background: #eee">
                        <div id="schema_progress_bar" style="height: 10px;background: #99d;width: 30%;"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="sp-separator"></div>
</div>


<? include __DIR__ . '/../assets/schema.php'; ?>
