<h1 ng-non-bindable><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Logged user');?> - <?php echo htmlspecialchars($user->name_support)?></h1>

<?php if (isset($errors)) : ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/validation_error.tpl.php'));?>
<?php endif; ?>

<?php if (isset($account_updated) && $account_updated == 'done') : $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Account updated'); ?>
	<?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
<?php endif; ?>

<?php if (isset($account_updated_departaments) && $account_updated_departaments == 'done') : ?>
		<?php $msg = erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Account updated'); ?>
		<?php include(erLhcoreClassDesign::designtpl('lhkernel/alert_success.tpl.php'));?>
<?php endif; ?>

<ul class="nav nav-tabs mb-3" role="tablist">
	<li role="presentation" class="nav-item"><a href="#account" class="nav-link<?php if ($tab == '') : ?> active<?php endif;?>" aria-controls="account" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Account data');?></a></li>
	
	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','see_assigned_departments')) : ?>
	<li role="presentation" class="nav-item"><a class="nav-link<?php if ($tab == 'tab_departments') : ?> active<?php endif;?>" href="#departments" aria-controls="departments" role="tab" data-toggle="tab" ><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Assigned departments');?></a></li>
	<?php endif;?>
	
	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_visibility_list')) : ?>
	<li role="presentation" class="nav-item"><a class="nav-link<?php if ($tab == 'tab_settings') : ?> active<?php endif;?>" href="#lists" aria-controls="lists" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Visible lists');?></a></li>
	<?php endif; ?>
	
	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs/personal_canned_messages_tab.tpl.php'));?>

	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs/personal_auto_responder_tab.tpl.php'));?>

	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','allowtochoosependingmode')) : ?>
	<li role="presentation" class="nav-item"><a href="#pending" class="nav-link<?php if ($tab == 'tab_pending') : ?> active<?php endif;?>" aria-controls="pending" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Chats');?></a></li>
	<?php endif;?>
	
	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhspeech','changedefaultlanguage')) : ?>
	<li role="presentation" class="nav-item"><a class="nav-link<?php if ($tab == 'tab_speech') : ?> active<?php endif;?>" href="#speech" aria-controls="speech" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Speech');?></a></li>
	<?php endif;?>	

	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhpermission','see_permissions')) : ?>
	<li role="presentation" class="nav-item"><a class="nav-link<?php if ($tab == 'tab_permission') : ?> active<?php endif;?>" href="#permission" aria-controls="permission" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Permissions');?></a></li>
	<?php endif;?>
	
	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs/notifications_tab.tpl.php'));?>
	
	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs/custom_multiinclude_tab.tpl.php'));?>

</ul>

<div class="tab-content">
	<div role="tabpanel" class="tab-pane <?php if ($tab == '') : ?>active<?php endif;?>" id="account">
	
	    <?php include(erLhcoreClassDesign::designtpl('lhuser/account/above_account_multiinclude.tpl.php'));?>  
	
		<div class="explain"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Do not enter a password unless you want to change it');?></div>
		<br />
		<form action="<?php echo erLhcoreClassDesign::baseurl('user/account')?>" method="post" autocomplete="off" enctype="multipart/form-data">

		<?php include(erLhcoreClassDesign::designtpl('lhuser/account/above_account_form_multiinclude.tpl.php'));?> 
		
		<?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Username');?></label> <input <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_core_attributes')) : ?>disabled<?php endif?> type="text" ng-non-bindable class="form-control" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Your username');?>" name="Username" value="<?php echo htmlspecialchars($user->username);?>" />
        </div>

        <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_core_attributes')) : ?>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Password');?></label> <input autocomplete="new-password" ng-non-bindable type="password" class="form-control" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Enter a new password');?>" name="Password" value="<?php echo htmlspecialchars(isset($user->password_temp_1) ? $user->password_temp_1 : '');?>" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Repeat password');?></label> <input autocomplete="new-password" ng-non-bindable type="password" class="form-control" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Repeat the new password');?>" name="Password1" value="<?php echo htmlspecialchars(isset($user->password_temp_2) ? $user->password_temp_2 : '');?>" />
        </div>
         <?php endif; ?>

        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Email');?></label>
            <input type="text" ng-non-bindable class="form-control" <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_core_attributes')) : ?>disabled<?php endif?> value="<?php echo $user->email;?>" name="Email" placeholder="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Your email address');?>" id="email" class="required email valid">
        </div>

        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Chat nickname');?></label>
            <input type="text" <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_chat_nickname')) : ?>disabled<?php endif?> ng-non-bindable class="form-control" name="ChatNickname" value="<?php echo htmlspecialchars($user->chat_nickname);?>" />
        </div>

        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Name');?></label> <input <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_name_surname')) : ?>disabled<?php endif?> ng-non-bindable type="text" class="form-control" name="Name" value="<?php echo htmlspecialchars($user->name);?>" />
        </div>
        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Surname');?></label> <input <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_name_surname')) : ?>disabled<?php endif?> ng-non-bindable type="text" class="form-control" name="Surname" value="<?php echo htmlspecialchars($user->surname);?>" />
        </div>

        <div class="form-group">
            <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Job title');?></label> <input <?php if (!erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_job_title')) : ?>disabled<?php endif?> ng-non-bindable type="text" class="form-control" name="JobTitle" value="<?php echo htmlspecialchars($user->job_title);?>" />
        </div>

	    <?php include(erLhcoreClassDesign::designtpl('lhuser/parts/time_zone.tpl.php'));?>
	    
	    <div class="row">	   
    	   	<?php include(erLhcoreClassDesign::designtpl('lhuser/account/part/visibility.tpl.php'));?>

    	   	<?php include(erLhcoreClassDesign::designtpl('lhuser/account/part/hidability.tpl.php'));?>

    	   	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','receivepermissionrequest')) : ?>
    	   	<div class="col-4">
        	   	<div class="form-group">
        		  <label title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','I receive other operators permissions request');?>"><input type="checkbox" value="on" name="ReceivePermissionRequest" <?php echo $user->rec_per_req == 1 ? 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/new','I receive other operators permissions request')?></label>
        		</div>
    		</div>
    		<?php endif; ?>
        </div>

        <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','changeskypenick') || erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_core_attributes')) : ?>
		<div class="form-group">
			<div class="row">
    	    	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','changeskypenick')) : ?>
    			<div class="col-md-6">
					<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Skype');?></label> <input ng-non-bindable class="form-control" type="text" name="Skype" value="<?php echo htmlspecialchars($user->skype);?>" />
				</div>
    			<?php endif;?>
                <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_core_attributes')) : ?>
		         <div class="col-md-6">
					<label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','XMPP username');?></label> <input ng-non-bindable class="form-control" type="text" name="XMPPUsername" value="<?php echo htmlspecialchars($user->xmpp_username);?>" />
				</div>
                <?php endif;?>
			</div>
		</div>
        <?php endif;?>

        <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','changephoto')) : ?>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Photo');?>, (jpg,png)</label> <input type="file" name="UserPhoto" value="" />

                    <?php if ($user->has_photo) : ?>
                        <div><img src="<?php echo $user->photo_path?>" alt="" width="50" /><br /> <label><input type="checkbox" name="DeletePhoto" value="1" /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Delete')?></label></div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-6">
                <?php $avatarOptions = ['avatar' => $user->avatar]; ?>
                <?php include(erLhcoreClassDesign::designtpl('lhuser/parts/avatar_build.tpl.php'));?>
            </div>
        </div>
        <?php endif; ?>

	    <?php include(erLhcoreClassDesign::designtpl('lhuser/account/below_account_multiinclude.tpl.php'));?>
	        				
			<div class="btn-group" role="group" aria-label="...">
				<input type="submit" name="Update" class="btn btn-primary" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Update');?>"> 
				<a class="btn btn-secondary" href="<?php echo erLhcoreClassDesign::baseurl()?>"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Return');?></a>
			</div>

		</form>
	</div>
	
	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','see_assigned_departments')) : ?>
	<div role="tabpanel" ng-non-bindable class="tab-pane <?php if ($tab == 'tab_departments') : ?>active<?php endif;?>" id="departments" >
    	<?php 
    	   $userDepartaments = erLhcoreClassUserDep::getUserDepartamentsIndividual();
    	   $userDepartamentsRead = erLhcoreClassUserDep::getUserDepartamentsIndividual(false, true);
    	   $userDepartamentsGroup = erLhcoreClassModelDepartamentGroupUser::getUserGroupsIds($user->id);
    	?>
    	<?php if ($editdepartaments === true) { ?>
    	<form action="<?php echo erLhcoreClassDesign::baseurl('user/account')?>#departments" method="post" enctype="multipart/form-data">
            <?php include(erLhcoreClassDesign::designtpl('lhuser/account/departments_assignment.tpl.php'));?>
            
            <input type="submit" class="btn btn-secondary" name="UpdateDepartaments_account" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Update');?>" />
            
		</form>
    	<?php } else {?>
        	<?php foreach (erLhcoreClassDepartament::getDepartaments() as $departament) : ?>
        	    <label><input type="checkbox" disabled value="<?php echo $departament['id']?>" <?php echo in_array($departament['id'],$userDepartaments) ? 'checked="checked"' : '';?> /> <?php echo htmlspecialchars($departament['name'])?></label><br>
        	<?php endforeach; ?>    
    	<?php } ?>
	</div>
	<?php endif;?>
		
	<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','change_visibility_list')) : ?>
    <div role="tabpanel" class="tab-pane <?php if ($tab == 'tab_settings') : ?>active<?php endif;?>" id="lists">
		<form action="<?php echo erLhcoreClassDesign::baseurl('user/account')?>" method="post">

  	        <?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

	        <label><input type="checkbox" name="pendingTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_pending_list',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Pending chats list enabled');?></label><br> 
	        <label><input type="checkbox" name="activeTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_active_list',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Active chats list enabled');?></label><br>

            <?php if (erLhcoreClassModelChatConfig::fetchCache('list_unread')->current_value == 1) : ?>
            <label><input type="checkbox" name="unreadTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_unread_list',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Unread chats list enabled');?></label><br>
            <?php endif; ?>

            <?php if (erLhcoreClassModelChatConfig::fetchCache('list_closed')->current_value == 1) : ?>
            <label><input type="checkbox" name="closedTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_close_list',0) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Closed chats list enabled');?></label><br>
			<?php endif; ?>

            <label><input type="checkbox" name="mychatsTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_mchats_list',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','My pending and active chats list enabled');?></label><br>
			<label><input type="checkbox" name="botchatsTabEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('enable_bot_list',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Bot chats list enabled');?></label><br>

			<input type="submit" class="btn btn-secondary" name="UpdateTabsSettings_account" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Update');?>" />
		</form>
	</div>
    <?php endif; ?>
  	
  	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs_content/personal_canned_messages_tab.tpl.php'));?>

  	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs_content/personal_auto_responder_tab.tpl.php'));?>

    <div role="tabpanel" class="tab-pane <?php if ($tab == 'tab_pending') : ?>active<?php endif;?>" id="pending">

		<form action="<?php echo erLhcoreClassDesign::baseurl('user/account')?>" method="post">
    
    	  	<?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

            <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhuser','allowtochoosependingmode')) : ?>
            <div class="form-group">
				<label><input type="checkbox" name="showAllPendingEnabled" value="1" <?php erLhcoreClassModelUserSetting::getSetting('show_all_pending',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','I can see all pending chats, not only assigned to me');?></label>
			</div>
            <?php endif; ?>

            <div class="form-group">
                <label><input type="checkbox" name="autoAccept" value="1" <?php $user->auto_accept == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Automatically accept assigned chats');?></label>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="auto_join_private" value="1" <?php erLhcoreClassModelUserSetting::getSetting('auto_join_private',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Auto join private chats');?></label>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="exclude_autoasign" value="1" <?php $user->exclude_autoasign == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Exclude me from auto assign workflow');?></label>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="auto_preload" value="1" <?php erLhcoreClassModelUserSetting::getSetting('auto_preload',0) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Auto preload previous visitor chat messages');?></label>
            </div>

            <div class="form-group">
                <label><input type="checkbox" name="auto_uppercase" value="1" <?php erLhcoreClassModelUserSetting::getSetting('auto_uppercase',1) == 1 ? print 'checked="checked"' : '' ?> /> <?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Auto uppercase sentences');?></label>
            </div>

            <div class="form-group">
                <label><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Maximum active chats');?></label>
                <input type="text" ng-non-bindable class="form-control" name="maximumChats" value="<?php echo $user->max_active_chats?>" />
            </div>

			<input type="submit" class="btn btn-secondary" name="UpdatePending_account" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Update');?>" />

		</form>

	</div>

    <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhspeech','changedefaultlanguage')) : ?>
    <div role="tabpanel" class="tab-pane <?php if ($tab == 'tab_speech') : ?>active<?php endif;?>" id="speech">

		<form action="<?php echo erLhcoreClassDesign::baseurl('user/account')?>" method="post">

	  	<?php include(erLhcoreClassDesign::designtpl('lhkernel/csfr_token.tpl.php'));?>

	  	<?php $dataSpeech = array(
	  	        'language' => (int)erLhcoreClassModelUserSetting::getSetting('speech_language',''),
	  	        'dialect' => (int)erLhcoreClassModelUserSetting::getSetting('speech_dialect',''),
	  	        'optional' => true,
	  	    );
	  	?>
	  	
		<?php include(erLhcoreClassDesign::designtpl('lhspeech/speech_form_fields.tpl.php'));?>

		<?php include(erLhcoreClassDesign::designtpl('lhspeech/my_languages.tpl.php'));?>

		<input type="submit" class="btn btn-secondary" name="UpdateSpeech_account" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Update');?>" />

		</form>
	</div>
  <?php endif; ?>
  
    <?php if (erLhcoreClassUser::instance()->hasAccessTo('lhpermission','see_permissions')) : ?>
    <div role="tabpanel" class="tab-pane <?php if ($tab == 'tab_permission') : ?>active<?php endif;?>" id="permission">
        <input type="button" class="btn btn-secondary" name="UpdateSpeech_account" onclick="lhinst.showMyPermissions('<?php echo $user->id?>')" value="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('user/account','Show permissions');?>" />
		<div id="permissions-summary"></div>		
    </div>
	<?php endif;?>
	
	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs_content/notifications_tab.tpl.php'));?>
	
	<?php include(erLhcoreClassDesign::designtpl('lhuser/menu_tabs_content/custom_multiinclude_tab.tpl.php'));?>
	
</div>