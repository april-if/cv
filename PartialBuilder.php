<?php


class PartialBuilder
{
	public static $navigation = [
		'#about'     => 'about me',
		'#skills'    => 'skills',
		'#services'  => 'services',
		'#portfolio' => 'portfolio',
		'#contact'   => 'contact',
	];

	public function buildHeader()
	{
		include_once "parts/Header.php";
	}

	public function buildBanner()
	{
	}

	public function buildAbout()
	{
	}

	public function buildSkills()
	{
	}

	public function buildServices()
	{
	}

	public function buildPortfolio()
	{
	}

	public function buildContactForm()
	{
	}

	public function buildFooter()
	{
	}

}