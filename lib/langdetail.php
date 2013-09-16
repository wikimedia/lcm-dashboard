<div class="container-fluid" style="margin-top:20px;">
	<div class="row-fluid">
		<div class="span6" align="center">
			<div class="example example-twitter-oss" id="noanimate">
				<input class="typeahead" id="typeahead" type="text" placeholder="Language Search" >
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
	<div class='row-fluid'>
		<div class="span6">			
			<div class='span12' id='boxed'>
				<div class="span8">Language Code (ISO)</div>
				<div class="span4" id="langcode_iso"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Language Code (WMF)</div>
				<div class="span4" id="langcode_wmf"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Language Name</div>
				<div class="span4" id="langname_eng"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Language Name (Autonym)</div>
				<div class="span4" id="langname_autonym"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Language Code (HTML)</div>
				<div class="span4" id="langname_html"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Fallback code</div>
				<div class="span4" id="fallback_code"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Macro Language</div>
				<div class="span3 iconshow" id="macro_lang"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">WMF Project Status</div>
				<div class="span3 iconshow" value="yes" id="wmf_proj_status"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Translator</div>
				<div class="span3 iconshow" value="yes" id="translate"></div>
			</div>	

			<div class='span12' id='boxed'>
				<div class="span8">Dictionary</div>
				<div class="span3 iconshow" value="yes" id="dictionary"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Spellchecker</div>
				<div class="span3 iconshow" value="yes" id="spellchecker"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Glossary</div>
				<div class="span3 iconshow" value="yes" id="glossary"></div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span8">Featured</div>
				<div class="span3 iconshow" value="yes" id="f_or_i"></div>
			</div>
		</div>

		<!-- 2nd side of menu -->
		<div class='span6'>
			<div class="accordion span12" id="accordion2">

				<!-- Heading 1 -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#uls">
							Universal Language Selector
						</a>
					</div>
					<div id="uls" class="accordion-body collapse in">
						<div class="accordion-inner">						
							<div class="span8">Webfonts</div>
							<div class="iconshow" value="yes" id="jquery_webfonts"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">Input Methods</div>
							<div class="" value="no" id="jquery_ime"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">Internationalization Support</div>
							<div class=" iconshow" value="yes" id="jquery_uls"></i></div>
						</div>
					</div>
				</div>

				<!-- Heading 2 -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#milkshake">
							Project Milkshake
						</a>
					</div>

					<div id="milkshake" class="accordion-body collapse">
						<div class="accordion-inner">
							<div class="span8">Input Method Library</div>
							<div class=" iconshow" value="yes" id="jquery_ime"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">Webfont Library</div>
							<div class=" iconshow" value="yes" id="jquery_webfonts"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">i18n Library</div>
							<div class=" iconshow" value="yes" id="jquery_i18n"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">ULS Library</div>
							<div class=" iconshow" value="yes" id="jquery_uls"></div>
						</div>
					</div>
				</div>

				<!-- Heading 3 -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#legacy_ext">
							Legacy Extensions
						</a>
					</div>
					<div id="legacy_ext" class="accordion-body collapse">
						<div class="accordion-inner">
							<div class="span8">Narayam</div>
							<div class=" iconshow" value="yes" id="narayam"></div>
						</div>

						<div class="accordion-inner">
							<div class="span8">Webfonts</div>
							<div class=" iconshow" value="yes" id="webfonts"></div>
						</div>
					</div>
				</div>

				<!-- Heading 4 -->
				<div class="accordion-group">
					<div class="accordion-heading">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#" href="#more_info" id="moreinfo">
							More Information on
						</a>
					</div>
					<div id="more_info" class="accordion-body collapse">
						<div class="accordion-inner">
							<div class="span6">Webfonts</div>
							<div class="span5" id="fontdetail"></div>
						</div>

						<div class="accordion-inner">
							<div class="span6">Input Methods</div>
							<div class="span5" id="imedetail"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>