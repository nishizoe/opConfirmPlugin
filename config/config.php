<?php
$this->dispatcher->connect('op_action.post_execute', array('opConfirmPluginObserver', 'PostListener'));
