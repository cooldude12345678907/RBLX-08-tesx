<?php
require($_SERVER['DOCUMENT_ROOT'].'/includes/header.php');

?>

          
<?php if($loggedin == 'no'){ ?>   
  <div id="SplashContainer">
    <div id="SignInPane">
      
<div id="LoginViewContainer">
  
      <div id="LoginView">
        <h5>Member Login</h5>
        
<div class="AspNet-Login">
  <form method="post" action="/Login/Default.aspx">
            <div class="AspNet-Login">
              <div class="AspNet-Login-UserPanel">
                <label for="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserNameLabel" class="Label">Character Name</label>
                <input name="username" type="text" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_UserName" tabindex="1" class="Text"/>
              </div>
              <div class="AspNet-Login-PasswordPanel">
                <label for="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_PasswordLabel" class="Label">Password</label>
                <input name="password" type="password" id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Password" tabindex="2" class="Text"/>
              </div>
              <!--div class="AspNet-Login-RememberMePanel"-->
                
              <!--/div-->
              <div class="AspNet-Login-SubmitPanel">
                <button id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_Login" type="submit" tabindex="4" class="Button">Login</button>
              </div>
              </form>
              <div class="AspNet-Login-PasswordRecoveryPanel">
                <a id="ctl00_cphRoblox_rbxLoginView_lvLoginView_lSignIn_hlPasswordRecovery" tabindex="5" href="Login/ResetPasswordRequest.aspx">Forgot your password?</a>
              </div>
            </div>
          
</div>
      </div>
    
</div>
<?php }else { ?>
  <div id="SplashContainer">
    <div id="SignInPane">
      

<div id="LoginViewContainer">
  
      <div id="LoginView">
        <h5>Logged In</h5>
        <div id="AlreadySignedIn">
          <a id="ctl00_cphRoblox_rbxLoginView_lvLoginView_rbxContentImage" title="<?php echo htmlspecialchars($_USER['username']); ?>" href="/User.aspx" style="display:inline-block;height:190px;width:152px;cursor:pointer;"><br><img src="/Thumbs/Avatar.ashx?id=<?php echo $_USER['id']; ?>" style="height:160px;width:162px;margin:-8px;" border="0" id="img" alt="<?php echo htmlspecialchars($_USER['username']); ?>" /></a>
        </div>
      </div>
    
    <?php if($loggedin == 'yes'){
	    echo '
	    	<br>
        	<div style="text-align: center; border: 1px solid black; background-color: #eee;">
        	<br>
        	<h3 style="color: gray;">'.$sitename.' News</h3>
        	<br>
        	<a href="#">We are back!</a>
        	<br>
        	<br>
        	<br>
        	<a href="#">Fixed A lot of bugs</a>
        	<br>
        	<br>
        	<br>
        	<a href="#">Coolest Header and default working!</a>
        	<br>
        	<br>
        	<br>
        	</div>
	    ';
	}
	?>
	
</div>
<?php } ?>
      <br/>
<?php if($loggedin == 'no'){ ?>
            
            <div id="Figure">
                <a id="ctl00_cphRoblox_LoginView1_ImageFigure" disabled="disabled" title="Figure" onclick="return false" style="display:inline-block;"><img src="/images/NewFrontPageGuy.png" border="0" alt="Figure" blankurl="http://t1.roblox.com:80/blank-115x130.gif"/></a>
            </div>
          
<?php }?>
    </div>
    
            

<div id="RobloxAtAGlance">
  <h2><?=$sitename?> Virtual Playworld</h2>
  <h3><?=$sitename?> is Free!</h3>
  <ul id="ThingsToDo">
    <li id="Point1">
      <h3>Build your personal Place</h3>
      <div>Create buildings, vehicles, scenery, and traps with thousands of virtual bricks.</div>
    </li>
    <li id="Point2">
      <h3>Meet new friends online</h3>
      <div>Visit your friend's place, chat in 3D, and build together.</div>
    </li>
    <li id="Point3">
      <h3>Battle in the Brick Arenas</h3>
      <div>Play with the slingshot, rocket, or other brick battle tools.  Be careful not to get "bloxxed".</div>
    </li>
  </ul>
    <div id="Showcase">
      <iframe width="400" height="326" src="https://www.youtube.com/embed/oDVAjvNeGA8" frameborder="0"></iframe>
            </div>
  <div id="Install">
    <div id="CompatibilityNote">Works with your<br/>Windows PC!</div>
    <div id="DownloadAndPlay"><a id="ctl00_cphRoblox_RobloxAtAGlanceLoginView_RobloxAtAGlance_Anonymous_hlDownloadAndPlay" href="Login/New.aspx?ReturnUrl=%2fGames.aspx"><img src="/images/DownloadAndPlay.png" alt="FREE - Download and Play!" border="0"/></a></div>
  </div>
  <div id="ForParents">
    <a id="ctl00_cphRoblox_RobloxAtAGlanceLoginView_RobloxAtAGlance_Anonymous_hlKidSafe" title="RUST is kid-safe!" href="Parents.aspx" style="display:inline-block;"><img title="RUST is kid-safe!" src="/images/COPPASeal-125x125.jpg" border="0"/></a>
  </div>
</div>
        
    
<div id="UserPlacesPane">
			<div id="UserPlaces_Content">
				<table id="ctl00_cphRoblox_CoolPlacesDataList" cellspacing="0" border="0" width="100%">
	<tbody><tr>
		<td class="UserPlace">
						<a id="ctl00_cphRoblox_CoolPlacesDataList_ctl00_rbxContentImage" title="&gt;&lt;&gt; Life At Sea &lt;&gt;&lt; Major Update!" href="/web/20080514222834/http://www.roblox.com/Item.aspx?ID=346273" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20080514222834im_/http://t2.roblox.com:80/00e1b68f9167e574b3854d2aed6e1746" border="0" alt="&gt;&lt;&gt; Life At Sea &lt;&gt;&lt; Major Update!" blankurl="http://t2.roblox.com:80/blank-120x70.gif"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_CoolPlacesDataList_ctl01_rbxContentImage" title="Can You Escape The Futurama Sewer? !NEW HARD OBBY!" href="/web/20080514222834/http://www.roblox.com/Item.aspx?ID=1889053" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20080514222834im_/http://t5.roblox.com:80/832004f5a98c571a5f8a381838cafecd" border="0" alt="Can You Escape The Futurama Sewer? !NEW HARD OBBY!" blankurl="http://t2.roblox.com:80/blank-120x70.gif"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_CoolPlacesDataList_ctl02_rbxContentImage" title="Dont Get Captured *Bombs instead of rockets*" href="/web/20080514222834/http://www.roblox.com/Item.aspx?ID=454639" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20080514222834im_/http://t6.roblox.com:80/ca7c62d740e438b6c6b9faf05c522acd" border="0" alt="Dont Get Captured *Bombs instead of rockets*" blankurl="http://t2.roblox.com:80/blank-120x70.gif"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_CoolPlacesDataList_ctl03_rbxContentImage" title="✪Ultimate Paintball CTF" href="/web/20080514222834/http://www.roblox.com/Item.aspx?ID=47828" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20080514222834im_/http://t1.roblox.com:80/Place-120x70-2c8ee77fa67d614896ece97cc8931777.Png" border="0" alt="✪Ultimate Paintball CTF" blankurl="http://t2.roblox.com:80/blank-120x70.gif"></a>
					</td><td class="UserPlace">
						<a id="ctl00_cphRoblox_CoolPlacesDataList_ctl04_rbxContentImage" title="{[☢]} Resident Evil : Build To Survive © Improved!" href="/web/20080514222834/http://www.roblox.com/Item.aspx?ID=233833" style="display:inline-block;cursor:pointer;"><img src="https://web.archive.org/web/20080514222834im_/http://t5.roblox.com:80/b7c5fc2799963157e9d4d38a3b9fd798" border="0" alt="{[☢]} Resident Evil : Build To Survive © Improved!" blankurl="http://t2.roblox.com:80/blank-120x70.gif"></a>
					</td>
	</tr>
</tbody></table>
			</div>
			<div id="UserPlaces_Header">
				<h3>Cool Places</h3>
				<p>Check out some of our favorite ROBLOX places!</p>
			</div>
			<div id="ctl00_cphRoblox_ie6_peekaboo" style="clear: both"></div>
		</div>
        </div>
      <center>
<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/footer.php");
?>