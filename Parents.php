<?php

session_start();
include("includes/header.php");
require("includes/config.php");
?>
</div>				
<div id="Body">
					
	<div class="ParentsContainer">
		<div id="LeftColumn">
		    <h2><?=$sitename?> Parents</h2>
		    <div class="ParentsSection" id="ROBLOXGuide">
		        <a id="ctl00_cphRoblox_RobloxGuideImageHyperLink" class="SectionIcon" text="ROBLOX Guide" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/RobloxGuide-110x115.png" border="0" blankurl="http://t3.bmblox.xyz:80/blank-110x115.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_RobloxGuideHyperLink" href="#"><?=$sitename?> Guide</a></h3>
		        <p>Background information on the world of <?=$sitename?>, especially for parents.</p>
		    </div>
		    <div class="ParentsSection" id="KeepingKidsSafe">
		        <a id="ctl00_cphRoblox_KeepingKidsSafeImageHyperLink" class="SectionIcon" text="Keeping Kids Safe" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/KeepingKidsSafe-110x112.png" border="0" blankurl="http://t4.bmblox.xyz:80/blank-110x112.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_KeepingKidsSafeHyperLink" href="#">Keeping Kids Safe</a></h3>
		        <p>Information on how to keep your kids safe while online.</p>
		    </div>
		    <div class="ParentsSection" id="FAQs">
		        <a id="ctl00_cphRoblox_FAQsImageHyperLink" class="SectionIcon" text="FAQs" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/FAQs-110x110.png" border="0" blankurl="http://t6.bmblox.xyz:80/blank-110x110.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_FAQsHyperLink" href="#">FAQs</a></h3>
		        <p>Questions and answers just for parents.</p>
		    </div>
		</div>
		<div id="RightColumn">
		    <h2>&nbsp;</h2>
		    <div class="ParentsSection" id="BuildersClub">
		        <a id="ctl00_cphRoblox_BuildersClubImageHyperLink" class="SectionIcon" text="Builders Club" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/BuildersClub-110x110.png" border="0" blankurl="http://t6.bmblox.xyz:80/blank-110x110.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_BuildersClubHyperLink" href="#">Builders Club</a></h3>
		        <p>Play for free, or enhance your experience with Builders Club.</p>
		    </div>
		    <div class="ParentsSection" id="ROBLOXAndLearning">
		        <a id="ctl00_cphRoblox_ROBLOXAndLearningImageHyperLink" class="SectionIcon" text="<?=$sitename?> and Learning" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/RobloxAndLearning-110x110.png" border="0" blankurl="http://t6.bmblox.xyz:80/blank-110x110.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_ROBLOXAndLearningHyperLink" href="#"><?=$sitename?> and Learning</a></h3>
		        <p><?=$sitename?> kids learn engineering, design, science and programming while playing.</p>
		    </div>
		    <div class="ParentsSection" id="WhatParentsAreSaying">
		        <a id="ctl00_cphRoblox_WhatParentsAreSayingImageHyperLink" class="SectionIcon" text="What Parents are Saying" href="#" style="display:inline-block;cursor:pointer;"><img src="/images/Parents/WhatParentsAreSaying-110x110.png" border="0" blankurl="http://t6.bmblox.xyz:80/blank-110x110.gif"/></a>
		        <h3><a id="ctl00_cphRoblox_WhatParentsAreSayingHyperLink" href="#">What Parents are Saying</a></h3>
		        <p>Hear what other parents are saying about <?=$sitename?>.</p>
		    </div>
		</div>
		<div style="clear: both;"></div>
	</div>

				</div>
	
<?php
	include("includes/footer.php");
	include('includes/data.php');
?>	