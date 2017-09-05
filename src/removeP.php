<?php
/*
Plugin Name: removeP
Plugin URI: http://economics.mdx.ac.uk/department/events/
Description: remove all filters for wpautop
Version: 0.1
Author: Francisco Manueal Alexander Bueno Pérez
Author URI: https://phoenixalx.github.io/Curriculum/
License:   Copyright (C) 2017 Francisco Manuel Alexánder Bueno Pérez 

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published
    by the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/



function remove_all_p() {
  remove_filter( 'the_content', 'wpautop' );
  /*remove_filter( 'the_excerpt',     'wpautop'          );
  remove_filter( 'comment_text', 'wpautop');
  remove_filter( 'widget_text_content', 'wpautop'              );
  remove_filter( 'the_excerpt_embed',      'wpautop'                               );
  remove_filter( $filter, 'wpautop'          );
  foreach ( array( 'term_description' ) as $filter ) {
  	//add_filter( $filter, 'wptexturize'      );
  	//add_filter( $filter, 'convert_chars'    );
  	//add_filter( $filter, 'wpautop'          );
  	remove_filter( $filter, 'shortcode_unautop');
  }*/


}
remove_all_p();
add_action('init',    'remove_all_p');
?>
