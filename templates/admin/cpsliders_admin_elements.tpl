<{$renderbutton}>
<{if $filter|default:false}>
<div align="right">
    <{$smarty.const._AM_CPSLIDERS_ELEMENTS_SLIDER_DD}>
    <select name="content_filter" id="content_filter" onchange="location='elements.php?slider_id='+this.options[this.selectedIndex].value">
        <{$slider_options}>
    </select>
</div>
<{/if}>
<{if $message_error != ''}>
    <div class="errorMsg" style="text-align: left;">
        <{$message_error}>
    </div>
<{/if}>
<{if $form|default:false}>
    <div>
        <{$form}>
    </div>
<{/if}>

<{if $elements_count|default:0 != 0}>
    <table class="outer tablesorter" id="slider-elements">
        <thead>
        <tr>
            <th></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_LINKED_SLIDER}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_TITLE}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_DESCRIPTION}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_IMG}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_LINK}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_ORDER}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_VISIBLE}></th>
            <th><{$smarty.const._AM_CPSLIDERS_ELEMENTS_ACTION}></th>
        </tr>
        </thead>
        <tbody class="elements-list">
        <{foreach item=element from=$elements}>
            <tr class="<{cycle values='odd, even'}> element sortable" id="elem_<{$element.id}>" order="<{$element.order}>">
                <td class="txtcenter ">
                    <img class="move" src="<{$modPathIcon16}>/drag.png" alt="Move"/>
                </td>
                <td><{$element.slider_title}></td>
                <td><{$element.title}></td>
                <td><{$element.description}></td>
                <td class="txtcenter"><a class="lightbox" href="<{$element.img}>"><img id="loading_img<{$element.id}>" src="<{$element.img}>" style="max-width:150px;max-height:150px"></a></td>
                <td><{$element.url}></td>
                <td class="txtcenter"><{$element.order}></td>
                <td class="xo-actions txtcenter">
                    <img id="loading_sml<{$element.id}>" src="../assets/images/spinner.gif" style="display:none;" title="<{$smarty.const._AM_SYSTEM_LOADING}>"
                    alt="<{$smarty.const._AM_SYSTEM_LOADING}>"/><img class="cursorpointer tooltip" id="sml<{$element.id}>"
                    onclick="system_setStatus( { op: 'element_update_status', id: <{$element.id}> }, 'sml<{$element.id}>', 'elements.php' )"
                    src="<{if $element.visible}><{xoAdminIcons success.png}><{else}><{xoAdminIcons cancel.png}><{/if}>"
                    alt="<{if $element.visible}><{$smarty.const._AM_CPSLIDERS_CONTENT_STATUS_NA}><{else}><{$smarty.const._AM_CPSLIDERS_CONTENT_STATUS_A}><{/if}>"
                    title="<{if $element.visible}><{$smarty.const._AM_CPSLIDERS_CONTENT_STATUS_NA}><{else}><{$smarty.const._AM_CPSLIDERS_CONTENT_STATUS_A}><{/if}>"/>
                </td>
                <td class="xo-actions txtcenter">
                    <a class="tooltip" href="elements.php?op=edit&amp;element_id=<{$element.id}>" title="<{$smarty.const._EDIT}>"><img src="<{xoAdminIcons edit.png}>"
                                                                                                        alt="<{$smarty.const._EDIT}>"
                                                                                                        title="<{$smarty.const._EDIT}>"/></a>
                    &nbsp;<a class="tooltip" href="elements.php?op=delete&amp;element_id=<{$element.id}>" title="<{$smarty.const._DELETE}>"><img
                                src="<{xoAdminIcons delete.png}>" alt="<{$smarty.const._DELETE}>" title="<{$smarty.const._DELETE}>"</a>
                </td>
            </tr>
        <{/foreach}>
        </tbody>
    </table>
<{/if}>
<div class="preloader" style="display: none;">
    <img src="../assets/images/preloader.gif" alt="loading">
</div>
<script type="text/javascript">
    IMG_ON = '<{xoAdminIcons success.png}>';
    IMG_OFF = '<{xoAdminIcons cancel.png}>';

    $('.lightbox').lightBox({
        imageLoading: '../../system/language/<{$xoops_language}>/images/lightbox-ico-loading.gif',
        imageBtnClose: '../../system/language/<{$xoops_language}>/images/lightbox-btn-close.gif',
        imageBtnNext: '../../system/language/<{$xoops_language}>/images/lightbox-btn-next.gif',
        imageBtnPrev: '../../system/language/<{$xoops_language}>/images/lightbox-btn-prev.gif',
        imageBlank: '../../system/language/<{$xoops_language}>/images/lightbox-blank.gif'
    });


</script>
