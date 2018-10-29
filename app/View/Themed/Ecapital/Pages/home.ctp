<div id="sec01_contentbox" class="clearfix">
        <div class="title1">
        Get the Cash You Need
        </div>
        <div class="subtitle">
        Personal Loans from Lenders Online Now
        </div>
        <form class="form-horizontal" role="form" id="LeadInForm" action="/application" method="post">
        <div id="sec01_row">
        	<div class="col-sm-4" id="sec01_lcol">
            I would like to&nbsp; 
            </div>
            <div class="col-sm-4" id="sec01_mcol">
                        <select name="LoanPurpose" id="LoanPurpose" tabindex="2" class="form-control field-lg" 
						data-parsley-required="true" 
						data-parsley-group="step1">
							<option value="">-Choose-</option>
							<option value="auto"<?php echo ($this->Session->read('Application.LoanPurpose') == 'auto') ? ' selected="selected"' : ''; ?>>Auto Repair</option>
							<option value="debt"<?php echo ($this->Session->read('Application.LoanPurpose') == 'debt') ? ' selected="selected"' : ''; ?>>Debt Consolidation</option>
							<option value="home"<?php echo ($this->Session->read('Application.LoanPurpose') == 'home') ? ' selected="selected"' : ''; ?>>Home Improvement</option>
							<option value="major"<?php echo ($this->Session->read('Application.LoanPurpose') == 'major') ? ' selected="selected"' : ''; ?>>Major Purchase</option>
							<option value="medical"<?php echo ($this->Session->read('Application.LoanPurpose') == 'medical') ? ' selected="selected"' : ''; ?>>Medical</option>
							<option value="other"<?php echo ($this->Session->read('Application.LoanPurpose') == 'other') ? ' selected="selected"' : ''; ?>>Other</option>
						</select>
          	</div>
        </div>
        <div id="sec01_row">
        	<div class="col-sm-6">
            <label for="Military">Are you active military?</label>
		   	<select name="Military" class="form-control field-lg" id="Military" tabindex="2" data-parsley-required="true">
				<option value="true">Yes</option>
				<option value="false" selected>No</option>
			</select>
			</div>
        	<div class="col-sm-6">
            <label for="CreditRating">Rate your credit:</label>
              <select name="CreditRating" class="form-control field-lg" id="CreditRating" tabindex="3" data-parsley-required="true">
				<option value="">-Select-</option>
				<option value="excellent" <?php echo ($this->Session->read('Application.CreditRating') == 'excellent') ? 'selected="selected"' : '' ?>>Excellent (760+)</option>
				<option value="good"<?php echo ($this->Session->read('Application.CreditRating') == 'good') ? 'selected="selected"' : '' ?>>Good (700+)</option>
				<option value="fair"<?php echo ($this->Session->read('Application.CreditRating') == 'fair') ? 'selected="selected"' : '' ?>>Fair (640+)</option>
				<option value="poor"<?php echo ($this->Session->read('Application.CreditRating') == 'poor') ? 'selected="selected"' : '' ?>>Poor</option>
				<option value="unsure"<?php echo ($this->Session->read('Application.CreditRating') == 'unsure') ? 'selected="selected"' : '' ?>>Unsure</option>
			</select>
            </div>
        </div>
        <div id="sec01_row">
                    <br>
           
              <div class="ckbox ckbox-success">
                <input type="checkbox" value="true" id="Agree" tabindex="4" name="Agree" />
	                              <label
									for="Agree">I am / we are over Eighteen (18) years of age,
									am / are a U.S. resident and am not currently in bankruptcy.
									I/We have read and agree to the <a
									href="https://global.leadstudio.com/terms"
									data-title="Terms and Conditions" data-toggle="lightbox"
									data-gallery="remoteload">Terms and Conditions</a>, <a
									href="https://global.leadstudio.com/privacy?site=Target%20Loans%20Direct"
									data-title="Privacy Policy" data-toggle="lightbox"
									data-gallery="remoteload">Privacy Policy</a> and <a
									href="https://global.leadstudio.com/econsent"
									data-title="E-consent" data-toggle="lightbox"
									data-gallery="remoteload">E-consent</a>.
								</label>
			</div>

        </div>
        <div id="sec01_row" class="text-center">
        <div class="btn btn-success btn-lg" id="button-app-start" style = "cursor: pointer" role="button">Get Started</div>
        </div>
       </form>
    </div>
  <!--  <a href="#sec02_wrap" class="button style2 down anchored" id="sec01_nextbtn">More</a>-->
</div>