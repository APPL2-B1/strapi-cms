<div class="page">
    <h2><?php echo $lang_contact_page_title; ?></h2>
    <p><?php echo $lang_contact_page_name; ?></p>
    <p><?php echo $lang_contact_page_address; ?></p>
    <p><?php echo $lang_contact_page_telephone; ?></p>
<form>
<p><label> Your Name (required)<br>
    <span ><input type="text" name="your-name" value="" size="40"  aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Your Email (required)<br>
    <span ><input type="email" name="your-email" value="" size="40"  aria-required="true" aria-invalid="false"></span> </label></p>
<p><label> Subject<br>
    <span ><input type="text" name="your-subject" value="" size="40"  aria-invalid="false"></span> </label></p>
<p><label> Your Message<br>
    <span ><textarea name="your-message" cols="40" rows="10"  aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Send" ></p>

</form>
</div>