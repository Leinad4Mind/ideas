<?php
/**
 *
 * Ideas extension for the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbb\ideas\controller;

use phpbb\controller\helper;
use phpbb\ideas\factory\ideas;
use phpbb\ideas\factory\linkhelper;
use phpbb\request\request;
use phpbb\template\template;
use phpbb\user;

// @todo: refactor out
define('IDEAS_FORUM_ID', 2);
define('IDEAS_POSTER_ID', 2);

abstract class base
{
	/* @var helper */
	protected $helper;

	/* @var template */
	protected $template;

	/* @var user */
	protected $user;

	/* @var linkhelper */
	protected $link_helper;

	/* @var ideas */
	protected $ideas;

	/* @var request */
	protected $request;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/**
	 * @param helper     $helper
	 * @param ideas      $ideas
	 * @param linkhelper $link_helper
	 * @param request    $request
	 * @param template   $template
	 * @param user       $user
	 * @param string     $root_path
	 * @param string     $php_ext
	 */
	public function __construct(helper $helper, ideas $ideas, linkhelper $link_helper, request $request, template $template, user $user, $root_path, $php_ext)
	{
		$this->helper = $helper;
		$this->ideas = $ideas;
		$this->link_helper = $link_helper;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;

		$this->user->add_lang_ext('phpbb/ideas', 'common');
	}
}