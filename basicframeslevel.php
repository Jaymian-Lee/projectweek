<!DOCTYPE html>
<!--
The basic frameset filled with the level 1 components
-->

<frameset cols='21%,*,21%' border='0'>
    <frameset rows='40%,15%,*' border='0'>																				<!-- Left colomn -->
        <frame name='left-top' src='./lefttop.html' noresize scrolling='no'>											<!-- Room: left top frame -->
        <frame name='left-middle' src='./floor.html' noresize scrolling='no'>       									<!-- Room: left center frame -->		
        <frame name='left-bottom' src='./floorleft.html' noresize scrolling='no'>       								<!-- Room: left bottom frame -->
    </frameset>
    <frameset rows='20%,4%,*,4%,20%' border='0'>																		<!-- The middle column -->
        <frame name='middle-top' src='./standardmiddletop.html' noresize scrolling='no'>								<!-- Room: middle top frame -->
        <frame name='case-top' src='./casingborder.html' noresize scrolling='no'>										<!-- Casing: border top -->
            <frameset cols='3%,31%,*,31%,3%' border='10'>																
                <frame name='casing-left' src='./casingborder.html' noresize scrolling='no'>							<!-- Casing: border leftside -->
                <frameset rows='50%,50%' border='10'>
                    <frame name='center-left-top' src='./nopuzzleframe.html' noresize scrolling='no'>					<!-- Casing: upper left corner / timer frame -->
                    <frame name='center-left-bottom' src='./nopuzzleframe.html' noresize scrolling='no'>				<!-- Casing: lower left corner / puzzle game 1 -->
                </frameset>
                <frameset rows='50%,50%' border='10'>
                    <frame name='center-middle-top' src='./nopuzzleframe.html' noresize scrolling='no'>					<!-- Casing: center top / puzzle game 2 -->
                    <frame name='center-middle-bottom' src='./nopuzzleframe.html' noresize scrolling='no'>				<!-- Casing: center bottom / puzzle frame 3 -->
                </frameset>
                <frameset rows='50%,50%' border='10'>
                    <frame name='center-right-top' src='./nopuzzleframe.html' noresize scrolling='no'>					<!-- Casing: upper right corner / puzzle frame 4 -->
                    <frame name='center-right-bottom' src='./nopuzzleframe.html' noresize scrolling='no'>				<!-- Casing: lower right corner / puzzle frame 5 -->
                </frameset>
                <frame name='casing-rigth' src='./casingborder.html' noresize scrolling='no'>							<!-- Casing: border right -->
            </frameset>
        <frame name='case-bottom' src='./casingborder.html' noresize scrolling='no'>									<!-- Casing: border bottom -->
        <frame name='middle-bottom' src='./standardmiddlebottom.html' noresize scrolling='no'>							<!-- Room/table: Center bottom -->
    </frameset>
    <frameset rows='40%,15%,*' border='0'>																				
        <frame name='right-top' src='./standardright.html' noresize scrolling='no'>										<!-- Room: Right top frame -->
        <frame name='right-middle' src='./floor.html' noresize scrolling='no'>        									<!-- Room: Right center frame -->
        <frame name='right-bottom' src='./floorright.html' noresize scrolling='no'>        								<!-- Room: Right bottom frame -->
    </frameset>    
</frameset>

