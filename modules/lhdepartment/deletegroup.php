<?php

if (!$currentUser->validateCSFRToken($Params['user_parameters_unordered']['csfr'])) {
    die('Invalid CSFR Token');
    exit;
}

$group = erLhcoreClassModelDepartamentGroup::fetch($Params['user_parameters']['id']);
$group->removeThis();

erLhcoreClassAdminChatValidatorHelper::clearUsersCache();

erLhcoreClassModule::redirect('department/group');
exit;

?>