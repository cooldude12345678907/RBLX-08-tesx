<?php
require("../includes/headerv2.php");
?>
<body>




 
		<form name="aspnetForm" method="post" action="Default.aspx" id="aspnetForm">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTc5ODA1NTUzMw9kFgJmD2QWAgIBD2QWBAIDDw8WBh4ISW1hZ2VVcmwFGH4vaW1hZ2VzL0xvZ29fMjY3XzcwLnBuZx4LQ29tbWFuZE5hbWVlHg9Db21tYW5kQXJndW1lbnRkZGQCBQ9kFgQCAQ9kFgICAg8WAh4HVmlzaWJsZWgWAgIDDw8WAh8DaGRkAgMPDxYEHg1PbkNsaWVudENsaWNrBSp1cmNoaW5UcmFja2VyKCJJbnN0YWxsQmVnaW4iKTsgcmV0dXJuIHRydWUeB0VuYWJsZWRoZGQYAQUjY3RsMDAkcmJ4R29vZ2xlQW5hbHl0aWNzJE11bHRpVmlldzEPD2RmZLWU0YlrEiKab2CagrH/mmySRt+D">


<script src="/web/20080430030420js_/https://www.roblox.com/ScriptResource.axd?d=HXgoHdDgvXS1Bm1BtuI8XHJX8FVI8cYZ2X_EuVPYghNhT6sQZsT7p4eJkks-IyPzsTfEjdo0cSkJ_kKtErHTouTUQOFPTCdHx5vx8QsFQjg1&amp;t=633374548331875000" type="text/javascript"></script>
<script src="/web/20080430030420js_/https://www.roblox.com/ScriptResource.axd?d=ATCcKHzcXjy4pmYkne899yDwUSEj0qYTzcSbU_oYpFGHx7ZGe7Ic-DpCoQ9vByq10&amp;t=633445473260310000" type="text/javascript"></script>
<script src="/web/20080430030420js_/https://www.roblox.com/Install/Service.asmx/js" type="text/javascript"></script>
            
			<div id="Container">

    <p id="ctl00_cphRoblox_SystemRequirements1_OS" align="center" style="color: red">Currently, ROBLOX is only available on PCs running the Windows® operating system</p>

    <div style="margin-top: 12px; margin-bottom: 12px">
        <div id="AlreadyInstalled" style="display: none">
            <p>
                ROBLOX is already installed on this computer. If you want to try installing it again then follow the instructions below. Otherwise, you can just <a href="javascript:goBack()">continue</a>.</p>
        </div>
        <img id="ctl00_cphRoblox_Image3" class="Bullet" src="/images/BuildIcon.png" border="0">
        <div id="InstallStep1" style="padding-left: 60px">
            <h2>
                Download ROBLOX</h2>
            <pdownload roblox<="" h2="">
            <p>
                <input type="submit" name="ctl00$cphRoblox$ButtonDownload" value="Install ROBLOX" id="ctl00_cphRoblox_ButtonDownload" disabled="disabled" class="BigButton">
                &nbsp;(Total download about 10Mb)</p>
        </pdownload></div>
        <img id="ctl00_cphRoblox_Image4" class="Bullet" src="/images/FriendsIcon.png" border="0">
        <div id="InstallStep2" style="padding-left: 60px">
            <h2>
                Run the Installer    A window will open asking what you want to do with a file called Setup.exe.
            <p></p>
            <p>
                Click 'Run'. You might see a confirmation message, asking if you're sure you want to run this software. Click 'Run' again.
            </p>
            <p>
                <img id="ctl00_cphRoblox_Image1" src="/images/Install/DownloadPrompt.png" border="0">
            </p>
        </h2></div>
        <img id="ctl00_cphRoblox_Image5" class="Bullet" src="/images/BattleIcon.png" border="0">
        <div id="InstallStep3" style="padding-left: 60px">
            <h2>
                Follow the Setup Wizard</h2>
            <p>
                When the download has finished, the ROBLOX Setup Wizard will appear and guide you through the rest of the installation.
            </p>
            <p>
                <img id="ctl00_cphRoblox_Image2" src="/images/Install/Wizard.png" border="0">
            </p>
        </div>
    </div>

    <script>
        function isInstalled()
        {
		    try { 
			    var robloxClient = new ActiveXObject("RobloxInstall.Updater"); 
			    return true;
		    } catch (e) { 
		        return false;
		    } 
        }
        function goBack()
        {
 		    window.history.back();
        }
		function checkInstall() 
		{ 
			if (isInstalled()) { 
				// If we didn't fail, then we can move on
				document.getElementById("ctl00_cphRoblox_ButtonDownload").disabled = true;
				urchinTracker("InstallSuccess");
                Roblox.Install.Service.InstallSucceeded();
				goBack();
			} else { 
				// Try again later 
				window.setTimeout("checkInstall()", 2000); 
			} 
		} 
    </script>

    <script type="text/javascript">
		if (isInstalled())
		{
		    AlreadyInstalled.style.display="block";
		}
		else
		{
		    window.setTimeout("checkInstall()", 1000);
		}
    </script>


				</div>
			</div>
			
        <script src="https://web.archive.org/web/20080430030420js_/http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
        <script type="text/javascript">_uacct="UA-486632-1"; _udn="roblox.com"; urchinTracker(); __utmSetVar('Visitor/Anonymous');</script>
    

		
<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAgKcosfJDgK3mMnZDia9HLqEaR7kjmQ6lsovXBzTcmkd">

<script type="text/javascript">
//<![CDATA[
Roblox.Controls.Image.IE6Hack($get('ctl00_Image1'));Sys.Application.initialize();
//]]>
</script>
</form>
	

</body>
<center>
<?php
require("../includes/footer.php");
?>


