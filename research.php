<?php



function wp_1seokwr_research() { 

		$wp_1seokwr_research_gl = get_option('wp_1seokwr_research_gl' , 'google.com');

		$wp_keyword_tool_alphabets = get_option('wp_keyword_tool_alphabets' , 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z');

		$letters_arr=explode(',', trim($wp_keyword_tool_alphabets));

		$letters=array_filter($letters_arr);

	

		?>

	<div class="wrap">

<a href="http://1seo.com" target=_blank><? echo '<img src="' . plugins_url( '/img/1seokwr.png' , __FILE__ ) . '" border=\"0\"> '; ?></a>
<h1>1SEO.com - Keyword Research Tool</h1>
	<p>



The 1SEO.com Keyword Research Tool helping you find keyword suggestions directly from Google search. For any given keyword phrase entered. </p>

<p>This tool is using Google Auto Suggest to find long tail keywords. These keywords are from real users that actually typed in these phrases into Google. </p>
	<table style="margin-top:10px;width:100%;max-width: 900px;">
		<tbody>
		<tr>	
			<td><input style="width:100%" type="text" value="" autocomplete="off" placeholder="Keyword..." size="14" class="newtag form-input-tip" id="wp_keyword_tool_search_txt"></td>
			<td style="width: 135px;" ><input style="width:100%"  type="button" tabindex="3" value="Search" class="button" id="wp_keyword_tool_more"></td>
			<td style="width: 38px;"><input style="width:100%"  type="button" tabindex="3" value="x" class="button tagadd" id="wp_keyword_tool_clean"></td>
		</tr>
		<tr><td colspan="3">
			<div class="hidden" id="wp_keyword_tool_body">
				<div id="wp_keyword_tool_keywords" class="wp-tab-panel"></div>		
				<div style="margin-bottom:10px;padding-left:5px"><label><input type="checkbox" id="wp_keyword_tool_check" value="s">Check/uncheck all</label></div>
				<input type="button" value="Show me plain text list" class="button" id="wp_keyword_tool_list_btn">
				<p><h2>1SEO.com Keyword Research Tool found (<b><i><font color="red"><span class="wp_keyword_tool_count"></span></font></i></b>) keywords for the term
				(<b><i><font color="blue"><span class="wp_keyword_tool_keyword_status"></span></font></i></b>) </h2>
				</p>
			</div>
		</td></tr>
		</tbody>
	</table>
		<div  style="display: none"  id="wp-keyword-tool-list-wrap">
		<textarea style="width:100%;height: 300px;" id="wp-keyword-tool-list"></textarea>
	</div>
	</div>
    <p>Do you need help using this plugin? Feel free to reach out to us on <a href="https://www.facebook.com/1seocompany" target="_new">Facebook</a>, <a href="https://twitter.com/1SEOcom" target="_new">Twitter</a> or <a href="https://plus.google.com/113421343201418600027/posts" target="_new">Google+</a>. </p>
	<script type="text/javascript">
		var wp_keyword_tool_google= '<?php echo $wp_1seokwr_research_gl ?>';
		var wp_keyword_tool_letters = <?php echo json_encode($letters) ?> ;
	</script>
	<?php

	}

	

 