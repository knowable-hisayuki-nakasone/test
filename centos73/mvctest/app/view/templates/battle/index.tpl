{include file='../common/header.tpl'}
<link type="text/css" rel="stylesheet" href="{$src_path}styles/css/battle.css?{$mtRand}">

<script>

    var image_bg = "{$bg_image}";

</script>
<script type="text/javascript" src="{$src_path}js/jquery/common.js?{$mtRand}"></script>
<script type="text/javascript" src="{$src_path}js/jquery/battle.js?{$mtRand}"></script>
<div id="wraper" class="back_image">
    <section class="popup_area">
        <div class="popup1 anime_flame">
            <div class="content">
                <div class="clouse"></div>
            </div>

        </div>
    </section>
    {include file='./include/battle_header.tpl'}
    <!-- enemy -->
    <div class="left_cotent">
        left
        <div id="enemy"></div>
    </div>

    <!-- player -->
    <div class="right_cotent">
        right
        <div class="character_1"></div>
        <div class="character_2"></div>
        <div class="character_3"></div>
        <div class="character_4"></div>
        <div class="character_5"></div>
    </div>

</>
{include file='../common/footer.tpl'}