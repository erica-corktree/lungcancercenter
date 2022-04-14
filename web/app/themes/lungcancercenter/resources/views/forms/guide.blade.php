<form class="float-right w-full md:w-1/2 mx-auto ml-8 mb-8 p-8 pr-24 text-black bg-grey-lighter rounded overflow-hidden shadow-lg border" action="#" style="margin-top: -24rem;">
  <fieldset class="fieldset">
    <legend class="legend">Where should we send our guide?</legend>

    <div class="w-full px-3">
      <label class="label" for="address">Address</label>
      <input class="input" id="address" type="text">
    </div>

    <div class="w-full md:w-1/3 px-3 mb-4">
      <label class="label" for="city">City</label>
      <input class="input" id="city" type="text" placeholder="Denver">
    </div>

    <div class="w-full md:w-1/3 px-3 mb-4">
      <label class="label" for="state">State</label>

      <div class="relative">
        <select class="input" id="state">
          <option>Colorado</option>
          <option>Florida</option>
          <option>New York</option>
        </select>

        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-4">
      <label class="label" for="zip">Zip</label>
      <input class="input" id="zip" type="text" placeholder="80202">
    </div>
  </fieldset>

  <fieldset class="fieldset">
    <legend class="legend">Who is the recipient?</legend>

    <div class="w-full md:w-1/2 px-3 mb-4">
      <label class="label" for="first-name">First Name</label>
      <input class="input" id="first-name" type="text" placeholder="Jane">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-4">
      <label class="label" for="last-name">Last Name</label>
      <input class="input" id="last-name" type="text" placeholder="Doe">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-4">
      <label class="label" for="phone-number">Phone Number</label>
      <input class="input" id="phone-number" type="text" placeholder="(555) 555-5555">
    </div>

    <div class="w-full md:w-1/2 px-3 mb-4">
      <label class="label" for="email">Email</label>
      <input class="input" id="email" type="email" placeholder="jane.doe@example.com">
    </div>

    <div class="w-full px-3 mb-4">
      <label class="label" for="message">Message</label>
      <textarea class="input" id="message" rows="2"></textarea>
    </div>
  </fieldset>

  <button class="button button--blue-dark" type="submit">Download Our Free Guide</button>
</form>
