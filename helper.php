<?php
class ModFPBMHelper
{  
    public static function getCatalog($params)
    {
        $providerID = $params->get('providerID');

        $catalogHTML = <<<EOT
<script src="https://probono.savvysuit.com/cdn-origin/webcomponents-lite.min.js"></script>
<link rel="import" href="https://probono.savvysuit.com/cdn-origin/probono-catalog.html">
<probono-catalog partner-id="$providerID"></probono-catalog>
EOT;

        return $catalogHTML;
    }
}