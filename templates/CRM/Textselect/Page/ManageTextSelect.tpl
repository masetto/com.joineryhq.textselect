
  <div class="help">
    <p>{ts}Manage your Text Select Configuration here{/ts}</p>
  </div>

<div class="crm-content-block crm-block">
{if $rows}
{if !($action eq 1 and $action eq 2)}
    <div class="action-link">
      {crmButton p="civicrm/admin/textselect/settings" q="action=add&reset=1" icon="plus-circle"}{ts}Add Setting{/ts}{/crmButton}
    </div>
{/if}

<div id="ltype">

    {strip}
  {* handle enable/disable actions*}
  {include file="CRM/common/enableDisableApi.tpl"}
    {include file="CRM/common/jsortable.tpl"}
        <table id="options" class="display">
        <thead>
        <tr>
          <th id="sortable">{ts}ID{/ts}</th>
          <th id="sortable">{ts}Field{/ts}</th>
          <th id="sortable">{ts}Option Group{/ts}</th>
          <th></th>
        </tr>
        </thead>
        {foreach from=$rows item=row}
        <tr id="textselect-{$row.id}" class="crm-entity {cycle values="odd-row,even-row"} {$row.class}{if NOT $row.is_active} disabled{/if} ">
            <td class="crm-textselect-id" data-field="id">{$row.id}</td>
            {if $row.field_id == 'contribution_source' && $row.field_id !== 'contact_source'}
                <td class="crm-textselect-fieldid" data-field="field_id">Contribution Source (ID: {$row.field_id})</td>
            {elseif $row.field_id == 'contact_source'}
                <td class="crm-textselect-fieldid" data-field="field_id">Contact Source (ID: {$row.field_id})</td>
            {else}
              {crmAPI var='result' entity='OptionGroup' action='getsingle' sequential=0 return="title" id=$row.option_group_id}
              <td class="crm-textselect-fieldid" data-field="field_id">Contribution Source (ID: {$row.field_id})</td>
            {/if}
            <td class="crm-textselect-optiongroup" data-field="option_group_id">{$result.title} (ID: {$row.option_group_id})</td>
            <td>{$row.action|replace:'xx':$row.id}</td>
        </tr>
        {/foreach}
        </table>
        {/strip}

</div>
{else}
    <div class="messages status no-popup">
      <img src="{$config->resourceBase}i/Inform.gif" alt="{ts}status{/ts}"/>
      {ts}None found.{/ts}
    </div>
{/if}
  <div class="action-link">
    {crmButton p="civicrm/admin/textselect/settings" q="action=add&reset=1" icon="plus-circle"}{ts}Add Setting{/ts}{/crmButton}
    {crmButton p="civicrm/admin" q="reset=1" class="cancel" icon="times"}{ts}Done{/ts}{/crmButton}
  </div>

</div>
