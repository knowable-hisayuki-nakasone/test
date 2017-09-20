{include file='../common/header.tpl'}
<link type="text/css" rel="stylesheet" href="app/src/styles/scss/header.scss?{$mtRand}">
<div id="wraper">

    <form action="index" method="post">

        <input type="hidden" name="remote_addr" value="{$remote_addr}">
        <input type="hidden" name="name" value="test">
        <input type="submit" value="送信">
    </form>


    <p class="">
        <a href="/centos73/mvctest/Battle/index">バトル画面へ</a>
    </p>
</div>
{include file='../common/footer.tpl'}