<div class="container-fluid" id="langdetailshow" style="display:none;">
	<div class='row-fluid'>
		<div class="span6">			
			<div class='span12' id='boxed'>
				<div class="span6">Language Code (ISO)</div>
				<div class="span4" id="langcode_iso"></div>
				<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Language Code (WMF)</div>
				<div class="span4" id="langcode_wmf"></div>
				<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Language Name</div>
				<div class="span4" id="langname_eng"></div>
				<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Language Name (Autonym)</div>
				<div class="span4" id="langname_autonym"></div>
				<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Language Code (HTML)</div>
				<div class="span4" id="langname_html"></div>
				<a class="btn btn-primary edit edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Fallback code</div>
				<div class="span4" id="fallback_code"></div>
				<a class="btn btn-primary edit" id="tes1" href="" data-toggle='modal' data-placement='right' title='Edit' href='' data-dismiss='modal'><i class="icon-pencil icon-white"></i></a>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Macro Language</div>
				<div class="span3 iconshow" id="macro_lang"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">WMF Project Status</div>
				<div class="span3 iconshow" value="yes" id="wmf_proj_status"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Translator</div>
				<div class="span3 iconshow" value="yes" id="translate"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
			</div>	

			<div class='span12' id='boxed'>
				<div class="span6">Dictionary</div>
				<div class="span3 iconshow" value="yes" id="dictionary"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Spellchecker</div>
				<div class="span3 iconshow" value="yes" id="spellchecker"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
			</div>

			<div class='span12' id='boxed'>
				<div class="span6">Glossary</div>
				<div class="span3 iconshow" value="yes" id="glossary"></div>
				<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
					<input type="checkbox" >
				</div>
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
							<div class="span6">Webfonts</div>
							<div class="span3 iconshow" value="yes" id="jquery_webfonts"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">Input Methods</div>
							<div class="span3 iconshow" value="no" id="jquery_ime"></i></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">Internationalization Support</div>
							<div class="span3 iconshow" value="yes" id="jquery_uls"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
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
							<div class="span6">Input Method Library</div>
							<div class="span3 iconshow" value="yes" id="jquery_ime"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">Webfont Library</div>
							<div class="span3 iconshow" value="yes" id="jquery_webfonts"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">i18n Library</div>
							<div class="span3 iconshow" value="yes" id="jquery_i18n"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">ULS Library</div>
							<div class="span3 iconshow" value="yes" id="jquery_uls"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
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
							<div class="span6">Narayam</div>
							<div class="span3 iconshow" value="yes" id="narayam"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
						</div>

						<div class="accordion-inner">
							<div class="span6">Webfonts</div>
							<div class="span3 iconshow" value="yes" id="webfonts"></div>
							<div id="normal-toggle-button" data-on-label="Yes" data-off-label="No" data-on="primary" data-off="danger" class="switch test">
								<input type="checkbox" >
							</div>
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
							<div class="span5">Webfonts</div>
							<div class="span5" id="fontdetail"></div>
							<button class="btn btn-primary test binary"><i class="icon-pencil icon-white"></i></button>
						</div>

						<div class="accordion-inner">
							<div class="span5">Input Methods</div>
							<div class="span5" id="imedetail"></div>
							<button class="btn btn-primary test binary"><i class="icon-pencil icon-white"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>