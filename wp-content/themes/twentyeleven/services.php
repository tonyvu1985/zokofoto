<?php
/**
	Template Name: contact
 */

get_header(); ?>

<div id="primary">
    <div id="content" role="main">
		<p>STEP 1: CHOOSE YOUR PACKAGE</p>
      <div class="special-package-box">
        <p class="package-name"><input type="radio" id="specialpackage" name="package" value="special package" onclick="checkpackage(this)" /> Package: Special price $3000</p>  
        <div  id="special-package">
        
        <p>1 Pre-wedding session. ( 1 full day trip)<br/>                             
        1 Wedding reception<br/>            
        Ceremony<br/>                                                           
        Studio ( 3 hours with makeup artist)<br/>
        40cm x 40cm layout album ( approximately 10-15 pages)<br/>                                       
        1 Photos DVD<br/>
        Make up<br/>
        All images will be selected by you. Minimum 100 to 200 images( all retouch )</p> 
        <a href="#inline" class="modalbox" name="choose-special-package" id="choose-the-package" onclick="choosepackage(this)">choose the package >></a>
        
      </div></div><!-- end of spcial package -->
        
      
	         <div class="product-session-box">
        <p class="package-name"><input type="radio" id="productsessionpackage" name="package" value="product session package" onclick="checkpackage(this)"> Products Session: $15/image</p>
        <div id="product-session">
            <p><input type="checkbox" name="" value="Retouch ( to be selected by client)" />Retouch ( to be selected by client)<br/>
            <input type="checkbox" name="" value="Log book design: $150" />Log book design: $150<br/>
            <input type="checkbox" name="" value="CD of original file" />CD of original file<br/>
            <input type="checkbox" name="" value="Studio setup at your location: $200" />Studio setup at your location: $200</p> 
            <a href="#inline" class="modalbox" name="choose-product-session" id="choose-the-package" onclick="choosepackage(this)">choose the package >></a>
        </div></div> 

      <div class="individual-choice-box">
        <p class="package-name"><input type="radio" id="individualchoicepackage" name="package" value="individual choice package" onclick="checkpackage(this)" > Individual choice </p>
       
        
        <div id="individual-choice">
        <p><input type="checkbox" name="individual-choice1" value="1 day trip: $2000" />1 day trip: $2000<br/>       
		<input type="checkbox" name="individual-choice2" value="wedding reception: $500" />wedding reception: $500<br/>
        <input type="checkbox" name="" value="Ceremony: $300" />Ceremony: $300<br/> 
        <input type="checkbox" name="" value="Studio(For wedding): $300" />Studio(For wedding): $300<br/>
		<input type="checkbox" name="" value="40cm x 40cm printing ( photo album ): $450" />40cm x 40cm printing ( photo album ): $450<br/>             
		<input type="checkbox" name="" value="Studio session (3 hours limit)( family, portrait or others ): $200" />Studio session (3 hours limit)( family, portrait or others ): $200<br/> 
		<input type="checkbox" name="" value="Include:20 retouch pictures" />Include:20 retouch pictures<br/>
		<input type="checkbox" name="" value="Makeup artist: $200" />Makeup artist: $200<br/>
		<input type="checkbox" name="" value="Extra day for pre wedding shoot  (on top of $1500): $700" />Extra day for pre wedding shoot  (on top of $1500): $700</p>
        <a name="choose-individual-choice" href="#inline" class="modalbox" id="choose-the-package" onclick="choosepackage(this)">choose the package >></a> 
      </div></div><!-- end of individual choice package -->
        

        
        <!-- hidden inline form -->
<div id="inline">
	<p>STEP 2: SEND US YOUR PACKAGE</p>
	<form id="contact" name="contact" action="#" method="post">
    <table cellpadding="0" cellspacing="0" border="0">
    <tr><!-- row 1 -->
    	<td align="left" valign="top" width="50%"><!-- col 1 -->
        <input type="name" id="detailofpackage" name="detailofpackage" class="txt"><br/>
        
        <label>Your Name &nbsp;&nbsp;</label>
        <input type="name" id="name" name="name" class="txt"><br/>
		<label for="email">Your E-mail &nbsp;</label>
        <input type="email" id="email" name="email" class="txt"><br/>
        </td>
        <td align="left" valign="top" width="50%"><!-- col 2 -->
        <label for="phone">Phone number &nbsp;&nbsp;</label>
        <input type="phone" id="phone" name="phone" class="txt"><br/>
        <label for="phone">Appointment day</label>
        <input type="date" id="date" name="date" class="txt"><br>
        </td>
    </tr>
	<tr><!-- row 2 -->
    	<td align="left" valign="top" colspan="2">
       	<label for="msg">Content</label>
        <textarea id="msg" name="msg" class="txtarea"></textarea>
       	<button id="send">Send E-mail</button>
        </td>
    </tr>  
	</table>
	</form>
</div>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>