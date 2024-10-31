<style type="text/css">
            #myradio{
                position: fixed;
                bottom: 0px;
                left: 0px;
                width: 200px;
                z-index: 999999;
                padding: 0px;
                height: 84px;
                font-family: Tahoma;
            }
            #myradio #list{
                margin: 0px 0px 0px 0px;
                padding: 10px;
                border: 0px solid #ccc;
                border-radius: 7px 7px 0 0;
                background: #252525;
            }
            #myradio #cont_list{
                margin: 0px;
                width: 180px;
                height: 0px;
                background: #fff;
                border-radius: 5px 5px 5px 5px;
                overflow-y: auto;
                line-height: 1.2;
                font-size: 12px;
                font-weight: bold;
            }
            #myradio #cont_list ul{
                padding: 0px;
                list-style: none;
                margin: 3px;
            }
            #myradio #cont_list ul li:hover{
                background: #ccc;
                padding-left: 10px;
            }
            #myradio #cont_list ul li{
                padding: 0;
                padding-left: 7px;                
                border: 1px solid lightGrey;
                background: #E6E6E6 url('http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/li_bg.png') 50% 50% repeat-x;
                font-weight: normal;
                margin-bottom: 6px;
                font-size: 15px;
                line-height: 30px;
                color: #555;
                height: 30px;
                -moz-border-radius-topleft: 4px;
                -webkit-border-top-left-radius: 4px;
                -khtml-border-top-left-radius: 4px;
                border-top-left-radius: 4px;
                -moz-border-radius-topright: 4px;
                -webkit-border-top-right-radius: 4px;
                -khtml-border-top-right-radius: 4px;
                border-top-right-radius: 4px;
                -moz-border-radius-bottomleft: 4px;
                -webkit-border-bottom-left-radius: 4px;
                -khtml-border-bottom-left-radius: 4px;
                border-bottom-left-radius: 4px;
                -moz-border-radius-bottomright: 4px;
                -webkit-border-bottom-right-radius: 4px;
                -khtml-border-bottom-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }
            #myradio #cont_list a{
                color: #333;
                text-decoration: none;
            }
            #myradio #draggable{
                position: absolute;
                top: 0px;
                right: 0px;
                height: 20px;
                width: 200px;
                z-index: 99998;
                cursor: move;
            }
            #myradio #flashcontent2{
                z-index: 999999;
                margin-bottom: 0px;
                height: 50px;
            }
            #myradio #player_name{
                color: #fff;
                text-align: center;
                font-weight: bold;
                font-size: 14px;
                margin-top: -8px;
                font-family: Tahoma;
                line-height: 1.625;
            }
            #myradio #move_bat{
                background: url('http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/move_bat.png');
                width: 69px;
                height: 19px;
                position: absolute;
                top: -16px;
                right: 2px;
                cursor: pointer;
            }
            #myradio #cont_list #activ{
                background: #ccc;
            }
            
            </style>
           