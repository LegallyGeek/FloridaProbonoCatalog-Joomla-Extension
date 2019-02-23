<?php
class ModFPBMHelper
{  
    public static function getCatalog($params)
    {
        $providerID = $params->get('providerID');
        $cohortID = $params->get('cohortID');

        $catalogHTML = <<<EOT
<probono-catalog cohort-id="$cohortID" partner-id="$providerID"></probono-catalog>
<script src="https://probono.savvysuit.com/cdn-origin/current/webcomponents-loader.js"></script>
<script type="module" src="https://probono.savvysuit.com/cdn-origin/current/probono-catalog.js"></script>
<script nomodule src="https://probono.savvysuit.com/cdn-origin/current/probono-catalog-nomodule.js"></script>

EOT;

        return $catalogHTML;
    }
}