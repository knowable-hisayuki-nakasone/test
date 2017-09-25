{include file='../common/header.tpl'}
<link type="text/css" rel="stylesheet" href="{$src_path}styles/css/battle.css?{$mtRand}">

<script>

    var image_bg = "{$bg_image}";
    {*var character_status = {};*}

    // ステータスデータを配列にセット
    if({count($character_status_data)} > 0){
        var character_status = [];

        {foreach from=$character_status_data item=status name=loopname}
            character_status[{$smarty.foreach.loopname.index}] = {
                player_id : "{$status.player_id}",
                attack_id : "{$status.attack_id}",
                attack_detail : "{$status.attack_detail}"
            };
        {/foreach}
    }

</script>
{*{var_dump($character_status_data)}*}
<script type="text/javascript" src="{$src_path}js/jquery/common.js?{$mtRand}"></script>
<script type="text/javascript" src="{$src_path}js/jquery/battle.js?{$mtRand}"></script>
<div id="wraper" class="back_image">

    {* <!-- ポップアップ --> *}
    <section class="popup_area">
        <div class="popup1 anime_flame">
            {include file='./include/popup_status.tpl'}
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