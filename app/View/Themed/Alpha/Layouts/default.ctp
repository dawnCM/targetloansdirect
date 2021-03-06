<?php
/**
 * keyStone(SD) - Site Development
 *
 * Licensed under GNU General Public License v.2
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     TBD
 * @link          TBD
 * @package       app.View.Themed.Alpha.Layouts
 * @since         keyStone(SD) v1.0 
 * @license       TBD
 */

?>
<!DOCTYPE html>
<html lang="en">
    <head>

    	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71925930-13"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-71925930-13');
		</script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Target Loans Direct, the cash you need now!  Approving you... not your credit score">
        <title>Target Loans Direct</title>
        <?php echo $this->Html->css(array(
        'bootstrap-3.0.2.css',
        'bootstrap-override.css',
        'pace.css',
        'siteStyles.css',
        'formStyles.css',
        'fontawesome.min.css',
        'ekko-lightbox.min.css'
        )); ?>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='//fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>	
        <?php 
        echo $this->Html->script(array(
		'/js/jquery/jquery-1.11.3.min.js',
        '/js/pace.js',
       	'/js/jquery/jquery-maskedinput.min.js',
        '/js/bootstrap/bootstrap-3.0.2.min.js',
        '/js/resources.js',
        '/js/ekko-lightbox.min.js',
        '/js/validation.js',
		'/js/custom.js'
		));
        
		echo "<script>  \n".$this->Session->read('Script.ancillaryConfig')."\n</script>";
		
        if($loadApplicationJS) {
        	echo $this->Html->script(array(
        	'/js/bootstrap/bootstrap-wizard.min.js',
        	'/js/bootstrap/bootstrap-datepicker.min.js',
        	'/js/moment.js',
        	'/js/application/functions.js',
        	));
        	
        	echo $this->Html->css(array(
        	'bootstrap-datepicker.css',
        	));
        }
        
       	echo $this->Html->meta('icon', $this->Html->url('/img/favicon.ico'));
        ?>
        
        <?php echo '<script type="text/javascript">var nonce="'.Configure::read('Ajax.nonce').'";</script>'; ?>
        <?php echo (Configure::read('Global.Mobile')) ? '<script type="text/javascript">var ismobile=true;</script>' : '<script type="text/javascript">var ismobile=false;</script>';?>
        
        
    </head>
	<body>
		<div id="sec01_wrap">
			<div id="pghd_wrap">
		        <div class="container">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div id="logobox">
		                    <?php echo $this->Html->image('target_logo.png', array('alt'=>'Target Loans Direct', 'class'=>'img-responsive', 'width'=>'250', 'height'=>'70', 'url'=>'/')); ?>
		                    </div>
		                  <div id="tagline">
		                    Personal Loans - Fast, Easy and Secure
		                  </div>
		              </div>
		            </div>
		        </div>
		    </div>	

		<?php echo $this->fetch('content'); ?>
		<?php echo $this->Session->flash(); ?>
		
		<div id="sec02_wrap">
			<div class="container">
		    	<div class="row">
		        	<div class="col-sm-4">
		            	<div class="sec02_icon">
		                	<span class="fa fa-reply"></span>
		                </div>
		                <div class="sec02_title">
		                Submit Information
		              </div>
		                <div class="sec02_text">
		                <strong>It’s Fast<br>
		                </strong>Receive fast online approval decisions. </div>
		            </div>
		        	<div class="col-sm-4">
		            	<div class="sec02_icon">
		                	<span class="fa fa-check-circle"></span>
		                </div>
		                <div class="sec02_title">
		                Get Connected
		              </div>
		                <div class="sec02_text">
		                <strong>It’s Easy<br>
		                </strong>Our process is private, safe and secure. </div>
		            </div>
		        	<div class="col-sm-4">
		            	<div class="sec02_icon">
		                	<span class="fa fa-money"></span>
		                </div>
		                <div class="sec02_title">
		                Get Results
		              </div>
		                <div class="sec02_text">
		                <strong>It’s FREE<br>
		                </strong>Connect with our online lender network in minutes! </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="sec03_wrap">
			<div class="container">
		    	<div class="row">
		        	<div class="col-sm-12">
		            	<div id="sec03_banner">
		                We Serve <strong>ALL Credit Types</strong> - We even have loans for less than perfect credit! </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="sec05_wrap">
			<div class="container">
		    	<div class="row">
		        	<div class="col-sm-4 col-sm-offset-2">
		            	<div class="sec05_icon text-center">
		                <i class="fa fa-external-link"></i>
		                </div>
		                <div class="sec05_title text-center">
		                Get out of debt
		                </div>
		                <div class="sec05_text text-center">
		                Often times, consolidation loans have  a lower rate and you can get out of debt faster.
		                </div>
		            </div>
		        	<div class="col-sm-4">
		            	<div class="sec05_icon text-center">
		                <i class="fa fa-line-chart"></i>
		                </div>
		                <div class="sec05_title text-center">
		                Build your credit
		                </div>
		                <div class="sec05_text text-center">
		                Timely repayments can help you build your credit history.
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="sec04_wrap">
			<div class="container">
		    	<div class="row">
		        	<div class="col-sm-12">
		            	<div class="sec04_title">
		                Easy Online Process
		                </div>
		                <div id="sec04_text">
		                Emergencies come up for rent, bills, car troubles or other needs. We are here to help. Our large database of lenders is designed to connect with you quickly. Simply complete your online profile and you could get cash relief in minutes to meet your urgent needs now!
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<div id="footer_wrap">
			<div class="container">
		    	<div class="row">
		        	<div class="col-sm-12">
		                <div class="panel-group" id="accordion">
		                  <div class="panel panel-default">
		                    <div class="panel-heading">
		                      <h4 class="panel-title">
		                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
		                          Important information about procedures for opening a new account:
		                        </a>
		                      </h4>
		                    </div>
		                    <div id="collapseFour" class="panel-collapse collapse">
		                      <div class="panel-body">
		                        To help the government fight the funding of terrorism and money laundering activities, Federal law requires all financial institutions to obtain, verify, and record information that identifies each person who opens an account. 
		<br /><br />
		<strong>What this means for you:</strong> When you open an account, the lender will ask for your name, address, date of birth, and other information that will allow the lender to identify you. The lender may also ask to see your driver’s license or other identifying documents. 
		                      </div>
		                    </div>
		                  </div>
		                  <div class="panel panel-default">
		                    <div class="panel-heading">
		                      <h4 class="panel-title">
		                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					What is APR and how does APR work for a loan on this site?
					</a>
		                      </h4>
		                    </div>
		                    <div id="collapseOne" class="panel-collapse collapse">
		                      <div class="panel-body">
					APR is a commonly used abbreviation that stands for Annual Percentage Rate. This is a formula computed to show you what the interest rate combined with all the fees of a loan will be, in total, when analyzed for an entire year. APR is a way for you to compare and shop by knowing what the representative APR ranges might be for a loan that you may receive on our site.<br/><br/>
When using our service to find a lender, the lender is required to provide you, the consumer, with all costs associated to be expressed as an annual percentage rate of interest (APR). This information will include the identity of the lender, the amount financed, the itemization of amount financed, the finance charge, the annual percentage rate, your payment schedule and your total number of payments. You will be able to review all this information BEFORE you obligate yourself to any loan. Your interest rate will vary depending upon which product you select from which lender. In addition, the Federal Equal Credit Opportunity Act prohibits lenders from discriminating against applicants on the basis of color, race, religion, sex, marital status and age.
				 </div>
		                    </div>
		                  </div>
		                  <div class="panel panel-default">
		                    <div class="panel-heading">
		                      <h4 class="panel-title">
		                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				             What is the APR for a loan I may get from a lender when using our service? 
		                        </a>
		                      </h4>
		                    </div>
		                    <div id="collapseTwo" class="panel-collapse collapse">
		                      <div class="panel-body">
				We are not your lender. Our service provides an easy and convenient way for consumers to be connected with a personal loan through our network of lenders. <br/></br/>
Because there are many lenders offering many different products we don’t know the exact APR that a lender may offer you.  But rest assured, your lender must disclose all this information to you before you obligate yourself to any loan.  The APR on a personal loan from our network of lenders can range from 5.99% to 35.99%, with loan durations between 90 days and 72 months. The actual loan rate depends on the loan amount and term requested, as well as your credit score, usage, and history. If you are offered a loan, you will have the opportunity to review the final offer made by the lender, and to accept the loan agreement made directly between you and the lender.				
		                      </div>
		                    </div>
		                  </div>
		                  <div class="panel panel-default">
		                    <div class="panel-heading">
		                      <h4 class="panel-title">
		                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
		                          What happens if I'm late paying back the loan?
		                        </a>
		                      </h4>
		                    </div>
		                    <div id="collapseThree" class="panel-collapse collapse">
		                      <div class="panel-body">
		                        Once you are connected with a lender, you will be given all of your loan terms, in advance and in writing, for you to review. If you accept the terms and conditions of the loan offer, you are agreeing to pay that loan back in the amount of time expressed in the loan documents. If you do not understand anything in the loan agreement, you should not move forward. You should always pay your loan back on time to avoid additional fees and penalties. Partial payment, non-payment, or late payment is likely to result in the following:
		                        <ul>
		                        <li>Associated Fees/Interest rate adjustment - some lenders will charge fees, or adjust your interest rate if you are making late payments.</li>
		                        <li>Collection practices - If you refuse to repay the loan all together, it is likely that the lender will engage a collection company 
		                            to try and recoup what you owe them (just like any lender would).</li>
		                        <li>Credit Score impact - if you do not repay your loan on time, your delinquency may be reported to a credit bureau, 
		                            which could negatively impact your credit score.</li>
		                        <li>Renewal policy - As a convenience to you, some lenders may offer a renewed or "roll-over" loan that may have additional fees and may 
		                            renew automatically, unless you request otherwise. Please make sure to review your lender's renewal policies, and make sure that your 
		                            payment preferences are known to your lender.</li>
		                        </ul>
		                        This information will be disclosed by each individual lender. Please don't agree to any loan that you cannot repay. If you have questions or need more information on late payment or renewal policies, please contact the lender directly and they will be happy to provide you that information. While most lenders in this site's network do not run a traditional credit check, it is important for us to let you know that in some cases credit checks, consumer credit reports and other personal data may be obtained by some lenders. These checks typically are performed by Experian, Equifax, Trans Union or through alternative providers in order to make a decision on whether or not to offer you a loan. As with any loan, it's important to repay the loan on time or contact the lender to work out a payment plan just as soon as possible. 
		                      </div>
		                    </div>
		                  </div>
		                </div>
		            </div>
		        </div>

		        <div class="row">
		        	<div class="col-sm-12" id="footer_auth">
		            <strong>For your protection:</strong> Our lender partners will never call and ask for advance payment. NEVER pay a lender in advance for a loan. THE OPERATOR OF THIS WEBSITE IS NOT A LENDER, does not broker loans and does not make loans or credit decisions. Nothing on this website is an offer or a solicitation to lend. The operator of this Website is not an agent, representative or broker of any lender and does not endorse or charge you for any service or product. We are compensated by these lenders, lending partners and / or aggregators for connecting you with them, and the compensation received may affect which offer you are presented with. Your information may be going to an aggregator and not a lender. Your information can be sold multiple times leading to multiple offers from lenders, aggregators, and other marketers. Lenders and aggregators who buy your information may supplement it with additional information about you that they obtain from other sources. Not all lenders can provide your requested type of loan and/or loan rate or terms, and we make no promises that you will be able to obtain a loan. Lenders are solely responsible to you for all aspects of any loan request or loan transaction, including compliance with all applicable laws and regulations relating to your loan and any agreement or disclosures relating to your loan request form or loan transaction (including any adverse action notices or Truth-in-Lending Act disclosures).  Cash transfer times may vary between lenders and may depend on your individual financial institution. Lenders may perform a credit check to determine your creditworthiness. In some circumstances faxing may be required. This service is not available in all states, and the states serviced by this website may change from time to time and without notice. For details, questions or concerns regarding your cash advance, please contact your lender directly. Cash advances are meant to provide you with short term financing to solve immediate cash needs and should not be considered a long-term solution. Please borrow responsibly! </div>
		            <div class="col-sm-12" id="footer_auth">
		            <strong>Online Lenders Alliance:</strong> When you see the OLA seal, you can trust you’re working with a company committed to the highest standards of conduct, dedicated to ensuring the best possible experience for their customers, fully compliant with federal law, and working hard to protect consumers from fraud. </div>
		        </div>
		        <div class="row">
		        	<div class="col-sm-12 text-center" id="footer_links">
		        		<!--Official OLA Member Seal-->
						<script src="https://stage.ola-memberseal.org/js/seal.js?seal=member&token=I37sebUJvu2rcVleyaPY&sealwidth=100&sealheight=100"></script><br/>
						<!--Official OLA Member Seal-->
                    
		            Copyright &copy; <? echo date('Y')?> Target Loans Direct<br />
		        <a href="https://global.leadstudio.com/terms" data-title="Terms and Conditions" data-toggle="lightbox" data-gallery="remoteload">Terms of Use</a> | <a href="https://global.leadstudio.com/privacy?site=Target%20Loans%20Direct" data-title="Privacy Policy" data-toggle="lightbox" data-gallery="remoteload">Privacy Policy</a> | <a href="http://www.optout-wvcx.net/o-fhqt-s86-7d44b1ce4ff127eb8453f27dde274108&cr=106" target="_blank">Unsubscribe</a> | <a href="http://cmportal.leadspedia.net/affiliate/signup/index.html" target="_blank">Become an Affiliate</a>
		            </div>
		        </div>
		    </div>
		</div>

		<?php 
		echo "<script>
		console.log('".$this->Session->read('Application.TrackId')."');
		console.log('".$this->Session->read('Application.AffiliateId')."');
		console.log('".$this->Session->read('Application.CampaignId')."');
		console.log('".$this->Session->read('Application.RequestId')."');
		</script>";
		?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-71925930-2', 'auto');
		  ga('send', 'pageview');
		
		</script>
		
    </body>
</html>
