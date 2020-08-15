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

	public static $skills = [
		'after effect' => '90%',
		'photoshop'    => '80%',
		'illustrator'  => '80%',
		'web design'   => '75%',
	];

	public static $services = [
		'f001' => 'CD cover design',
		'f12d' => 'Editing beauty photos',
		'f0a1' => 'Marketing consulting',
		'f3cd' => 'Application and interface design',
	];

	public static $portfolios = [
		'book.jpeg',
		'CDback.jpg',
		'CDbook.jpg',
		'CDcaver.jpg',
		'postrAndBook.jpg',
	];

	public function buildHeader()
	{
		include_once "parts/Header.php";
	}

	public function buildBanner()
	{
		include_once "parts/Banner.php";
	}

	public function buildAbout()
	{
		include_once "parts/AboutMe.php";
	}

	public function buildSkills()
	{
		include_once "parts/Skills.php";
	}

	public function buildServices()
	{
		include_once "parts/Services.php";
	}

	public function buildPortfolio()
	{
		include_once "parts/Portfolio.php";
	}

	public function buildContactForm()
	{
		include_once "parts/ContactMe.php";
	}

	public function buildFooter()
	{
		include_once "parts/Footer.php";
	}

}