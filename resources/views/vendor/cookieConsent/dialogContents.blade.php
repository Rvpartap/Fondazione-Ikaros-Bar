<!-- Cookie Banner -->
<div class="js-cookie-consent cookie-consent fixed-bottom bg-light border-top border-4 border-dark py-3 px-4">
	<div class="row my-3">
      <div class="col-md-9">
      	<span class="cookie-consent__message float-start mb-3 me-1 ps-1 h6 fs-5">
        		{!! trans('cookieConsent::texts.message') !!}
    		</span>
      </div>
      <div class="col-md-3">
      	<div class="d-grid gap-2">
      		<button class="js-cookie-consent-agree cookie-consent__agree btn btn-lg btn-dark float-end">
        			<strong class="h4"> {{ trans('cookieConsent::texts.agree') }} </strong>
    			</button>
    		</div>
      </div>
   </div>
   <hr class="border-1 border-dark">
   <div class="row mt-3">
      <div class="col-6">
      	<div class="d-grid gap-2">
    			<button type="button" class="btn btn-light" onclick="window.open('https://www.fondazioneikaros.org/privacy-e-cookie-policy/','_blank')"><i class="fa-solid fa-user-shield"></i>&#160; Privacy</button>
    		</div>
    	</div>
      <div class="col-6">
      	<div class="d-grid gap-2">
      		<button type="button" class="btn btn-light" onclick="window.open('https://gdpr.eu/tag/gdpr/','_blank')"><i class="fa-solid fa-globe"></i>&#160; GDPR (EU)</button>
      	</div>
      </div>
	</div>
</div>