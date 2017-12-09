<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function email_kontrol($mail) {
    if (valid_email($mail))
	{
			echo 'Email is valid';
	}
	else
	{
			echo 'Email is not valid';
	}
}