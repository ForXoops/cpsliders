<{$renderbutton}>

<{if $message_error != ''}>
    <div class="errorMsg" style="text-align: left;">
        <{$message_error}>
    </div>
<{/if}>

<{if $form != ''}>
    <{$form}>
<{/if}>
<{if $sliders_count|default:0 != 0}>
    <table class="outer tablesorter">
        <tr>
            <th><{$smarty.const._AM_CPSLIDERS_SLIDERS_TITLE}></th>
            <th style="width: 120px;"><{$smarty.const._AM_CPSLIDERS_SLIDERS_ACTION}></th>
        </tr>
        <{foreach item=slider from=$sliders}>
            <tr class="<{cycle values='odd, even'}>">
                <td><{$slider.slider_title}></td>
                <td class="xo-actions txtcenter">
                    <a href="sliders.php?op=edit&amp;slider_id=<{$slider.slider_id}>" title="<{$smarty.const._EDIT}>">
                    <img src="<{xoAdminIcons edit.png}>" alt="<{$smarty.const._EDIT}>" title="<{$smarty.const._EDIT}>"></a>
                    &nbsp;
                    <a href="sliders.php?op=delete&amp;slider_id=<{$slider.slider_id}>" title="<{$smarty.const._DELETE}>">
                    <img src="<{xoAdminIcons delete.png}>" alt="<{$smarty.const._DELETE}>" title="<{$smarty.const._DELETE}>"></a>
                </td>
            </tr>
        <{/foreach}>
    </table>
<{/if}>
