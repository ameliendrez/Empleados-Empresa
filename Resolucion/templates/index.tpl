{include file="header.tpl"}

<div class="container">
    <h1>Panel de administración</h1>
    </br>

    <div class="row">
        <div class="col-md-6">
            <h2>Empresa: <small>{$company->getName()}</small></h2> 
        </div>
        <div class="col-md-6">
            <div id="searchFilter">
                {include file="searchResult.tpl"}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="list-employees">
                {include file="employees.tpl"}
            </div>
        </div>
        <div class="col-md-6">
            <div id="form-content">
                </br></br></br>
                {include file="form.tpl"}
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}
