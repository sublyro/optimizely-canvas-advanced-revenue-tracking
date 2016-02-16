<div class="revenue-tracking-app">

  <div id="revenue-implementation" class="app-section">
    <h2 class="dialog__title flush">How do you want to implement revenue tracking? </h2>


    <ul class="form-fields push--bottom">

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="implementation" value="manually" checked> Manually
        </label>
      </li>

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="implementation" value="automated"> Automated through this app (Revenue tracking will happen at DOM ready)
        </label>
        <div id="implementation-url" class="push--top indent-more">
          <label>On which URL do you want to implement revenue tracking</label>
          <div class="grid">
            <div class="grid__cell">
              <input type="text" class="text-input" placeholder="Enter a URL...">
            </div>
            <div class="push-double--left">
              <select class="select">
                <option value="simple">Simple match</option>
                <option value="exact">Exact match</option>
                <option value="substring">Substring match</option>
                <option value="regex">Regular expression</option>
              </select>
            </div>
          </div>
        </div>
      </li>

    </ul>

  </div>

  <div id="revenue-duplication" class="app-section">
    <h2 class="dialog__title flush">Do you want to implement revenue deduplication?</h2>
    <ul class="form-fields push--bottom">

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="deduplication" value="yes" checked> Yes
        </label>
        <div id="deduplication-id" class="push--top indent-more">
          <label>How can we retrieve the transaction id (or any other unique identifier) from the page? (ie: datalayer.tid, $('#tid').text(), etc)</label>
          <input type="text" class="text-input" placeholder="">
        </div>
      </li>

      <li class="form-field__item">
        <input type="radio" name="deduplication" value="no"> No</li>
    </ul>
  </div>

  <div id="revenue-currency-conversion" class="app-section">
    <h2 class="dialog__title flush">Do you want to perform currency conversion?</h2>
    <ul class="form-fields push--bottom">

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="conversion" value="yes" checked> Yes
        </label>
        <div id="deduplication-config" class="push--top indent-more">
          <div>
            <label>What currency do you want to send to Optimizely?</label>
            <input type="text" class="text-input" placeholder="Base Currency" value="USD">
          </div>
          <div>
            <label>How can we retrieve the current transaction currency from the page? (ie: datalayer.currency, $('#currency').text(), etc)</label>
            <input type="text" class="text-input" placeholder="">
          </div>

    <ul class="form-fields push--bottom">
      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="conversion-type" value="onthefly" checked> Convert on the fly using fixer.io finance API
        </label>
      </li>

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="conversion-type" value="hardcoded" > Use hardcoded values
        </label>
        <div class="conversion-hardcoded">
        	<div class="hardcoded-conversion conversion-table">
        		<div class="from-amount conversion-cell"><input type="text" class="text-input" value="1" disabled></div>
        		<div class="from conversion-cell"><input type="text" class="text-input" placeholder="EUR"></div>
        		<div class="conversion-cell">&nbsp;=&nbsp;</div>
        		<div class="to-amount conversion-cell"><input type="text" class="text-input" placeholder="1.12"></div>
        		<div class="to conversion-cell"><input type="text" class="text-input" value="USD" disabled></div>

				<div class="table--add-row__controls"> 
					<button type="button" class="conversion-control button button--form button--narrow"> +
					</button> 
					<button type="button" class="conversion-control button button--form button--narrow "> - 
					</button> 
				</div>

        	</div>
        </div>
      </li>
    </ul>

        </div>
      </li>

      <li class="form-field__item">
        <input type="radio" name="conversion" value="no"> No</li>
    </ul>
  </div>


  <!--div id="revenue-tags" class="app-section">
	<h2>Tags</h2>
</div-->

  <div id="revenue-outliners" class="app-section">
    <h2 class="dialog__title flush">What do you want to do with outliners?</h2>
    <ul class="form-fields push--bottom">

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="outliner" value="manually" checked> Do nothing
        </label>
      </li>

      <li class="form-field__item">
        <label class="indent">
          <input type="radio" name="outliner" value="Exclude"> Exlclude them
        </label>
        <div id="implementation-url" class="push--top indent-more">
          <label>What is the threshold for outliners (in cents of the base currency)</label>
          <div class="grid">
            <div class="grid__cell">
              <input type="text" class="text-input" placeholder="100000000">
            </div>
          </div>
        </div>
      </li>

    </ul>
  </div>


</div>
