<form class="" role="form" method="post" autocomplete="off" action="{{ route('cruise_add') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
        <h6 class="fw-medium fs-16 mb-2">Search For Cruise</h6>
    </div>
    <div class="d-lg-flex">
        <div class="d-flex  form-info">
            <div class="form-item dropdown">
                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                    {{-- <label class="form-label fs-14 text-default mb-1">Destination*</label> --}}
                    <select class="form-select" name="destination" id="" required>
                        <option value="">Destination*</option>
                        <option value="Africa">Africa</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Alaska - Inside Passage">Alaska - Inside Passage</option>
                        <option value="Alaska - Northbound">Alaska - Northbound</option>
                        <option value="Alaska - Southbound">Alaska - Southbound</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Arctic">Arctic</option>
                        <option value="Asia / Orient">Asia / Orient</option>
                        <option value="Atlantic Coastal">Atlantic Coastal</option>
                        <option value="Australia / New Zealand">Australia / New Zealand</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Canada / New England">Canada / New England</option>
                        <option value="Caribbean">Caribbean</option>
                        <option value="Caribbean - Eastern">Caribbean - Eastern</option>
                        <option value="Caribbean - Southern">Caribbean - Southern</option>
                        <option value="Caribbean - Western">Caribbean - Western</option>
                        <option value="Central America">Central America</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cruise To Nowhere">Cruise To Nowhere</option>
                        <option value="Europe">Europe</option>
                        <option value="Europe - Baltic Sea">Europe - Baltic Sea</option>
                        <option value="Europe - British Isles">Europe - British Isles</option>
                        <option value="Europe - Greek Isles">Europe - Greek Isles</option>
                        <option value="Europe - Mediterranean">Europe - Mediterranean</option>
                        <option value="Europe - Northern">Europe - Northern</option>
                        <option value="Europe - Norwegian Fjords">Europe - Norwegian Fjords</option>
                        <option value="Europe - River Cruises">Europe - River Cruises</option>
                        <option value="Europe - Western">Europe - Western</option>
                        <option value="Galapagos">Galapagos</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Mexico - Baja Mexico">Mexico - Baja Mexico</option>
                        <option value="Middle East">Middle East</option>
                        <option value="Pacific Northwest">Pacific Northwest</option>
                        <option value="Panama Canal">Panama Canal</option>
                        <option value="South America">South America</option>
                        <option value="Tahiti / South Pacific">Tahiti / South Pacific</option>
                        <option value="Trans Atlantic Cruises">Trans Atlantic Cruises</option>
                        <option value="Trans Pacific Cruises">Trans Pacific Cruises</option>
                        <option value="United States">United States</option>
                        <option value="World Cruises">World Cruises</option>
                    </select>
                </div>
            </div>
            <div class="form-item">
                {{-- <label class="form-label fs-14 text-default mb-1">Start Date</label> --}}
                <input class="form-control datetimepicker" name="date_b" placeholder="Date*" required>
            </div>
            <div class="form-item dropdown">
                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                    {{-- <label class="form-label fs-14 text-default mb-1">Cruise Length</label> --}}
                    <select class="form-select" name="cruise_length" id="" required>
                        <option value="">Cruise Length*</option>
                        <option value="1 to 2 Nights">1 to 2 Nights </option>
                        <option value="3 to 5 Nights">3 to 5 Nights </option>
                        <option value="6 to 9 Nights">6 to 9 Nights </option>
                        <option value="10 to 14 Nights">10 to 14 Nights </option>
                        <option value="15+ Nights">15+ Nights </option>
                    </select>
                </div>
            </div>
            <div class="form-item dropdown">
                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                    {{-- <label class="form-label fs-14 text-default mb-1">Departure Port</label> --}}
                    <select class="form-select" name="cruise_line" id="" required>
                        <option value="">Cruise Line*</option>
                        <option value="AMA Waterways">AMA Waterways</option>
                        <option value="American Cruise Lines">American Cruise Lines</option>
                        <option value="Atlas Ocean Voyages">Atlas Ocean Voyages</option>
                        <option value="Aurora Expeditions">Aurora Expeditions</option>
                        <option value="Avalon Waterways">Avalon Waterways</option>
                        <option value="Azamara Cruises">Azamara Cruises</option>
                        <option value="Carnival Cruises">Carnival Cruises</option>
                        <option value="Celebrity Cruises">Celebrity Cruises</option>
                        <option value="Celestyal Cruises">Celestyal Cruises</option>
                        <option value="Costa Cruises">Costa Cruises</option>
                        <option value="Crystal Cruises">Crystal Cruises</option>
                        <option value="Cunard Line">Cunard Line</option>
                        <option value="Disney Cruises">Disney Cruises</option>
                        <option value="Emerald Cruises">Emerald Cruises</option>
                        <option value="Explora Journeys">Explora Journeys</option>
                        <option value="Holland America Line">Holland America Line</option>
                        <option value="Hurtigruten Cruise Line">Hurtigruten Cruise Line</option>
                        <option value="HX Hurtigruten Expeditions">HX Hurtigruten Expeditions</option>
                        <option value="Lindblad Expeditions">Lindblad Expeditions</option>
                        <option value="Margaritaville at Sea">Margaritaville at Sea</option>
                        <option value="MSC Cruises">MSC Cruises</option>
                        <option value="Norwegian Cruise Line">Norwegian Cruise Line</option>
                        <option value="Oceania Cruises">Oceania Cruises</option>
                        <option value="Paul Gauguin Cruises">Paul Gauguin Cruises</option>
                        <option value="Ponant Cruises">Ponant Cruises</option>
                        <option value="Princess Cruises">Princess Cruises</option>
                        <option value="Quark Expeditions">Quark Expeditions</option>
                        <option value="Regent Seven Seas Cruises">Regent Seven Seas Cruises</option>
                        <option value="Ritz-Carlton Yacht Cruises">Ritz-Carlton Yacht Cruises</option>
                        <option value="Royal Caribbean Cruises">Royal Caribbean Cruises</option>
                        <option value="Scenic Cruises">Scenic Cruises</option>
                        <option value="Sea Dream Yacht Club">Sea Dream Yacht Club</option>
                        <option value="Seabourn Cruises">Seabourn Cruises</option>
                        <option value="Silversea Cruises">Silversea Cruises</option>
                        <option value="Star Clipper Cruises">Star Clipper Cruises</option>
                        <option value="Tauck Tours">Tauck Tours</option>
                        <option value="UnCruise Adventures">UnCruise Adventures</option>
                        <option value="Uniworld Boutique River Cruises">Uniworld Boutique River Cruises</option>
                        <option value="Victory Cruise Lines">Victory Cruise Lines</option>
                        <option value="Viking Oceans">Viking Oceans</option>
                        <option value="Viking River Cruises">Viking River Cruises</option>
                        <option value="Virgin Voyages">Virgin Voyages</option>
                        <option value="Windstar Cruises">Windstar Cruises</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="mb-3">
                <input type="text" class="form-control" name="full_name" placeholder="Full Name*" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email*" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <input type="text" class="form-control" name="phone" placeholder="Phone*"
                    onkeypress="javascript:return isNumberKey(event)" minlength="10" maxlength="14" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mb-3">
                <input type="submit" class="form-control">
            </div>
        </div>
    </div>
</form>
