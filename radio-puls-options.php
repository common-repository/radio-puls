<style type="text/css">
    #radio_list_bord{
        width: 200px;
        height: 400px;
        margin: 20px 0px 0px 20px;
        padding: 10px;
        border: 0px solid #ccc;
        border-radius: 7px;
        background: #252525;
        position: absolute;
        z-index: 2;
    }
    #radio_list{
        margin: 0px;
        width: 200px;
        height: 370px;
        background: #fff;
        border-radius: 5px 5px 5px 5px;
        overflow-y: auto;
        line-height: 1.2;
        font-size: 12px;
        font-weight: bold;
    }
    #radio_list ul{
        list-style: none;
        margin: 3px;
    }
    #radio_list ul li{
        border: 1px solid lightGrey;
        background: #E6E6E6 url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/li_bg.png") 50% 50% repeat-x;
        font-weight: normal;
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
        color: #333;
        text-decoration: none;
        font-size: 15px;
        line-height: 30px;
    }
    #radio_list ul li:hover{
        background: #ccc;
        padding-left: 10px;
        cursor: n-resize;
    }
    #radio_list ul li{
        padding-left: 7px;
    }
    #player_name, #title_window{
        color: #fff;
        text-align: center;
        font-weight: bold;
        font-size: 14px;
        margin-top: -8px;
        font-family: Tahoma;
        line-height: 1.625;
    }
    #add_new{
        width: 20px;
        height: 22px;
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/add_new.png") no-repeat;
        border: none;
        position: absolute;
        right: 10px;
        bottom: 1px;
    }
    #add_new:hover{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/add_new_press.png") no-repeat;
        cursor: pointer;
    }
    #add_window{
        width: 0px;
        height: 310px;
        margin: 20px 0px 0px 20px;
        padding: 10px;
        border: 0px solid #ccc;
        border-radius: 7px;
        background: #252525;
        position: absolute;
        left: 170px;
        top: 50px;
        z-index: 1;
    }
    #add_cont{
        width: 280px;
        height: 273px;
        background: #fff;
        padding: 10px;
        border-radius: 5px 5px 5px 5px;
        position: absolute;
        bottom: 10px;
        color: #333;
        font-weight: bold;
        
    }
    #add_cont img{
        position: absolute;
        top: 100px;
        left: -52px;
    }
    #add_cont #href, #add_cont #name, #add_cont #description{
        width: 100%;
        margin-bottom: 10px;
    }
    #add_cont textarea{
        width: 100%;
        height: 100px;
    }
    #close{
        width: 20px;
        height: 22px;
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/close.png") no-repeat;
        border: none;
        position: absolute;
        right: 5px;
        top: 1px;
    }
    #close:hover{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/close_press.png") no-repeat;
        cursor: pointer;
    }
    #save_edit{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/button.png") no-repeat;
        position: absolute;
        left: 60px;
        width: 161px;
        height: 39px;
        border: none;
    }
    #save_edit:hover{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/button_press.png") no-repeat;
        cursor: pointer;
        color: #464646;
        text-shadow: #5da52f -1px -1px 0px;
    }
    #delete{
        border: 0px solid #333;
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/deleteactiv.png") no-repeat;
        width: 20px;
        height: 20px;
        float: right;
        margin-top: 5px;
    }
    #delete:hover{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/delete.png") no-repeat;
    }
    #edit{
        border: 0px solid #333;
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/edit.png") no-repeat;
        width: 22px;
        height: 22px;
        float: right;
        margin-top: 4px;
        margin-right: 4px;
    }
    #edit:hover{
        background: url("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/edit_aktiv.png") no-repeat;
    }
    #radio_list #activ{
        background: #ccc;
    }
    #content{
        position: absolute;
        top: 50px;
    }
    h2 {
        font-size: 23px;
        font-weight: normal;
    }
    #donate{
        position: absolute;
        right: 20px;
        top: 50px;
        width: 150px;
        z-index: 1;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 10px;
        background: #f3f3f3;
    }
    #donate strong{
        text-align: center;
        margin-left: 50px;
    }
</style>
<script src="http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/js/jquery-1.7.2.min.js"></script>
<script src="http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
    $('ul li').click(function(){
        $('ul li').removeAttr('id');
        $(this).attr('id', 'activ');
    });
    
    $('#add_window').hide();
    
    $('#add_new').click(
        function (){
            if($('#add_window').css('left') == '270px'){
                $('#title_window').html('Add new radio');
            }else{
                $('#title_window').html('Add new radio');
                $('#add_window').animate({left: '+=100px', width:'300px',}, 500);
                $('#add_window').show();
            }
            $('#name').attr('value', '');
            $('#href').attr('value', '');
            $('#ident').attr('value', '');
            $('#description').text("");
            $('#save_edit').attr('value', 'Add new radio');
        }
    );
    
    $('#close').click(
        function (){
            $('#add_window').animate({left: '-=100px', width:'0px'}, 500);
            $('#add_window').hide(500);
        }
    );
        
    $('#radio_list ul li #edit').click(
        function (){
            
            if($('#add_window').css('left') == '270px'){
                $('#title_window').html('Edit radio');
            }
            if($('#add_window').css('left') == '170px'){
                $('#add_window').animate({left: '+=100px', width:'300px',}, 500);
                $('#add_window').show();
            }
            
            $('#title_window').html('Edit radio');
            $('#save_edit').attr('value', 'Save');
            
            var name = $(this).attr('name');
            $('#name').attr('value', name);
                        
            var href = $(this).attr('href');
            $('#href').attr('value', href);
                        
            var ident = $(this).attr('ident');
            $('#ident').attr('value', ident); 
            
            var description = $(this).attr('description');
            $('#description').html(description); 
        }
    );
    
    $('#save_edit').click(function(){
        if($('#title_window').html() == 'Add new radio'){
            var send_control = 'add';
        }else{
            var send_control = 'edit';
        }
        var send_name = $('#name').attr('value');
        var send_href = $('#href').attr('value');
        var send_ident = $('#ident').attr('value');
        var send_description = $('#description').val();
        $.post("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/save_edit.php", { name: send_name, href: send_href, description: send_description, ident: send_ident, control: send_control }, function(data){
            alert(data);
        });
    });
    
    $('.delete').click(function(){
        if(confirm('Are you sure you want to delete this item?')){
            var del_ident = $(this).attr('ident');
            $.post("http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/save_edit.php", { ident: del_ident, control: 'delete' }, function(data){
                $('#activ').hide();
            });
        };
    });
    
    $('#sortable').sortable({
        cursor: 'n-resize',
        axis: 'y',
        opacity: 0.8,
        stop: function(){
            var arr = $('#sortable').sortable("toArray");
            $.ajax({
                url: 'http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/save_edit.php',
                type: 'POST',
                data: {massiv:arr},
                error: function(){
                    alert('Error');
                 },
                success: function(){
                }
            })
        }
    });   

});

</script>
<?php
$r2 = mysql_query('
                SELECT `id`, `options`, `name`, `description`, `positions`
                FROM  `radio_puls`
                WHERE name_options = "link_radio"
                ORDER BY `positions`
');
?>
<div id="donate"><?php if(WPLANG == "ru_RU"){?>
    <strong style="margin-left: 30px;">Пожертвовать</strong><br />
    Если вам нравится плагин Radio Puls и Вы хотели бы видеть новую версию Вы можете помочь нам. Вы можете пожертвовать для этого проекта.
<?php }else{ ?>
    <strong style="margin-left: 45px;">Donate</strong><br />
If you like Radio Puls plugin and you would like to see new versions you can help us. You can donate for this project.
<?php } ?>
<br />WebMoney:<br />
E245823764174<br />
Z385430448719<br />
R385927406542<br />
U178148103251<br />
</div>
<div id="icon-options-general" class="icon32"><br/></div><h2>Radio Puls Options</h2>
<div id="content">
<div id="radio_list_bord"><div id="player_name">Radio PlayList</div><div id="radio_list"><ul id="sortable">
<?php
while($myrow = mysql_fetch_array($r2, MYSQL_ASSOC)){
    echo "<li  id=\"$myrow[id]\">$myrow[name]<input type=\"button\" id=\"delete\" class=\"delete\" ident=\"$myrow[id]\" title=\"Delete $myrow[name]\" /><input type=\"button\" id=\"edit\" href=\"$myrow[options]\" ident=\"$myrow[id]\" title=\"Edit $myrow[name]\" name=\"$myrow[name]\" description=\"$myrow[description]\" /></li>";
};
?>
</ul></div><input type="button" id="add_new" title="Add new radio" /></div>

<div id="add_window">
    <div id="title_window">Edit radio</div>
    <input type="button" id="close" title="Closed window" />
    <div id="add_cont">
        <img src="http://<?php echo $_SERVER[HTTP_HOST]; ?>/wp-content/plugins/radio_puls/images/arrow.png" />
        <label>
            Radio name: <br />
            <input type="text" id="name" name="name" value="" /><br />
        </label>
        <label>
            Radio link: <br />
            <input type="text" id="href" name="href" value="" /><br />
        </label>
        <label>
            Description: <br />
            <textarea id="description" name="description"></textarea>
        </label>
        <input type="hidden" id="ident" name="ident" value="" />
        <input type="submit" id="save_edit" value="Save"/>
    </div>
</div>
</div>