<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Expound
 */
?>

<? function hide_email($email)
	{ $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
		$key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);
			for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];
				$script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';
				$script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
				$script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';
				$script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; 
				$script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';
			return '<span id="'.$id.'">[Geschützte E-Mail-Addresse]</span>'.$script;
}
?>

	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-links">
			Alle Bilder auf diesen Seiten:</br>&copy; Ingo Wandmacher</br>Fotografie Travel Food People				
		</div>
		<div class="footer-rechts">
				Paul-Gerhard-Straße 1</br>23611 Bad Schwartau | Deutschland</br>Telefon: <a href="tel:+4945130443846">0451 / 30 44 38 46</a></br>
				<?php echo hide_email('info@iwfoto.de'); ?>		
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>