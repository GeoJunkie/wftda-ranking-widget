<?php
/**
 * Plugin Name: WFTDA Rankings Reader
 * Plugin URI:        https://github.com/GeoJunkie/wftda-ranking-widget
	* Description:       A widget to show a WFTDA league's ranking information in a widget.
	* Version:           0.0.1
	* Author:            Mike Straw (a.k.a. Stray Taco)
	* Author URI:        https://queerderbytaco.com
	* Text Domain:       wftda-ranking-widgeet-locale
	* License:           GPL-2.0+
	* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
	* Domain Path:       /languages
	*/
// Add Shortcode
function wftdarw_ranking( $atts ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'league' => '',
		),
		$atts
	);

  $stats_site = "http://stats.wftda.com";
  $url = "$stats_site/league/" . $atts['league'];
  $curl = curl_init($url);

  curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

  $page = curl_exec($curl);

  if(curl_errno($curl)) // check for execution errors
  {
  	return 'Scraper error: ' . curl_error($curl);
  	exit;
  }

  curl_close($curl);

  $stats = array();

  $regex = '/<img class="leagueMain--image" src="(.*?)"/s';
  if ( preg_match($regex, $page, $list) )
      $stats['logo'] = $list[1];
  else
      return "Logo Not found";

  $regex = '/<div class="leagueMainStatsInner">\s*<h1>(.*?)<\/h1>/sm';
  if ( preg_match($regex, $page, $list) )
      $stats['league'] = $list[0];
  else
      return "League name not found";

  $regex = '/<div class="leagueMainStats--rankingStats rankingsStats">\n\n<span>(0-9\.)/sm';

  return sprintf ('<img src="%s%s"/> <ul><li>Name: %s</li><li>GPA: %s</li><li>Strength Factor: </li></ul>', $stats_site,  $stats['logo'], $stats['league'], '', '');

}
add_shortcode( 'wftda_ranking', 'wftdarw_ranking' );
