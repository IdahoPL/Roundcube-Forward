<?php

/*

 +-----------------------------------------------------------------------+
 | PostfixAdmin Forward Plugin for RoundCube                             |
 | Version: 1.1.0                                                        |
 | Author: Gianluca Giacometti <php@gianlucagiacometti.it>               |
 | Contributors:                                                         |
 |               Sebastien Blaisot (https://github.com/sblaisot)         |
 |               Jan B. Fiedler (https://github.com/zuloo)               |
 | Copyright (C) 2012 Gianluca Giacometti                                |
 | License: GNU General Public License                                   |
 +-----------------------------------------------------------------------+

 code structure based on:

 +-----------------------------------------------------------------------+
 | Vacation Module for RoundCube                                         |
 | Copyright (C) 2009 Boris HUISGEN <bhuisgen@hbis.fr>                   |
 | Licensed under the GNU GPL                                            |
 +-----------------------------------------------------------------------+

*/

class rcube_forward {

	public $username = '';
	public $forward_keepcopy = TRUE;
	public $forward_forwards = '';

	public $vacation_user = '';

	public function __construct() {
		$this->init();
		}

	private function init() {
		$this->username = rcmail::get_instance()->user->get_username();
		$this->vacation_domain = rcmail::get_instance()->config->get('vacation_domain');
		}

	// Gets the username.
	public function get_username() {
		return $this->username;
		}

	// Gets the forward message.
	public function get_forward_forwards() {
		return $this->forward_forwards;
		}

	// Checks if user address must be keep in alias when the forward is enabled.
	public function is_forward_keepcopies() {
		return $this->forward_keepcopies;
		}

	public function is_vacation_active() {
		return $this->vacation_active;
		}

	public function get_vacation_user() {
		return $this->vacation_user;
		}

	// Sets the forward addresses.
	public function set_forward_forwards($forwards) {
		$this->forward_forwards = $forwards;
		}

	// Sets the keep copies.
	public function set_forward_keepcopies($flag) {
		$this->forward_keepcopies = $flag;
		}

	public function set_vacation_active($flag) {
		$this->vacation_active = $flag;
		}

	public function set_vacation_user($vacation_user) {
		$this->vacation_user = $vacation_user;
		}
	}
