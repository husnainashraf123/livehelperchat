<div class="message-row"><div class="msg-date"><?php echo date(erLhcoreClassModule::$dateDateHourFormat,$msg->time);?></div><span class="usr-tit"><?php echo htmlspecialchars($msg->name_support)?>:&nbsp;</span><?php echo erLhcoreClassBBCode::make_clickable(htmlspecialchars($msg->msg))?></div>