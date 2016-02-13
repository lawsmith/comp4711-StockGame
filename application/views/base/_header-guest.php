<ul class="nav navbar-nav">
  <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
  <li><a href="/stocks">Stocks</a></li>
  <li><a href="/portfolio">Portfolio</a></li>
</ul>
<div class="row">
  <form method="POST" action="/login" class="navbar-form navbar-right" role="login">
    <div class="form-group login-input col-xs-10 col-sm-7 col-md-7">
      <select name="playername" class="form-control pull-right">
        {playerList}
        <option value="{Player}">{Player}</option>
        {/playerList}
      </select>
    </div>
    <input type="submit" value="Login" class="btn btn-default col-xs-2 col-sm-5 col-md-5 pull-right">
  </form>
</div>