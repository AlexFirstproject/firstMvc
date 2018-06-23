This is the pages/index.html

<br/>

{foreach $data.pages as $page_data}

    <div style="margin-top: 20px;">
        <a href="/pages/view/{$page_data.alias}">{$page_data.title}</a>
    </div>

{/foreach}

<nav aria-label="Page navigation">
    <ul class="pagination">
        {if $data.page != 1} <li><a href="/pages?page=1" aria-label="Previous2">&lsaquo;&lsaquo;&lsaquo;</a></li> {/if}
        {if $data.page != 1} <li><a href="/pages?page={$data.page - 1}">&laquo;</a></li> {/if}
        {if $data.page - 2 >= 1} <li><a href="/pages?page={$data.page - 2}">{$data.page - 2}</a></li> {/if}
        {if $data.page - 1 >= 1} <li><a href="/pages?page={$data.page - 1}">{$data.page - 1}</a></li> {/if}
        <li class="active"><a href="/pages?page={$data.page}">{$data.page}</a></li>
        {if $data.page + 1 <= $data.quantityPages} <li><a href="/pages?page={$data.page + 1}">{$data.page + 1}</a></li> {/if}
        {if $data.page + 2 <= $data.quantityPages} <li><a href="/pages?page={$data.page + 2}">{$data.page + 2}</a></li> {/if}
        {if $data.page != $data.quantityPages} <li><a href="/pages?page={$data.page + 1}">&raquo;</a></li> {/if}
        {if $data.page != $data.quantityPages} <li><a href="/pages?page={$data.quantityPages}" >&rsaquo;&rsaquo;&rsaquo;</a></li> {/if}
    </ul>
</nav>
{*<nav aria-label="Page navigation">
    <ul class="pagination">
        <li>
            <a href="/pages?page=1" aria-label="Previous2">
                <span aria-hidden="true">&lsaquo;&lsaquo;&lsaquo;</span>
            </a>
        </li>
        <li>
            <a href="/pages?page={$data.page - 1}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li><a href="/pages?page={if $data.page - 2 <= 1} 1 {else} {$data.page - 2} {/if}">{if $data.page - 2 <= 1} 1 {else} {$data.page - 2} {/if}</a></li>
        <li><a href="/pages?page={if $data.page - 1 <= 2} 2 {else} {$data.page - 1} {/if}">{if $data.page - 1 <= 2} 2 {else} {$data.page - 1} {/if}</a></li>
        <li class="active"><a href="/pages?page={if $data.page  <= 3} 3 {else} {$data.page} {/if}">{if $data.page  <= 3} 3 {else} {$data.page} {/if}</a></li>
        <li><a href="/pages?page={if $data.page + 1 <= 4} 4 {else} {$data.page + 1} {/if}">{if $data.page + 1 <= 4} 4 {else} {$data.page + 1} {/if}</a></li>
        <li><a href="/pages?page={if $data.page + 2 <= 5} 5 {else} {$data.page + 2} {/if}">{if $data.page + 2 <= 5} 5 {else} {$data.page + 2} {/if}</a></li>
        <li>
            <a href="/pages?page={$data.page + 1}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
        <li>
            <a href="/pages?page={$data.quantityPages}" aria-label="Next2">
                <span aria-hidden="true">&rsaquo;&rsaquo;&rsaquo;</span>
            </a>
        </li>
    </ul>
</nav>*}