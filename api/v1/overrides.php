<?php

	// Blade Tag Replacement
	Blade::setContentTags('<%', '%>'); // for variables and all things Blade
	Blade::setEscapedContentTags('<%%', '%%>'); // for escaped data
