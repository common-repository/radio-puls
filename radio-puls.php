<?php

// pluginname Radio Puls
// shortname RadioPuls
// dashname radio-puls

/*
Plugin Name: Radio Puls
Plugin URI: http://vania.com.ua/radio-puls/
Description: This plugin places the radio player to your site.
Author: Ivan Gerchak
Version: 1.0
Author URI: http://vania.com.ua/
License: GPL2
*/

/*  Copyright 2012  Ivan Gerchak  (email : vania11110@mail.ru)

    This plugin is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This plugin is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this plugin; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if (!class_exists('RadioPuls')) :

class RadioPuls
{
	var $plugin_url;
	var $plugin_domain = 'radio-puls';
	function RadioPuls()
	{
		$this->plugin_url = trailingslashit(WP_PLUGIN_URL.'/'.dirname(plugin_basename(__FILE__)));
		// Check version
		global $wp_version;
		
		// Load translation only on admin pages
		if (is_admin())
			$this->load_domain();

		$exit_msg = __('Radio Puls plugin requires Wordpress 2.8 or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>', $this->plugin_domain);

		if (version_compare($wp_version,"2.8","<"))
		{
			exit ($exit_msg);
		}
		// Create custom plugin settings menu
		add_action('admin_menu', array(&$this, 'create_menu'));
        add_action("wp_head", "add_radio");
 
        function add_radio() {
        
            $nameTable = 'radio_puls';
            
            $tableExist = false;
            $result = mysql_list_tables(DB_NAME);
            if ($result)
            {
                while($row = mysql_fetch_row($result))  
                {
                    if ($row[0] == $nameTable)
                    {
                        $tableExist = true;
                        break;            
                    }
                }  
            }
            
            if ($tableExist)
            {
                
            }
            else
            {
                mysql_query("
                        CREATE TABLE IF NOT EXISTS `radio_puls` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `name_options` varchar(255) NOT NULL,
                          `options` text NOT NULL,
                          `name` varchar(255) DEFAULT NULL,
                          `description` varchar(255) DEFAULT NULL,
                          `positions` int(11) DEFAULT NULL,
                          PRIMARY KEY (`id`)
                        ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=76 AUTO_INCREMENT=13 ;
                ");
                mysql_query("
                        INSERT INTO `radio_puls` (`id`, `name_options`, `options`, `name`, `description`, `positions`) VALUES
                        (1, 'autoplay', '1', NULL, NULL, NULL),
                        (2, 'link_radio', 'http://scfire-mtc-aa02.stream.aol.com:80/stream/1025', 'Electro House', NULL, 3),
                        (3, 'link_radio', 'http://webcast.emg.fm:55655/europaplus128.mp3', 'Europa Plus', NULL, 2),
                        (4, 'link_radio', 'http://stream.frenchkissfm.com:80', 'Kiss FM', NULL, 8),
                        (5, 'link_radio', 'http://72.29.76.234:8276/;type=mp3&volume=100&bufferlength=10&autostart=true', 'Rdio Frenticos', NULL, 9),
                        (6, 'link_radio', 'http%3A%2F%2Fmedia.brg.ua%3A8010%2F%3Bstream.nsv', 'DJFM Ukraine', NULL, 5),
                        (7, 'link_radio', 'http://nl2.ah.fm:9000', 'AH FM', 'Online radio that plays Trance and Progressive mixes produced exclusively for AH.FM', 1),
                        (8, 'link_radio', 'http://urg.adamant.net:8080/online128', 'MFM Radio', '', 4),
                        (9, 'link_radio', 'http://media.fregat.com:8000/RadioMIX&autostart=true&displayheight=80', 'Радио MIX', '', 6),
                        (10, 'link_radio', 'http://scfire-mtc-aa02.stream.aol.com:80/stream/1025', 'Dance', '', 7),
                        (11, 'link_radio', 'http://stream1.lux.fm:8088', 'Lux FM Kyiv', '', 10),
                        (12, 'link_radio', 'http://player.muzu.tv/player/getPlayer/a/239409/playlistId=1001183&la=y', 'Iloveradio de', '', 11);
                ");
            }
            
            
            $r = mysql_query('
                SELECT `options`, `name`, `description`
                FROM  `radio_puls`
            ');
            $r2 = mysql_query('
                            SELECT `options`, `name`, `description`
                            FROM  `radio_puls`
                            WHERE name_options = "link_radio"
                            ORDER BY `positions`
            ');
            $li = "";
            while($myrow = mysql_fetch_array($r2, MYSQL_ASSOC)){
                        $li .= "<a href=\"$myrow[options]\" title=\"$myrow[name] &nbsp;&nbsp;&nbsp;$myrow[description]\" onclick=\"return false;\" /><li>$myrow[name]</li></a>";
                    };
            
            $a = 1;
            $result = array();
            while($myrow = mysql_fetch_array($r, MYSQL_ASSOC)){
                $result['options']["$a"]  = $myrow['options'];
                $result['name']["$a"]  = $myrow['name'];
                $result['description']["$a"]  = $myrow['description'];
                $a++;
            };
            include_once '/theme/black.php';
           echo '
           <script src="'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/jquery-1.7.2.min.js"></script>
           <script src="'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/swfobject.js"></script>
           <script src="'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/jquery-ui-1.8.21.custom.min.js"></script>
           <script src="'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/jquery.cookie.js"></script>
           <!-- Радіо -->
                <div id="myradio"  onmousedown="dragOBJ(this,event); return false;">
                <div id="move_bat"></div>
                <div id="list">
                <div id="player_name">Radio Puls</div>
                    <div id="cont_list">
                    <ul>
                    '.
                    "$li"
                    .'</ul>
                    </div>
                </div>
                <div id="draggable"></div>
                
                <div id="flashcontent2">
                	<p>
                    	<strong>Sorry this site have a flash based native radio and needed adobe flash 10+ support. </strong><br />
                	    <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Download Flash here.</a>
                    </p>
                </div>
                	
                <script type="text/javascript">
                	// <![CDATA[
                	
                	var so = new SWFObject("'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/nativeradio2small.swf", "nativeradio2small", "200", "50", "10", "#2d2d2d");
                	so.addParam("scale", "noscale");
                	so.addVariable("swfcolor", "2d2d2d");
                	so.addVariable("swfwidth", "200");
                	so.addVariable("swfradiochannel", "O n l i n e  R a d i o");
                	so.addVariable("swfstreamurl", '."\"$result[2]\"".');
                	so.addVariable("swfpause", '."\"$result[3]\"".');
                	so.write("flashcontent2");
                    
                    $(\'#cont_list a\').click(function(){
                        var link = $(this).attr("href");
                        $(this).css({\'background\': \'#ccc\'});
                        var title = $(this).attr("title");
                        var so = new SWFObject("'."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/js".'/nativeradio2small.swf", "nativeradio2small", "200", "50", "10", "#2d2d2d");
                    	so.addParam("scale", "noscale");
                    	so.addVariable("swfcolor", "2d2d2d");
                    	so.addVariable("swfwidth", "200");
                    	so.addVariable("swfradiochannel", title);
                    	so.addVariable("swfstreamurl", link);
                    	so.addVariable("swfpause", "0");
                    	so.write("flashcontent2");
                    });
                    
                    var winwidth = $(window).width()-217;
                    var winheight = $(window).height()-84;
                    $(\'#myradio\').css({\'left\': winwidth, \'top\': winheight})
                    
                    
                    $(\'#move_bat\').click(function() {
                      if($.cookie("ListOp") == "Op"){
                            $(\'#cont_list\').animate({
                                height: \'0\'
                              }, 500, function() {
                                $.cookie("ListOp", "On", {expires: 7, path: \'/\'})
                              });
                              $(\'#myradio\').animate({
                                top: \'+=270\',
                                height: \'84px\'
                              }, 500, function() {
                                $(\'#move_bat\').css({\'background\': \'url('."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/images/move_bat.png".')\'})
                            });
                            var div = $("#myradio").offset();
                            div.top += 270;
                            var positions = div.left + ":" + div.top;
                            $.cookie("PositionsLeft", positions, {expires: 7, path: \'/\'})
                      }else{
                            $(\'#cont_list\').animate({
                                height: \'270px\'
                              }, 500, function() {
                                $.cookie("ListOp", "Op", {expires: 7, path: \'/\'})
                              });
                              $(\'#myradio\').animate({
                                top: \'-=270\',
                                height: \'354px\'
                              }, 500, function() {
                                $(\'#move_bat\').css({\'background\': \'url('."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/images/move_bat_down.png".')\'})
                            });
                            var div = $("#myradio").offset();
                            div.top -= 270;
                            var positions = div.left + ":" + div.top;
                            $.cookie("PositionsLeft", positions, {expires: 7, path: \'/\'})
                      }
                    });
                    
                    $(\'#myradio ul li, ul li a\').click(function(){
                        $(\'#myradio ul li\').removeAttr(\'id\');
                        $(this).attr(\'id\', \'activ\');
                    });
                    
                	// ]]>
                </script>
                </div>
                <!-- End Радіо -->
                <script type="text/javascript">
                <!--
                $(document).ready(function() {
                    
                    if($.cookie("ListOp")) {
                      if($.cookie("ListOp") == "Op"){
                        $(\'#cont_list\').animate({
                            height: \'270px\'
                          }, 500, function() {
                          });
                          $(\'#myradio\').animate({
                            top: \'-=270\',
                            height: \'354px\'
                          }, 500, function() {
                            $(\'#move_bat\').css({\'background\': \'url('."http://$_SERVER[HTTP_HOST]/wp-content/plugins/radio_puls/images/move_bat_down.png".')\'})
                        }); 
                      }
                    };
                    
                    if($.cookie("PositionsLeft")) {
                      var div = $.cookie("PositionsLeft");
                      var pos_div = div.split(":");
                      if(pos_div[1] >= $(window).height()-84){
                        pos_div[1] = $(window).height()-84;
                      }
                      $("#myradio").animate({
                        left: pos_div[0],
                        top: pos_div[1]
                      }, 500 )
                    };
                      
                    $("#draggable").mousedown(function() {
                        $("#myradio").draggable("enable");
                        $("#myradio").draggable({
                           containment:\'window\',
                           start: function(event, ui) {
                                var a=event.type;
                            },
                           stop: function(event, ui) {
                                var a=event.type;
                                var c=ui.position.left;
                                var d=ui.position.top;
                                var e=ui.offset.left;
                                var f=ui.offset.top;
                                var positions = e + ":" + f;
                            	$.cookie("PositionsLeft", positions, {expires: 7, path: \'/\'})
                            }
                        });
                    });
                    $("#flashcontent2").mouseover(function(){
                        $("#myradio").draggable("disable");
                    });
                });
                //-->
                </script>';
           
        }
	}
	
	// Add options page
	function create_menu()
	{
		//create new menu in Settings section
		add_options_page(__('Radio Puls Plugin Settings', $this->plugin_domain), __('Radio Puls', $this->plugin_domain), 'administrator', __FILE__, array(&$this, 'settings_page'));	
	}
	
	// Settings page
	function settings_page() {
		include('radio-puls-options.php');
	}
	
	// Localization support
	function load_domain()
	{
		$mofile = dirname(__FILE__) . '/lang/' . $this->plugin_domain . '-' . get_locale() . '.mo';
		
		load_textdomain($this->plugin_domain, $mofile);
	}
} // class RadioPuls


else :

	exit(__('Class RadioPuls already declared!', $this->plugin_domain));
	
endif;


if (class_exists('RadioPuls')) :
	
	$RadioPuls = new RadioPuls();

endif;

?>